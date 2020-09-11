<section class="form_complete_perfil padding_general" id="form_complete_perfil">
	
	<div class="container-fluid">

      <div class="container">
          
            <div class="title_global">
                        
                <h1>
                    Datos personales
                </h1>

            </div>
            <?php $current_user   = wp_get_current_user(); ?>
            <?php $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}inscripciones where id_user = {$current_user->ID}", OBJECT ); ?>

            <div class="__row">
                
                <div class="__step">

                    <ul id="steps" class="step"></ul>
                    
                </div>

                <div class="loading_e_sp contacto_f_l">
                    <div class="lds-ellipsis">
                        <div>
                        </div>
                        <div>
                        </div>
                        <div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>

                <form id="form_perfil" class="_form" novalidate name="form_perfil">

                    <section data-step="0">

                        <input id="step" name="step" required="" type="hidden"  value="<?php echo $results[0]->step ?>" />
                        <input id="id" name="id" required="" type="hidden"  value="<?php echo $results[0]->id ?>" />
                        
                        <div class="__row row">
                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="dni">
                                        Ingresar DNI
                                    </label>
                                    <input id="dni" name="dni" required="" type="text" class="dni_mask" value="<?php echo ($results[0]->dni) ? $results[0]->dni : '' ?>" />
                                </div>
                            </div>

                             <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="name">
                                        Ingresar nombre completo
                                    </label>
                                    <input id="name" name="name" required="" type="text" value="<?php echo ($results[0]->name) ? $results[0]->name : '' ?>" />
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="email">
                                        Ingresar correo eléctronico
                                    </label>
                                    <input id="email" name="email" placeholder="Ingresar" required="" type="email" value="<?php echo ($results[0]->email) ? $results[0]->email : '' ?>"/>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="phone">
                                        Ingresar número de contacto
                                    </label>
                                    <input id="phone" name="phone" placeholder="Ingresar telefono/celular" required="" type="text" class="phone_mask" value="<?php echo ($results[0]->phone) ? $results[0]->phone : '' ?>"/>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="perfil">
                                        Seleccionar perfil
                                    </label>
                                    <div class="__select_v_movile  d-flex d-md-none  d-flex d-md-none" data-input="perfil">
                                        <div class="__item <?php echo ($results[0]->perfil == 'director') ? ' selected' : '' ?>" data-value-select="director" data-input="perfil">
                                            <span>
                                                Director
                                            </span>
                                        </div>
                                        <div class="__item <?php echo ($results[0]->perfil == 'maestro') ? ' selected' : '' ?>" data-value-select="maestro" data-input="perfil">
                                            <span>
                                                Maestro
                                            </span>
                                        </div>
                                    </div>
                                    <select id="perfil" name="perfil" class="__select_nice wide perfil d-none">
                                        <option data-display="Director o Maestro" value="-1">Director o Maestro</option>
                                        <option value="director" <?php echo ($results[0]->perfil == 'director') ? ' selected="selected"' : '' ?>>Director</option>
                                        <option value="maestro" <?php echo ($results[0]->perfil == 'maestro') ? ' selected="selected"' : '' ?>>Maestro</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="regimen">
                                        Indique su regimen laboral
                                    </label>
                                    <div class="__select_v_movile  d-flex d-md-none" data-input="regimen">
                                        <div class="__item <?php echo ($results[0]->regimen == 'nombrado') ? ' selected' : '' ?>" data-value-select="nombrado" data-input="perfil">
                                            <span>
                                                Nombrado
                                            </span>
                                        </div>
                                        <div class="__item <?php echo ($results[0]->regimen == 'contratado') ? ' selected' : '' ?>" data-value-select="contratado" data-input="perfil">
                                            <span>
                                                Contratado
                                            </span>
                                        </div>
                                    </div>
                                    <select id="regimen" name="regimen" class="__select_nice wide regimen d-none">
                                        <option data-display="Nombrado o contratado" value="-1">Nombrado o contratado</option>
                                        <option value="nombrado" <?php echo ($results[0]->regimen == 'nombrado') ? ' selected="selected"' : '' ?>>Nombrado</option>
                                        <option value="contratado" <?php echo ($results[0]->regimen == 'contratado') ? ' selected="selected"' : '' ?>>Contratado</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil">
                                       Ingresar fecha de inicio de su labor
                                    </label>
                                    <div class=" _row w-100 __row_cc">
                                        <div class=" col__s">
                                            <select id="dia_fecha_inicio" name="dia_fecha_inicio" class="__select_nice wide dia_fecha_inicio">
                                                <option data-display="Día" value="-1">Día</option>
                                                <?php for ($i=1; $i < 32; $i++) { ?>
                                                   <option value="<?php echo $i; ?>" <?php echo ($results[0]->dia_fecha_inicio == $i) ? ' selected="selected"' : '' ?>><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="col__s">
                                            <?php $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'] ?>
                                            <select id="mes_fecha_inicio" name="mes_fecha_inicio" class="__select_nice wide mes_fecha_inicio">
                                                <option data-display="Mes" value="-1">Mes</option>
                                                <?php foreach ($meses as $key => $value): ?>
                                                    <option value="<?php echo $value; ?>" <?php echo ($results[0]->mes_fecha_inicio == $value) ? ' selected="selected"' : '' ?>><?php echo $value; ?></option>
                                                <?php endforeach ?>
                                                <!-- <?php for ($i=1; $i < 13; $i++) { ?>
                                                   <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php } ?> -->
                                            </select>
                                        </div>

                                         <div class="col__s">
                                            <select id="anio_fecha_inicio" name="anio_fecha_inicio" class="__select_nice wide anio_fecha_inicio">
                                                <option data-display="Año" value="-1">Año</option>
                                                <?php for ($i=date('Y'); $i > 1930; $i--) { ?>
                                                   <option value="<?php echo $i; ?>" <?php echo ($results[0]->anio_fecha_inicio == $i) ? ' selected="selected"' : '' ?>><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 __group_buttons mt-4">
                                <button class="btn__inter" data-next>
                                    Guardar y continuar
                                </button>
                                 <a class="btn__inter empty d-none d-md-flex" href="<?php home_url( '', null ); ?>">
                                   Salir de la inscripción
                                </a>
                            </div>
                            <div class="col-md-12 __group_buttons mt-4 d-flex d-md-none">
                                 <a class="btn__inter empty" href="<?php home_url( '', null ); ?>">
                                   Salir de la inscripción
                                </a>
                            </div>
                        </div>
                         
                    </section>

                    <section data-step="1">
                        <div class="__row row">
                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="instituto_educativo">
                                        Ingresar nombre de la institución educativa
                                    </label>
                                    <input id="instituto_educativo" name="instituto_educativo" required="" type="text" value="<?php echo ($results[0]->instituto_educativo) ? $results[0]->instituto_educativo : '' ?>"/>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="nivel_educativo">
                                        Nivel educativo en el que enseñas
                                    </label>
                                    <div class="__select_v_movile __list d-flex d-md-none" data-input="nivel_educativo">
                                        <div class="__item <?php echo ($results[0]->nivel_educativo == 'inicial') ? ' selected' : '' ?>" data-value-select="inicial" data-input="nivel_educativo">
                                            <span>
                                                Inicial
                                            </span>
                                        </div>
                                        <div class="__item <?php echo ($results[0]->nivel_educativo == 'primaria') ? ' selected' : '' ?>" data-value-select="primaria" data-input="nivel_educativo">
                                            <span>
                                                Primaria
                                            </span>
                                        </div>
                                        <div class="__item <?php echo ($results[0]->nivel_educativo == 'secundaria') ? ' selected' : '' ?>" data-value-select="secundaria" data-input="nivel_educativo">
                                            <span>
                                                Secundaria
                                            </span>
                                        </div>
                                        <div class="__item <?php echo ($results[0]->nivel_educativo == 'especial') ? ' selected' : '' ?>" data-value-select="especial" data-input="nivel_educativo">
                                            <span>
                                                Especial
                                            </span>
                                        </div>
                                         <div class="__item <?php echo ($results[0]->nivel_educativo == 'basica') ? ' selected' : '' ?>" data-value-select="basica" data-input="nivel_educativo">
                                            <span>
                                                Basica alternativa
                                            </span>
                                        </div>
                                    </div>
                                    <select id="nivel_educativo" name="nivel_educativo" class="__select_nice wide nivel_educativo d-none ">
                                        <option data-display="Nivel educativo" value="-1">Nivel educativo</option>
                                        <option value="inicial" <?php echo ($results[0]->nivel_educativo == 'inicial') ? ' selected="selected"' : '' ?>>Inicial</option>
                                        <option value="primaria" <?php echo ($results[0]->nivel_educativo == 'primaria') ? ' selected="selected"' : '' ?>>Primaria</option>
                                        <option value="secundaria" <?php echo ($results[0]->nivel_educativo == 'secundaria') ? ' selected="selected"' : '' ?>>Secundaria</option>
                                         <option value="especial" <?php echo ($results[0]->nivel_educativo == 'especial') ? ' selected="selected"' : '' ?>>Especial</option>
                                         <option value="basica alternativa" <?php echo ($results[0]->nivel_educativo == 'basica alternativa') ? ' selected="selected"' : '' ?>>Basica alternativa</option>
                                    </select>
                                </div>
                            </div>

                             <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="ugel">
                                        Ingresar UGEL a la que perteneces
                                    </label>
                                    <input id="ugel" name="ugel" placeholder="Ingresar" required="" type="text" value="<?php echo ($results[0]->ugel) ? $results[0]->ugel : '' ?>"/>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="region">
                                        Seleccionar una región
                                    </label>

                                     <select id="region" name="region" class="__select_nice wide region" data_value="<?php echo ($results[0]->region) ? $results[0]->region : '' ?>">
                                        <option data-display="Seleccionar" value="-1">Seleccionar</option>
                                    </select>

                                     <div class="__select__floating_select d-block d-md-none" data-floating="region"></div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="provincia">
                                        Seleccionar una provincia
                                    </label>
                                     <select id="provincia" name="provincia" class="__select_nice wide provincia disabled" data_value="<?php echo ($results[0]->provincia) ? $results[0]->provincia : '' ?>">
                                        <option data-display="Seleccionar" value="-1">Seleccionar</option>
                                    </select>

                                    <div class="__select__floating_select  d-block d-md-none" data-floating="provincia"></div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="distrito">
                                        Seleccionar distrito
                                    </label>
                                     <select id="distrito" name="distrito" class="__select_nice wide distrito disabled" data_value="<?php echo ($results[0]->distrito) ? $results[0]->distrito : '' ?>">
                                        <option data-display="Seleccionar" value="-1">Seleccionar</option>
                                    </select>

                                    <div class="__select__floating_select  d-block d-md-none" data-floating="distrito"></div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="tipo_educacion">
                                        Tipo de educación
                                    </label>
                                    <div class="__select_v_movile  d-flex d-md-none __list  d-flex d-md-none" data-input="tipo_educacion">
                                        <div class="__item <?php echo ($results[0]->tipo_educacion == 'unidocente') ? ' selected' : '' ?>" data-value-select="unidocente" data-input="tipo_educacion">
                                            <span>
                                                Unidocente
                                            </span>
                                        </div>
                                        <div class="__item <?php echo ($results[0]->tipo_educacion == 'multigrado') ? ' selected' : '' ?>" data-value-select="multigrado" data-input="tipo_educacion">
                                            <span>
                                                Multigrado
                                            </span>
                                        </div>
                                         <div class="__item <?php echo ($results[0]->tipo_educacion == 'polidocente') ? ' selected' : '' ?>" data-value-select="polidocente" data-input="tipo_educacion">
                                            <span>
                                                Polidocente
                                            </span>
                                        </div>
                                    </div>
                                     <select id="tipo_educacion" name="tipo_educacion" class="__select_nice wide tipo_educacion d-none">
                                        <option data-display="Seleccionar" value="-1">Seleccionar</option>
                                        <option value="unidocente" <?php echo ($results[0]->tipo_educacion == 'unidocente') ? ' selected="selected"' : '' ?>>Unidocente</option>
                                        <option value="multigrado" <?php echo ($results[0]->tipo_educacion == 'multigrado') ? ' selected="selected"' : '' ?>>Multigrado</option>
                                        <option value="polidocente" <?php echo ($results[0]->tipo_educacion == 'polidocente') ? ' selected="selected"' : '' ?>>Polidocente</option>
                                    </select>
                                </div>
                            </div>
                        
                            <div class="col-md-12 __group_buttons mt-4">
                                <button class="btn__inter mr-3 __save_and_continue" data-next>
                                    Guardar y continuar
                                </button>
                                <button class="btn__inter empty d-md-flex d-none" data-prev>
                                    Regresar al paso anterior
                                </button>
                            </div>

                             <div class="col-md-12 __group_buttons mt-4 d-flex d-md-none">
                                 <button class="btn__inter empty __prev_step" data-prev>
                                    Regresar al paso anterior
                                </button>
                            </div>

                        </div>
                 
                    </section>

                    <section data-step="2">

                        <div class="__row row">
                            
                            <div class="col-md-12 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="name_inicativa">
                                        ¿Cómo se llama tu inicativa?
                                    </label>
                                    <input id="name_inicativa" name="name_inicativa" required="" type="text" value="<?php echo ($results[0]->name_inicativa) ? $results[0]->name_inicativa : '' ?>"/>
                                </div>
                            </div>

                            <div class="col-md-6 col-12 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="objetivo">
                                        ¿En que consiste tu inicativa?
                                    </label>
                                    <input id="objetivo" name="objetivo" required="" placeholder="Su objetivo" type="text" value="<?php echo ($results[0]->objetivo) ? $results[0]->objetivo : '' ?>"/>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil">
                                       ¿Desde cuando se encuentra implementada tu iniciativa?
                                    </label>
                                    <div class="row _row w-100">
                                        <div class="col-6">
                                            <select id="mes_implemen" name="mes_implemen" class="__select_nice wide mes_implemen">
                                                <option data-display="Mes" value="-1">Mes</option>
                                                <?php for ($i=1; $i < 13; $i++) { ?>
                                                   <option value="<?php echo $i; ?>" <?php echo ($results[0]->mes_implemen == $i) ? ' selected="selected"' : '' ?>><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                         <div class="col-6">
                                            <select id="anio_implemen" name="anio_implemen" class="__select_nice wide anio_implemen">
                                                <option data-display="Año" value="-1">Año</option>
                                                <?php for ($i=date('Y'); $i > 1930; $i--) { ?>
                                                   <option value="<?php echo $i; ?>" <?php echo ($results[0]->anio_implemen == $i) ? ' selected="selected"' : '' ?>><?php echo $i; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="motivo">
                                        ¿Qué te motivó a desarrollarla?
                                    </label>
                                    <textarea id="motivo" name="motivo" required="" rows="4" placeholder="Ingresar maximo 1200 carácteres" maxlength="1200"><?php echo ($results[0]->motivo) ? $results[0]->motivo : '' ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 col-12 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="cant_beneficiarios">
                                        ¿Cuántos son los beneficiados con tu inicativa?
                                    </label>
                                    <input id="cant_beneficiarios" type="number" onkeydown="javascript: return event.keyCode == 69 ? false : true" name="cant_beneficiarios" required="" placeholder="Ingresar la cantidad a proximada en números" value="<?php echo ($results[0]->cant_beneficiarios) ? $results[0]->cant_beneficiarios : '' ?>"/>
                                </div>
                            </div>

                            <div class="col-md-6 col-12 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="manera_beneficiando">
                                        ¿De qué manera se están beneficiando con la inicativa implementada?
                                    </label>
                                    <textarea id="manera_beneficiando" name="manera_beneficiando" required="" rows="4" placeholder="Ingrese una descripción" maxlength="1200"><?php echo ($results[0]->manera_beneficiando) ? $results[0]->manera_beneficiando : '' ?></textarea>
                                </div>
                            </div>

                             <div class="col-md-6 col-12 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="porque_ganaria">
                                        ¿Por qué consideras que deberías ser ganador <br> del premio?
                                    </label>
                                    <textarea id="porque_ganaria" name="porque_ganaria" required="" rows="4" placeholder="Se breve" maxlength="1200"><?php echo ($results[0]->porque_ganaria) ? $results[0]->porque_ganaria : '' ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="field">
                                    <label data_form="form_perfil" for="video">
                                        ¿Tiene un video que refuerce tu propuesta?
                                    </label>
                                    <input id="video" name="video" placeholder="Ingresar la URL del video" type="text" value="<?php echo ($results[0]->video) ? $results[0]->video : '' ?>"/>
                                </div>
                            </div>

                            <div class="col-md-12">
                                
                                <div class="__checkbox_content">
                                    <label class="container_checkbox">Declaro haber leído las <a href="#">bases del concurso</a> "El maestro que deja huella 2019"
                                      <input type="checkbox" checked="checked" name="base_concurso" id="base_concurso">
                                      <span class="checkmark"></span>
                                    </label>
                                </div>

                                 <div class="__checkbox_content">
                                    <label class="container_checkbox">Acepto los <a href="#">términos y condiciones</a>
                                      <input type="checkbox" checked="checked" name="terminos" id="terminos">
                                      <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="__detail_">
                                    *Una vez publicada tu inicativa, no se podrá editar.
                                </div>

                            </div>

                            <div class="col-md-12 __group_buttons mt-4">
                                <a class="btn__inter black mr-3" id="save_data_finish">
                                    Guardar
                                </a>
                                <button class="btn__inter mr-3 __publicar" type="submit">
                                    Publicar
                                </button>
                                <button class="btn__inter empty d-none d-md-flex" data-prev>
                                    Regresar al paso anterior
                                </button>

                               
                            </div>

                            <div class="col-md-12 __group_buttons mt-4 d-flex d-md-none">
                                 <button class="btn__inter empty" data-prev>
                                  Regresar al paso anterior
                                </button>
                            </div>

                        </div>

                        
                    </section>
                </form>

            </div>


      </div>

	</div>

</section>

<div class="__flating_selector region" data-input-reflect="region">
    
    <div class="__content__flating">
        
        <div class="__header">
            
            <h4>Resultado de la búsqueda</h4>

        </div>

        <div class="__body">
            
            <ul class="__content_list" id="_dates_for_filters_region">
                


            </ul>

        </div>

        <div class="__footer">
            
            <div class="__arrow_back" data-action="close-floating" data-input-reflect="region">
                
                <i class="arrow left"></i>

                <span>
                    Volver
                </span>

            </div>

            <div class="__input_filter">
                
                <input type="text" name="input_filter_floating" placeholder="Filtrar" onkeyup="filter(this,'_dates_for_filters_region')" >

            </div>

        </div>

    </div>

</div>


<div class="__flating_selector provincia" data-input-reflect="provincia">
    
    <div class="__content__flating">
        
        <div class="__header">
            
            <h4>Resultado de la búsqueda</h4>

        </div>

        <div class="__body">
            
            <ul class="__content_list" id="_dates_for_filters_provincia">
                


            </ul>

        </div>

        <div class="__footer">
            
            <div class="__arrow_back" data-action="close-floating" data-input-reflect="provincia">
                
                <i class="arrow left"></i>

                <span>
                    Volver
                </span>

            </div>

            <div class="__input_filter">
                
                <input type="text" name="input_filter_floating" placeholder="Filtrar" onkeyup="filter(this,'_dates_for_filters_provincia')" >

            </div>

        </div>

    </div>

</div>




<div class="__flating_selector distrito" data-input-reflect="distrito">
    
    <div class="__content__flating">
        
        <div class="__header">
            
            <h4>Resultado de la búsqueda</h4>

        </div>

        <div class="__body">
            
            <ul class="__content_list" id="_dates_for_filters_distrito">
                


            </ul>

        </div>

        <div class="__footer">
            
            <div class="__arrow_back" data-action="close-floating" data-input-reflect="distrito">
                
                <i class="arrow left"></i>

                <span>
                    Volver
                </span>

            </div>

            <div class="__input_filter">
                
                <input type="text" name="input_filter_floating" placeholder="Filtrar" onkeyup="filter(this,'_dates_for_filters_distrito')" >

            </div>

        </div>

    </div>

</div>