jQuery(document).ready(function($) {
    $('.phone_mask').mask('000 000 000');
    $('.dni_mask').mask('00000000');
    $('select.__select_nice').niceSelect();
    $('#hamburger__menu').click(function(event) {
        $(this).toggleClass('is-active')
        $('body').toggleClass('ov__hiden');
        $('.floating__menu__link').toggleClass('__visible')
    });
    if ($('#form_perfil').length) {
        getDepartamentos();
        detectChangesSelect();
        const buildSteps = steps => {
            const $steps = document.getElementById('steps')
            $steps.innerHTML = ''
            var contador = 1;
            let step_default_user = Number($('#form_perfil input[name="step"]').val());
            for (let label in steps) {
                if (steps.hasOwnProperty(label)) {
                    const $li = document.createElement('li')
                    const $a = document.createElement('a')
                    $li.classList.add('step-item')
                    if (steps[label].active) {
                        $li.classList.add('active')
                    }
                    // console.log(steps)
                    if (steps[label].completed) {
                        $li.classList.add('complete')
                    }
                    if (contador <= step_default_user && step_default_user != 0) {
                        $li.classList.add('complete')
                    }
                    $a.setAttribute('href', '#')
                    $a.classList.add('tooltip')
                    $a.dataset.tooltip = label
                    $a.innerText = contador
                    contador++
                    $a.addEventListener('click', e => {
                        e.preventDefault()
                        // wizard.revealStep(label)
                    })
                    $li.appendChild($a)
                    $steps.appendChild($li)
                }
            }
        }
        const wizard = new Zangdar('#form_perfil', {
            active_step_index: Number($('#form_perfil input[name="step"]').val()),
            onStepChange(step) {
                const breadcrumb = this.getBreadcrumb()
                buildSteps(breadcrumb)
            },
            customValidation(step, fields, form) {
                const validator = new Formr(form)
                remove_error_messanges($('#form_perfil'))
                if (step.labeled('0')) {
                    validator.required('dni', 'name', 'email', 'phone', 'perfil', 'regimen', 'dia_fecha_inicio', 'mes_fecha_inicio', 'anio_fecha_inicio').string('name').email('email')
                    let validate_selectes = validateSelect(form, ['perfil', 'regimen', 'dia_fecha_inicio', 'mes_fecha_inicio', 'anio_fecha_inicio'], '-1')
                    if (!validator.isValid()) {
                        let error_ = validator._errors
                        add_error_messanges(error_, $('#form_perfil'))
                        return false
                    }
                    if (validate_selectes) {
                        return false
                    }
                    show_loading_form()
                    if (saveInscription($('#form_perfil'), 0)) {
                        show_loading_form()
                        return true
                    } else {
                        show_loading_form()
                    }
                } else if (step.labeled('1')) {
                    validator.required('instituto_educativo', 'ugel')
                    let validate_selectes = validateSelect(form, ['nivel_educativo', 'region', 'provincia', 'distrito', 'tipo_educacion'], '-1')
                    if (!validator.isValid()) {
                        let error_ = validator._errors
                        add_error_messanges(error_, $('#form_perfil'))
                        return false
                    }
                    if (validate_selectes) {
                        return false
                    }
                    show_loading_form()
                    if (saveInscription($('#form_perfil'), 1)) {
                        show_loading_form()
                        return true
                    } else {
                        show_loading_form()
                    }
                }
                // else if (step.labeled('2')) {
                //     validator.required('name_inicativa', 'objetivo', 'motivo', 'cant_beneficiarios', 'manera_beneficiando', 'porque_ganaria', 'video')
                //     let validate_selectes = validateSelect(form, ['mes_implemen', 'anio_implemen'], '-1')
                //     if (!validator.isValid()) {
                //         let error_ = validator._errors
                //         add_error_messanges(error_, $('#form_perfil'))
                //         return false
                //     }
                //     if (validate_selectes) {
                //         return false
                //     }
                //     show_loading_form()
                //     if (saveInscription($('#form_perfil'), 2)) {
                //         show_loading_form()
                //         // return true
                //     } else {
                //         show_loading_form()
                //     }
                //     // return true
                // }
                return true
            },
            onSubmit(event) {
                event.preventDefault();
                event.stopPropagation();
                let form_a = document.forms['form_perfil']
                const validator = new Formr(form_a)
                validator.required('name_inicativa', 'objetivo', 'motivo', 'cant_beneficiarios', 'manera_beneficiando', 'porque_ganaria', 'video')
                let validate_selectes = validateSelect(form_a, ['mes_implemen', 'anio_implemen'], '-1')
                if (!validator.isValid()) {
                    let error_ = validator._errors
                    add_error_messanges(error_, $('#form_perfil'))
                    return false
                }
                if (validate_selectes) {
                    return false
                }
                if (!validCheckboxInscription('form_perfil')) {
                    return false
                }
                show_loading_form()
                if (saveInscription($('#form_perfil'), 'finish')) {
                    show_loading_form()
                    window.location.replace('/incripcion-completa');
                } else {
                    return false
                }
                return false
            }
        })
        // 
        const breadcrumb = wizard.getBreadcrumb()
        buildSteps(breadcrumb)
    }
    //
    $('a#save_data_finish').click(function(event) {
        let form = document.forms['form_perfil'];
        const validator = new Formr(form)
        remove_error_messanges($('#form_perfil'))
        validator.required('name_inicativa', 'objetivo', 'motivo', 'cant_beneficiarios', 'manera_beneficiando', 'porque_ganaria', 'video')
        let validate_selectes = validateSelect(form, ['mes_implemen', 'anio_implemen'], '-1')
        if (!validator.isValid()) {
            let error_ = validator._errors
            add_error_messanges(error_, $('#form_perfil'))
            return false
        }
        if (validate_selectes) {
            return false
        }
        if (!validCheckboxInscription('form_perfil')) {
            return false
        }
        show_loading_form()
        if (saveInscription($('#form_perfil'), 2)) {
            show_loading_form()
            // return true
        } else {
            show_loading_form()
        }
    });
    // FORMULARIO CONTACTO
    let formulario_contacto = document.forms['formulario_contacto'];
    let formulario_contacto_data = $('#formulario_contacto')
    formulario_contacto_data.submit(function(event) {
        show_loading_form()
        event.preventDefault();
        remove_error_messanges(formulario_contacto_data)
        const validator = new Formr(formulario_contacto);
        validator.required('name', 'email', 'phone', 'mensaje', ).string('name').email('email');
        if (!validator.isValid()) {
            let error_ = validator._errors
            add_error_messanges(error_, formulario_contacto_data)
            show_loading_form()
            return false
        }
        var data = getFormData(formulario_contacto_data);
        $.ajax({
            url: ajax_option.ajaxurl,
            method: 'POST',
            data: {
                action: 'ajaxcontact',
                data: data,
            },
            success: function(data) {
                show_loading_form()
                window.location.replace('/gracias');
            }
        }).done(function() {
            // console.log("success");
        }).fail(function() {
            show_loading_form()
            // console.log("error");
        }).always(function() {
            // console.log("complete");
        });
        return false;
    })
    // FORMULARIO ENCUESTA
    if ($('#formulario_encuesta').length) {
        checkboxOtro()
        let formulario_encuesta = document.forms['formulario_encuesta'];
        let formulario_encuesta_data = $('#formulario_encuesta')
        formulario_encuesta_data.submit(function(event) {
            show_loading_form()
            event.preventDefault();
            remove_error_messanges(formulario_encuesta_data)
            const validator = new Formr(formulario_encuesta);
            var data = getFormData(formulario_encuesta_data);
            data.action = 'ajaxsaveencuesta'
            if (!data.medio) {
                iziToast.error({
                    title: 'Error',
                    message: 'Es necesario marcar una de las opciones',
                    close: false,
                    progressBar: false,
                    pauseOnHover: false,
                });
                show_loading_form()
                return false
            }
            if (data.medio == 'Otro' && !data.otro_text) {
                iziToast.error({
                    title: 'Error',
                    message: 'Es necesario colocar un texto por el cual se entero del concurso.',
                    close: false,
                    progressBar: false,
                    pauseOnHover: false,
                });
                show_loading_form()
                return false
            }
            $.ajax({
                url: ajax_option.ajaxurl,
                method: 'POST',
                data: data,
                success: function(data) {
                    show_loading_form()
                    iziToast.success({
                        title: 'Gracias',
                         timeout: 20000,
                        message: data.message,
                        close: false,
                        progressBar: false,
                        pauseOnHover: false,
                    });
                    $('.incripcion_compelta ._caption__ .__but').remove();
                    $('.__step__grac.__content_prev').remove();
                    $('.__step__grac.__finish_').css('display', 'flex');
                    // UIkit.modal('#modal-encuesta').hide();
                }
            }).done(function() {
                // console.log("success");
            }).fail(function() {
                show_loading_form()
                // console.log("error");
            }).always(function() {
                // console.log("complete");
            });
            return false;
        })
    }
    // REGISTRO
    let formulario_registro = document.forms['formulario_registro'];
    let formulario_registro_data = $('#formulario_registro')
    formulario_registro_data.submit(function(event) {
        show_loading_form()
        event.preventDefault();
        remove_error_messanges(formulario_registro_data)
        const validator = new Formr(formulario_registro);
        validator.required('correo', 'password', 'valid_password').email('correo');
        if (!validator.isValid()) {
            let error_ = validator._errors
            add_error_messanges(error_, formulario_registro_data)
            show_loading_form()
            return false
        }
        let _compare_passw = compare_pass(formulario_registro_data)
        if (!_compare_passw) {
            show_loading_form()
            return false
        }
        var data = getFormData(formulario_registro_data);
        data['action'] = 'ajaxregister'
        var username = data['correo'].split('@')
        data['user_login'] = username[0] + randomText('5')
        console.log(data)
        $.ajax({
            url: ajax_option.ajaxurl,
            method: 'POST',
            data: data,
            success: function(data) {
                if ((data.user_exist && data.error) || (!data.user_exist && data.error)) {
                    iziToast.error({
                        title: 'Error',
                        message: data.message,
                        close: false,
                        progressBar: false,
                        pauseOnHover: false,
                    });
                    show_loading_form();
                } else if (!data.user_exist && !data.error) {
                    iziToast.success({
                        title: 'Genial',
                         timeout: 20000,
                        message: data.message,
                        close: false,
                        progressBar: false,
                        pauseOnHover: false,
                    });
                    resetForm(formulario_registro_data)
                    show_loading_form();
                    // window.location.replace('/login');
                }
            }
        }).done(function() {
            // console.log("success");
        }).fail(function() {
            show_loading_form()
            // console.log("error");
        }).always(function() {
            // console.log("complete");
        });
        return false;
    })
    // LOGEO
    let formulario_login = document.forms['formulario_login'];
    let formulario_login_data = $('#formulario_login')
    formulario_login_data.submit(function(event) {
        show_loading_form()
        event.preventDefault();
        remove_error_messanges(formulario_login_data)
        const validator = new Formr(formulario_login);
        validator.required('correo', 'password').email('correo');
        if (!validator.isValid()) {
            let error_ = validator._errors
            add_error_messanges(error_, formulario_login_data)
            show_loading_form()
            return false
        }
        var data = getFormData(formulario_login_data);
        data['action'] = 'ajaxlogin'
        $.ajax({
            url: ajax_option.ajaxurl,
            method: 'POST',
            data: data,
            success: function(data) {
                if (data.loggedin == true) {
                    document.location.href = data.redirect;
                } else {
                    iziToast.show({
                        class: 'toast-vm',
                        pauseOnHover: false,
                        close: false,
                        progressBar: false,
                        title: 'Error',
                        message: data.message
                    });
                    show_loading_form()
                }
            }
        }).done(function() {
            // console.log("success");
        }).fail(function() {
            show_loading_form()
            // console.log("error");
        }).always(function() {
            // console.log("complete");
        });
        return false;
    })
    //
    $('.__slider_slidershow_home').on('itemshown', function() {
        let index_slider = $(this).find('li.uk-active').attr('data-slider-index');
        console.log(index_slider)
        if (index_slider == 0) {
            $('.__menu-p .gle_m .__group_buttons .btn__inter').addClass('black')
        } else {
            $('.__menu-p .gle_m .__group_buttons .btn__inter').removeClass('black')
        }
    });
    let data_content = null
    $('#select_ccc_e, .__overlay_select').click(function(event) {
        data_content = $(this).attr('data_content');
        $('.__floating_select').toggleClass('shower');
        $('.__overlay_select').toggleClass('shower');
    });
    $('.__floating_select .select_item').click(function(event) {
        if (data_content) {
            let index_select = $(this).index()
            let fecha = $(this).find('span.anio').text()
            $('.__select_custom__move[data_content="' + data_content + '"]').removeClass('uk-active')
            $('.uk-switcher[data_content_content="' + data_content + '"]').find('li').removeClass('uk-active')
            $('.uk-switcher[data_content_content="' + data_content + '"] li').eq(index_select).addClass('uk-active')
            $('.__floating_select').toggleClass('shower');
            $('.__overlay_select').toggleClass('shower');
            $('.__floating_select ').find('li').removeClass('active')
            $(this).addClass('active')
            $(this).addClass('select_item')
            //  $('.__select_custom__move[data_content="' + data_content  +'"] .__com .set_text').html(fecha)
        }
    });
    $('.__select_v_movile .__item:not(.disabled)').click(function(event) {
        let input = $(this).parent('.__select_v_movile').attr('data-input');
        let value = $(this).attr('data-value-select');
        $(this).parent('.__select_v_movile').find('.selected').removeClass('selected')
        $(this).addClass('selected')
        $('form[name="form_perfil"]').find('select[name="' + input + '"]').val(value)
    });
    start_floating()
    close_floating()
});

function start_floating() {
    $('.__select__floating_select').click(function(event) {
        let fl = $(this).attr('data-floating');
        $('.__flating_selector[data-input-reflect="' + fl + '"]').addClass('showing')
    });
}

function close_floating() {
    $('.__arrow_back').click(function(event) {
        let fl = $(this).attr('data-input-reflect');
        $('.__flating_selector[data-input-reflect="' + fl + '"]').removeClass('showing')
    });
}

function compare_pass(_form) {
    if ($(_form).find('#password').val() == $(_form).find('#valid_password').val()) {
        if ($(_form).find('#password').val().length < 6) {
            $(_form).find('#valid_password').addClass('_error_')
            $(_form).find('#password').addClass('_error_')
            return false
        } else {
            $(_form).find('#valid_password').removeClass('_error_')
            $(_form).find('#password').removeClass('_error_')
            return true
        }
    } else {
        $(_form).find('#valid_password').addClass('_error_')
        return false
    }
}

function randomText(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

function saveInscription(form, step) {
    let data = getFormData(form)
    var response = "";
    data.action = 'ajaxsaveinscription'
    data.step = step
    $.ajax({
        url: ajax_option.ajaxurl,
        type: 'POST',
        async: false,
        data: data,
        success: (data) => {
            response = data
            // if (response.status == 200 && response.error == false) {
            //     return true
            // }
        }
    }).done(function() {}).fail(function() {}).always(function() {});
    if (response.status == 200 && response.error == false) {
        iziToast.success({
            class: 'toast-vm',
            pauseOnHover: false,
            close: false,
            progressBar: false,
            title: 'Correcto',
            message: response.message
        });
        return true
    } else {
        iziToast.show({
            class: 'toast-vm',
            pauseOnHover: false,
            close: false,
            progressBar: false,
            title: 'Error',
            message: response.message
        });
        return false
    }
}

function getFormData($form) {
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};
    $.map(unindexed_array, function(n, i) {
        indexed_array[n['name']] = n['value'];
    });
    return indexed_array;
}

function show_loading_form() {
    $('.loading_e_sp').toggleClass('show');
}

function add_error_messanges(error_, formulario) {
    let arrays_keys = Object.keys(error_)
    arrays_keys.forEach(element => {
        formulario.find('input[name="' + element + '"],textarea[name="' + element + '"]').addClass('_error_')
    });
}

function remove_error_messanges(formulario) {
    formulario.find('input,textarea').removeClass('_error_')
}

function selectFilterLiRegion() {
    //REGION
    $('.__flating_selector[data-input-reflect="region"] .__content_list li').click(function(event) {
        let value = $(this).attr('data-value')
        let text = $(this).text()
        $(this).parent('.__content_list').find('li.selected').removeClass('selected')
        $(this).addClass('selected')
        $('form#form_perfil select[name="region"]').val(value)
        $('.nice-select.region').find('span.current').text(text)
        $('.__flating_selector.region').removeClass('showing')
        getProvincias()
    });
}

function selectFilterLiProvincia() {
    //REGION
    $('.__flating_selector[data-input-reflect="provincia"] .__content_list li').click(function(event) {
        let value = $(this).attr('data-value')
        let text = $(this).text()
        $(this).parent('.__content_list').find('li.selected').removeClass('selected')
        $(this).addClass('selected')
        $('form#form_perfil select[name="provincia"]').val(value)
        $('.nice-select.provincia').find('span.current').text(text)
        $('.__flating_selector.provincia').removeClass('showing')
        getDistrito()
    });
}

function selectFilterLiDistrito() {
    //REGION
    $('.__flating_selector[data-input-reflect="distrito"] .__content_list li').click(function(event) {
        let value = $(this).attr('data-value')
        let text = $(this).text()
        $(this).parent('.__content_list').find('li.selected').removeClass('selected')
        $(this).addClass('selected')
        $('form#form_perfil select[name="distrito"]').val(value)
        $('.nice-select.distrito').find('span.current').text(text)
        $('.__flating_selector.distrito').removeClass('showing')
    });
}

function filter(element, what) {
    var value = $(element).val();
    value = value.toUpperCase()
    if (value == '') {
        $('#' + what + ' > li').show();
    } else {
        $('#' + what + ' > li:not(:contains(' + value + '))').hide();
        $('#' + what + ' > li:contains(' + value + ')').show();
    }
};

function getDepartamentos() {
    let value_departamento = $('form#form_perfil select[name="region"]').attr('data_value');
    $.ajax({
        url: ajax_option.ajaxurl,
        method: 'POST',
        data: {
            action: 'ajaxregion'
        },
        success: (data) => {
            let departaments = data.data
            var departament_select = document.getElementById("region");
            for (var i = 0; i < departaments.length; i++) {
                var option = document.createElement("option");
                let dep = departaments[i]
                option.text = dep.departamento;
                option.value = dep.idDepa;
                if (dep.idDepa === value_departamento) {
                    option.selected = 'selected'
                }
                departament_select.add(option);
                $('.__flating_selector.region').find('ul.__content_list').append($('<li></li>').attr("data-value", option.value).attr("data-display", i || 0).addClass((dep.idDepa === value_departamento) ? " selected" : "").html(option.text))
                // $('form_perfil[name="form_perfil"] select[name="region"]')
            }
            selectFilterLiRegion()
            jQuery(document).ready(function($) {
                $('select.__select_nice[name="region"]').niceSelect('update');
            });
            if (value_departamento) {
                jQuery(document).ready(function($) {
                    $('select.__select_nice[name="provincia"]').removeClass('disabled')
                    $('select.__select_nice[name="provincia"]').niceSelect('update');
                });
            }
            getProvincias()
        }
    }).done(function() {}).fail(function() {}).always(function() {});
}

function getProvincias() {
    let value_departamento = $('form#form_perfil select[name="region"]').attr('data_value');
    if (value_departamento) {
        let value_region = $('form#form_perfil select[name="region"]').val()
        $.ajax({
            url: ajax_option.ajaxurl,
            method: 'POST',
            data: {
                action: 'ajaxprovincia',
                id_departamento: value_region
            },
            success: (data) => {
                let provincia = data.data
                let value_provincia = $('form#form_perfil select[name="provincia"]').attr('data_value');
                jQuery(document).ready(function($) {
                    $('form#form_perfil select[name="provincia"]').empty()
                    $('.__flating_selector.provincia').find('ul.__content_list').empty()
                });
                var provincia_select = document.getElementById("provincia");
                for (var i = 0; i < provincia.length; i++) {
                    var option = document.createElement("option");
                    let prov = provincia[i]
                    option.text = prov.provincia;
                    option.value = prov.idProv;
                    if (prov.idProv == value_provincia) {
                        option.selected = 'selected'
                    }
                    provincia_select.add(option);
                    $('.__flating_selector.provincia').find('ul.__content_list').append($('<li></li>').attr("data-value", option.value).attr("data-display", i || 0).addClass((prov.idProv === value_provincia) ? " selected" : "").html(option.text))
                    // $('form_perfil[name="form_perfil"] select[name="region"]')
                }
                selectFilterLiProvincia()
                jQuery(document).ready(function($) {
                    $('select.__select_nice[name="provincia"]').removeClass('disabled')
                    $('select.__select_nice[name="provincia"]').niceSelect('update');
                });
                getDistrito()
            }
        }).done(function() {}).fail(function() {}).always(function() {});
    }
}

function getDistrito() {
    let value_prov = $('form#form_perfil select[name="provincia"]').attr('data_value');
    if (value_prov) {
        let value_provincia = $('form#form_perfil select[name="provincia"]').val()
        $.ajax({
            url: ajax_option.ajaxurl,
            method: 'POST',
            data: {
                action: 'ajaxdistritos',
                id_provincia: value_provincia
            },
            success: (data) => {
                let distrito = data.data
                var distrito_select = document.getElementById("distrito");
                let value_distrito = $('form#form_perfil select[name="distrito"]').attr('data_value');
                jQuery(document).ready(function($) {
                    $('form#form_perfil select[name="distrito"]').empty()
                    $('.__flating_selector.distrito').find('ul.__content_list').empty()
                });
                for (var i = 0; i < distrito.length; i++) {
                    var option = document.createElement("option");
                    let dist = distrito[i]
                    option.text = dist.distrito;
                    option.value = dist.idDist;
                    if (dist.idDist == value_distrito) {
                        option.selected = 'selected'
                    }
                    distrito_select.add(option);
                    $('.__flating_selector.distrito').find('ul.__content_list').append($('<li></li>').attr("data-value", option.value).attr("data-display", i || 0).addClass((dist.idDist == value_distrito) ? " selected" : "").html(option.text))
                    // $('form_perfil[name="form_perfil"] select[name="region"]')
                }
                selectFilterLiDistrito()
                jQuery(document).ready(function($) {
                    $('select.__select_nice[name="distrito"]').removeClass('disabled')
                    $('select.__select_nice[name="distrito"]').niceSelect('update');
                });
            }
        }).done(function() {}).fail(function() {}).always(function() {});
    }
}

function detectChangesSelect() {
    $(document).on('click.nice_select', '.region .option:not(.disabled)', function(event) {
        let value_region = $('form#form_perfil select[name="region"]').val()
        $.ajax({
            url: ajax_option.ajaxurl,
            type: 'POST',
            data: {
                action: 'ajaxprovincia',
                id_departamento: value_region
            },
            success: (data) => {
                let provincia = data.data
                let value_provincia = $('form#form_perfil select[name="provincia"]').attr('data_value');
                jQuery(document).ready(function($) {
                    $('form#form_perfil select[name="provincia"]').empty()
                });
                var provincia_select = document.getElementById("provincia");
                for (var i = 0; i < provincia.length; i++) {
                    var option = document.createElement("option");
                    let prov = provincia[i]
                    option.text = prov.provincia;
                    option.value = prov.idProv;
                    // if (option.value = data_value) {
                    //     option.seleted = 'selected'
                    // }
                    provincia_select.add(option);
                    jQuery(document).ready(function($) {
                        $('.__flating_selector.provincia').find('ul.__content_list').empty();
                        $('.__flating_selector.provincia').find('ul.__content_list').append($('<li></li>').attr("data-value", option.value).attr("data-display", i || 0).addClass((prov.idProv === value_provincia) ? " selected" : "").html(option.text))
                    });
                    // $('form_perfil[name="form_perfil"] select[name="region"]')
                }
                jQuery(document).ready(function($) {
                    $('select.__select_nice[name="provincia"]').removeClass('disabled')
                    $('select.__select_nice[name="provincia"]').niceSelect('update');
                });
            }
        }).done(function() {}).fail(function() {}).always(function() {});
    });
    //
    $(document).on('click.nice_select', '.provincia .option:not(.disabled)', function(event) {
        let value_provincia = $('form#form_perfil select[name="provincia"]').val()
        $.ajax({
            url: ajax_option.ajaxurl,
            type: 'POST',
            data: {
                action: 'ajaxdistritos',
                id_provincia: value_provincia
            },
            success: (data) => {
                let distrito = data.data
                 let value_distrito = $('form#form_perfil select[name="distrito"]').attr('data_value');
                jQuery(document).ready(function($) {
                    $('form#form_perfil select[name="distrito"]').empty()
                });
                var distrito_select = document.getElementById("distrito");
                for (var i = 0; i < distrito.length; i++) {
                    var option = document.createElement("option");
                    let prov = distrito[i]
                    option.text = prov.distrito;
                    option.value = prov.idDist;
                    distrito_select.add(option);
                    jQuery(document).ready(function($) {
                        $('.__flating_selector.distrito').find('ul.__content_list').empty();
                        $('.__flating_selector.distrito').find('ul.__content_list').append($('<li></li>').attr("data-value", option.value).attr("data-display", i || 0).addClass((prov.idDist === value_distrito) ? " selected" : "").html(option.text))
                    });
                    // $('form_perfil[name="form_perfil"] select[name="region"]')
                }
                jQuery(document).ready(function($) {
                    $('select.__select_nice[name="distrito"]').removeClass('disabled')
                    $('select.__select_nice[name="distrito"]').niceSelect('update');
                });
            }
        }).done(function() {}).fail(function() {}).always(function() {});
    });
    //
}

function checkboxOtro() {
    $('form#formulario_encuesta input[name="medio"]').change(function() {
        if ($(this).val() == 'Otro') {
            $('form#formulario_encuesta input#otro_text').removeClass('disabled');
        } else {
            $('form#formulario_encuesta input#otro_text').val('')
            $('form#formulario_encuesta input#otro_text').addClass('disabled');
        }
    });
}

function validCheckboxInscription(name) {
    if (!$('form[name="' + name + '"] input[type="checkbox"][name="base_concurso"]').is(":checked")) {
        $('form[name="' + name + '"] input[type="checkbox"][name="base_concurso"]').addClass('_error_')
        return false
    }
    $('form[name="' + name + '"] input[type="checkbox"][name="base_concurso"]').removeClass('_error_')
    if (!$('form[name="' + name + '"] input[type="checkbox"][name="terminos"]').is(":checked")) {
        $('form[name="' + name + '"] input[type="checkbox"][name="terminos"]').addClass('_error_')
        return false
    }
    $('form[name="' + name + '"] input[type="checkbox"][name="terminos"]').removeClass('_error_')
    return true
}

function validateSelect(form, selects) {
    let exit_validate = false
    var name = form.getAttribute('name');
    for (var i = selects.length - 1; i >= 0; i--) {
        let select = selects[i]
        var e = form.elements[select];
        let _name_i = e.getAttribute('name');
        var value_option = e.options[e.selectedIndex].value;
        if (value_option == '-1') {
            e.classList.add("_error_");
            $('form[name="' + name + '"] .nice-select.' + _name_i).addClass('_error_')
            $('form[name="' + name + '"] .__select_v_movile[data-input="' + _name_i + '"]').addClass('_error_')
            exit_validate = true
        } else {
            $('form[name="' + name + '"] .nice-select.' + _name_i).removeClass('_error_')
            $('form[name="' + name + '"] .__select_v_movile[data-input="' + _name_i + '"]').removeClass('_error_')
        }
    }
    return exit_validate
}

function resetForm(form) {
    form.trigger("reset");
    form.removeClass('was-validated')
}