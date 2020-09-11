<?php

add_action('wp_enqueue_scripts', 'template_scripts');

function template_scripts()
{

    // IZITOAS

    wp_enqueue_style('Izitoast-CSS', 'https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css', 'null', 'false', 'all');

    wp_enqueue_script('Izitoast-JS', 'https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js', array('jquery'), 'false', 'false');

    // BOOTSTRAP

    wp_enqueue_style('Bootstrap-grid-CSS', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap-grid.min.css', 'null', 'false', 'all');

    // UIKIT
    wp_enqueue_style('Normalize-CSS', '//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', 'null', 'false', 'all');

     // wp_enqueue_style('Estilos-Fonts', get_template_directory_uri() . '/fonts/stylesheet.css', 'null', 'false', 'all');

    wp_enqueue_style('Uikit-CSS', '//cdn.jsdelivr.net/npm/uikit@3.2.4/dist/css/uikit.min.css', 'null', 'false', 'all');

    wp_enqueue_script('Uikit-JS', '//cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit.min.js', array('jquery'), 'false', 'false');

    wp_enqueue_script('Uikit-icos-JS', '//cdn.jsdelivr.net/npm/uikit@3.2.4/dist/js/uikit-icons.min.js', array('jquery'), 'false', 'false');

    wp_enqueue_script('Form-JS', get_template_directory_uri() . '/libraries/js/formr.js', array('jquery'), 'false', 'false');

    wp_enqueue_script('Zangdar-JS', get_template_directory_uri() . '/libraries/js/zangdar.min.js', array('jquery'), 'false', 'false');

    wp_enqueue_script('Mask-JS', get_template_directory_uri() . '/libraries/js/jquery.mask.min.js', array('jquery'), 'false', 'false');

    wp_enqueue_style('Fonts', get_template_directory_uri() . '/fonts/stylesheet.css', 'null', 'false', 'all');

    wp_enqueue_script('Nice-Select-JS', get_template_directory_uri() . '/libraries/js/jquery.nice-select.min.js', array('jquery'), 'false', 'false');

    wp_enqueue_style('Nice-Select-CSS', get_template_directory_uri() . '/libraries/css/nice-select.css', 'null', 'false', 'all');

    wp_enqueue_style('Hambuerguer-css', get_template_directory_uri() . '/libraries/css/hambuerger.min.css', 'null', 'false', 'all');

    // FANCYBOX

    wp_enqueue_style('Fancybox-CSS', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css', 'null', 'false', 'all');

    wp_enqueue_script('Fancybox-JS', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), 'false', 'false');

    // wp_enqueue_script('Parrallax-JS', '//cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', array('jquery'), 'false', 'false');

    // wp_enqueue_script('Bootstrap-JS', get_template_directory_uri() . '/libraries/js/bootstrap.min.js', array('jquery'), 'false', 'false');

    // NORMALIZE

    wp_enqueue_script('mainjs', get_template_directory_uri() . '/libraries/js/master.js', array('jquery'), 'false', 'false');

    $database = array(
        'ajaxurl'           => admin_url('admin-ajax.php'),
        'redirection_home'  => home_url(),
        'loadingmessage'    => __('Sending user info, please wait...'),
    );

    wp_localize_script('mainjs', 'ajax_option', $database);

    // CSS DEL SITIO


    wp_enqueue_style('Estilos', get_template_directory_uri() . '/style.css', 'null', 'false', 'all');

     wp_enqueue_style('Estilos-SCSS', get_template_directory_uri() . '/library/css/style.css', 'null', 'false', 'all');

}


function init_functions()
{
    // add_action('wp_ajax_nopriv_ajaxgetdni', 'ajax_get_dni');

    add_action('wp_ajax_nopriv_ajaxcontact', 'ajax_contact');
    add_action('wp_ajax_ajaxcontact', 'ajax_contact');
    // add_action('wp_ajax_nopriv_ajaxsendemail', 'ajax_send_email');

    if (is_user_logged_in()) {
        add_action( 'wp_ajax_ajaxdistritos', 'ajax_distritos' );
        add_action( 'wp_ajax_nopriv_ajaxdistritos', 'ajax_distritos' );
        add_action( 'wp_ajax_ajaxregion', 'ajax_region' );
        add_action( 'wp_ajax_nopriv_ajaxregion', 'ajax_region' );
        add_action( 'wp_ajax_ajaxprovincia', 'ajax_provincia' );
        add_action( 'wp_ajax_nopriv_ajaxprovincia', 'ajax_provincia' );
        add_action( 'wp_ajax_ajaxsaveinscription', 'ajax_save_inscription' );
        add_action( 'wp_ajax_nopriv_ajaxsaveinscription', 'ajax_save_inscription' );        
        add_action( 'wp_ajax_ajaxsaveencuesta', 'ajax_save_encuesta' );
        add_action( 'wp_ajax_nopriv_ajaxsaveencuesta', 'ajax_save_encuesta' );
    }

    if (!is_user_logged_in()) {
        add_action('wp_ajax_nopriv_ajaxregister', 'ajax_register');
        add_action('wp_ajax_nopriv_ajaxlogin', 'ajax_login');
        // add_action('wp_ajax_ajaxdeleteparticiple', 'ajax_delete_participle');
        // add_action('wp_ajax_ajaxsaveconfiglanding', 'ajax_save_config_landing');
    }
}
add_action('init', 'init_functions');


function ajax_contact()
{
    if (!empty($_POST['data'])) {
        $data_p = $_POST['data'];

        $name = $data_p['name'];
        $email = $data_p['email'];
        $phone = $data_p['phone'];
        $mensaje = $data_p['mensaje'];
        
        // get the post_id of an options page
        $post_id = get_options_page_id('general');
        // get a value using $post_id
        $correo_de_envio = get_field('correo_de_envio', $post_id);
        $to = $correo_de_envio;
        // $to = 'josefc9512@gmail.com';
        $subject = 'Alguien desea comunicarse contigo';
        $body = 'El ciente ' . $name  .', quiere comunicarse contigo, el teléfono del cliente es: ' . $phone . ', el correo es: ' . $email . ', y su mensaje es: ' . $mensaje;
        $headers = array('Content-Type: text/html; charset=UTF-8');
         
        wp_mail( $to, $subject, $body, $headers );

        $array_response = array('status' => 'success', 'message' => 'El correo fue enviado');

        wp_send_json($array_response);


    } else {
        $array_response = array('status' => 'error');
        wp_send_json_error($array_response, 500);

    }


    die();
}

// Login con correo
function ajax_login()
{
    check_ajax_referer('ajax-login-nonce', 'security');

    $seach_user_for_email = get_user_by('email', $_POST['correo']);

    if ($seach_user_for_email->data->user_status == 0) {
        $info                  = array();
        $info['user_login']    = $seach_user_for_email->data->user_login;
        $info['user_password'] = $_POST['password'];
        $info['remember']      = ($_POST['man_sesion'] == 'on') ? true : false;

        if ($_POST['redirect']) {
            $redirect = $_POST['redirect'];
        } else {
            $redirect = get_home_url();
        }

        $user_signon = wp_signon($info, is_ssl());
        if (is_wp_error($user_signon)) {
            ajax_response(array('loggedin' => false, 'message' => __('Nombre de usuario o contraseña incorrectos.')));
        } else {
            $userID = $user_signon->ID;
            wp_set_current_user( $userID, $user_login );
            wp_set_auth_cookie( $userID, true, false );
            ajax_response(array('loggedin' => true, 'message' => __('Login successful, redirecting...'), 'redirect' => $redirect));
        }
    } else {
        ajax_response(array('loggedin' => false, 'message' => __('Este correo no esta activado para poder logearse')));
    }

    die();
}


// Registro con correo
function ajax_register()
{
    check_ajax_referer('ajax-register-nonce', 'security_register');
    $seach_user_for_email = get_user_by('email', $_POST['correo']);
    $user_mail            = $_POST['email'];

    if (!$seach_user_for_email) {
        $info               = array();
        $info['user_login'] = $_POST['user_login'];
        $info['user_pass']  = $_POST['password'];
        $info['user_email'] = $_POST['correo'];
        $info['role']       = 'participante';

        $message = '';

        $user_id = wp_insert_user($info);
        if (!is_wp_error($user_id)) {

            $code = sha1($user . time());

            global $wpdb;

            $update_user_register = $wpdb->update(
                $wpdb->prefix .'users',
                array('user_activation_key' => $code),
                array('ID' => $user_id),
                array('%s')
            );

            if ($update_user_register) {

                $table = $wpdb->prefix . 'inscripciones';
                $data  = array('id_user' => $user_id, 'step' => 0, $email => $info['user_email']);
                $wpdb->insert($table, $data);

                $activation_link = add_query_arg(array('key' => $code, 'user' => $user_id), get_permalink('47'));

                $message .= 'Este es una confirmación de registro en la página Maestro que deja huella.<br>';

                // $message .= 'Link de activación : ' . $activation_link;

                wp_mail($user_mail, 'Registro de usuario', $message);

                wp_send_json(array('user_exist' => false, 'error' => false, 'message' => __('Tu registro se a completado satisfactoriamente. Ya puedes iniciar sesión.')));
                
            } else {
                wp_send_json(array('user_exist' => false, 'error' => false, 'message' => __('Tuvimos un problema al momento de registrarte, por favor vuelve a intentarlo')));
            }

        } else {
            wp_send_json(array('user_exist' => false, 'error' => true, 'message' => __('Tuvimos un problema por aqui')));
        }
    } else {
        wp_send_json(array('user_exist' => true, 'error' => true, 'message' => __('Este correo ya se encuentra registrado')));
    }
    die();

}

function ajax_region()
{
    global $wpdb;

    $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}departamento", OBJECT );

    ajax_response(array('status' => 200, 'data' => $results));
}

function ajax_provincia()
{
    global $wpdb;

    $id_departamento            = $_POST['id_departamento'];

    $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}provincia where idDepa = {$id_departamento}", OBJECT );

    ajax_response(array('status' => 200, 'data' => $results));
}

function ajax_distritos()
{
    global $wpdb;

    $id_provincia            = $_POST['id_provincia'];

    $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}distrito where idProv = {$id_provincia}", OBJECT );

    ajax_response(array('status' => 200, 'data' => $results));
}

function ajax_save_encuesta()
{
    global $wpdb;
    $medio           = $_POST['medio'];
    $otro_text       = $_POST['otro_text'];

    $current_user   = wp_get_current_user();
    $id_user        = $current_user->ID;

    $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}encuesta where id_user = {$id_user}", OBJECT );

    if (count($results)) {
        ajax_response(array('status' => 200, 'error' => true, 'message' => __('Ya respondiste esta encuensta')));
    }

    $table = $wpdb->prefix . 'encuesta';
    $data  = array(
        'id_user'   =>$id_user,
            'respuesta'         => $medio,
            'otra_respuesta'    => $otro_text,
    );

    $return = $wpdb->insert($table, $data);

    if ($return) {
        ajax_response(array('status' => 200, 'error' => false, 'message' => __('Encuesta guardada')));
    }
    else
    {
        ajax_response(array('status' => 200, 'error' => true, 'message' => __('Tubimos problemas para guardar la encuesta')));
    }

}

function ajax_save_inscription()
{
    global $wpdb;
    $step           = $_POST['step'];
    $current_user   = wp_get_current_user();
    $id_user        = $current_user->ID;

    if ($step == '0') {
        $table = $wpdb->prefix . 'inscripciones';
        $where = array('id_user' => $id_user, 'id' => $_POST['id']);
        $data  = array(
            'dni'               => $_POST['dni'], 
            'name'              => $_POST['name'], 
            'email'             => $_POST['email'], 
            'phone'             => $_POST['phone'],
            'perfil'            => $_POST['perfil'],
            'regimen'           => $_POST['regimen'],
            'dia_fecha_inicio'  => $_POST['dia_fecha_inicio'],
            'mes_fecha_inicio'  => $_POST['mes_fecha_inicio'],
            'anio_fecha_inicio' => $_POST['anio_fecha_inicio'],
            'step'              => 1
        );

        $return = $wpdb->update($table, $data, $where);

        if ($return) {
            ajax_response(array('status' => 200, 'error' => false, 'step' => 0, 'next_step' => 1, 'message' => __('Datos guardados')));
        }
        else
        {
             $data_w  = array(
                'id_user'           => $id_user, 
                'dni'               => $_POST['dni'], 
                'name'              => $_POST['name'], 
                'email'             => $_POST['email'], 
                'phone'             => $_POST['phone'],
                'perfil'            => $_POST['perfil'],
                'regimen'           => $_POST['regimen'],
                'dia_fecha_inicio'  => $_POST['dia_fecha_inicio'],
                'mes_fecha_inicio'  => $_POST['mes_fecha_inicio'],
                'anio_fecha_inicio' => $_POST['anio_fecha_inicio'],
                'step'              => 1
            );
            $return_create = $wpdb->insert($table, $data_w);

            if ($return_create) {
                ajax_response(array('status' => 200, 'error' => false, 'step' => 0, 'next_step' => 1, 'message' => __('Datos guardados')));
            }
            else
            {
                ajax_response(array('status' => 200, 'error' => true, 'step' => false, 'next_step' => false, 'message' => __('Los datos no han sido guardados')));
            }
        }
    }
    else if ($step == '1')
    {
        $table = $wpdb->prefix . 'inscripciones';
        $where = array('id_user' => $id_user, 'id' => $_POST['id']);
        $data  = array(
            'instituto_educativo'           => $_POST['instituto_educativo'], 
            'nivel_educativo'               => $_POST['nivel_educativo'], 
            'ugel'                          => $_POST['ugel'], 
            'region'                        => $_POST['region'],
            'provincia'                     => $_POST['provincia'],
            'distrito'                      => $_POST['distrito'],
            'tipo_educacion'                => $_POST['tipo_educacion'],
            'mes_fecha_inicio'              => $_POST['mes_fecha_inicio'],
            'anio_fecha_inicio'             => $_POST['anio_fecha_inicio'],
            'step'                          => 2
        );

        $return = $wpdb->update($table, $data, $where);

        if ($return) {
            ajax_response(array('status' => 200, 'error' => false, 'step' => 1, 'next_step' => 2, 'message' => __('Datos guardados')));
        }
        else
        {
            ajax_response(array('status' => 200, 'error' => true, 'step' => false, 'next_step' => false, 'message' => __('Los datos no han sido guardados')));
        }
    }
    else if ($step == ( '2' || 'finish'))
    {
        $table = $wpdb->prefix . 'inscripciones';
        $where = array('id_user' => $id_user, 'id' => $_POST['id']);
        $data  = array(
            'name_inicativa'            => $_POST['name_inicativa'], 
            'objetivo'                  => $_POST['objetivo'], 
            'mes_implemen'              => $_POST['mes_implemen'], 
            'anio_implemen'             => $_POST['anio_implemen'],
            'motivo'                    => $_POST['motivo'],
            'cant_beneficiarios'        => $_POST['cant_beneficiarios'],
            'manera_beneficiando'       => $_POST['manera_beneficiando'],
            'porque_ganaria'            => $_POST['porque_ganaria'],
            'video'                     => $_POST['video'],
            'step'                      => $step
        );

        $return = $wpdb->update($table, $data, $where);

        if ($return) {
            ajax_response(array('status' => 200, 'error' => false, 'step' => $step, 'next_step' => $step, 'message' => __('Datos guardados')));
        }
        else
        {
            ajax_response(array('status' => 200, 'error' => true, 'step' => false, 'next_step' => false, 'message' => __('No hay cambios que actualizar')));
        }
    }
}

add_action('init', 'mis_menus');

function mis_menus()
{
    register_nav_menus(
        array(
            'navegation' => __('Menú de navegación'),
            'footer' => __( 'Footer menu' ),
        )
    );
}


add_action('init', 'custom_post_type_novedades');

function custom_post_type_novedades()
{

    $labels = array(

        'name'               => _x('Novedades', 'post type general name'),

        'singular_name'      => _x('Novedades', 'post type singular name'),

        'add_new'            => _x('Añadir novedad', 'book'),

        'add_new_item'       => __('Añadir nueva novedad'),

        'edit_item'          => __('Editar novedad'),

        'new_item'           => __('Nuevo novedad'),

        'view_item'          => __('Ver novedad'),

        'search_items'       => __('Buscar'),

        'not_found'          => __('No se han encontrado una novedad'),

        'not_found_in_trash' => __('No se han encontrado una novedad'),

        'parent_item_colon'  => '',

    );

    // Creamos un array para $args

    $args = array('labels' => $labels,

        'public'               => true,

        'publicly_queryable'   => true,

        'show_ui'              => true,

        'query_var'            => true,

        'rewrite'              => array('slug' => 'novedades', 'with_front' => false),

        'has_archive'          => 'novedades',

        'capability_type'      => 'post',

        'hierarchical'         => false,

        'menu_position'        => null,

        'supports'             => array('title', 'editor', 'author', 'thumbnail'),

    );

    register_post_type('novedades', $args);

}



add_action('init', 'custom_post_type_iniciativas');

function custom_post_type_iniciativas()
{

    $labels = array(

        'name'               => _x('Iniciativas', 'post type general name'),

        'singular_name'      => _x('Iniciativas', 'post type singular name'),

        'add_new'            => _x('Añadir iniciativa', 'book'),

        'add_new_item'       => __('Añadir nueva iniciativa'),

        'edit_item'          => __('Editar iniciativa'),

        'new_item'           => __('Nuevo iniciativa'),

        'view_item'          => __('Ver iniciativa'),

        'search_items'       => __('Buscar'),

        'not_found'          => __('No se han encontrado una iniciativa'),

        'not_found_in_trash' => __('No se han encontrado una iniciativa'),

        'parent_item_colon'  => '',

    );

    // Creamos un array para $args

    $args = array('labels' => $labels,

        'public'               => true,

        'publicly_queryable'   => true,

        'show_ui'              => true,

        'query_var'            => true,

        'rewrite'              => array('slug' => 'iniciativas', 'with_front' => false),

        'has_archive'          => 'iniciativas',

        'capability_type'      => 'post',

        'hierarchical'         => false,

        'menu_position'        => null,

        'supports'             => array('title', 'editor', 'author', 'thumbnail'),

    );

    register_post_type('iniciativas', $args);

}

add_theme_support('post-thumbnails');

function jump_words($oracion)
{

    $new_sf = explode('_', $oracion);

    $leng_c = count($new_sf);

    $word = "";

    foreach ($new_sf as $key => $value) {
        if ($key == $leng_c - 1) {
            $word .= str_replace('_', ' ', $value);
        } else {
            $word .= str_replace('_', ' ', $value) . " </br> ";
        }

    }

    echo $word;

}

function jump_words_space($oracion)
{

    $new_sf = explode('_', $oracion);

    $leng_c = count($new_sf);

    $word = "";

    foreach ($new_sf as $key => $value) {
        if ($key == $leng_c - 1) {
            $word .= str_replace('_', ' ', $value);
        } else {
            $word .= str_replace('_', ' ', $value) . " ";
        }

    }

    echo $word;

}

function template_redirect_user_on()
{
    if ((is_page('perfil') && !is_user_logged_in()) || (is_page('inscripcion') && !is_user_logged_in())) {
        wp_redirect( home_url( 'login', null ));
        die;
    }
}

add_action( 'template_redirect', 'template_redirect_user_on' );


function template_redirect_user_on_admin()
{
    if ((is_page('admin') && !current_user_can('administrator')) ) {
        wp_redirect( home_url( '', null ));
        die;
    }
}

add_action( 'template_redirect', 'template_redirect_user_on_admin' );

function valid_inscription_finish()
{
    global $wpdb;
   $current_user   = wp_get_current_user();
    $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}inscripciones where id_user = {$current_user->ID}", OBJECT ); 

    if ((is_page('inscripcion') && is_user_logged_in() && ($results[0]->step == 'finish') )) {
        wp_redirect( home_url( 'incripcion-completa', null ));
        die;
    }
}
add_action( 'template_redirect', 'valid_inscription_finish' );

function template_redirect_user_in()
{
    if ((is_page('login') && is_user_logged_in()) || (is_page('registro') && is_user_logged_in()) || (is_page('forgot-password') && is_user_logged_in())) {
        wp_redirect( home_url( '', null ));
         die;
    }
}
add_action( 'template_redirect', 'template_redirect_user_in' );

function js_hide_admin_bar($show)
{
    if (!current_user_can('administrator')) {
        return false;
    }
    return $show;
}
add_filter('show_admin_bar', 'js_hide_admin_bar');

function ajax_response($status)
{
    wp_send_json($status);
    die();
}

add_action('init', 'blockusers_init');

function blockusers_init()
{
    if (is_admin() && !current_user_can('administrator') &&
        !(defined('DOING_AJAX') && DOING_AJAX)) {
        wp_redirect(home_url());
        exit;
    }
}


