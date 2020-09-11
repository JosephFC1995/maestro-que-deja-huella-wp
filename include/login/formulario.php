<section class="form_login" id="form_login">
	
	<div class="container-fluid">


        <div class="row __row">
            <div class="__overlay_separate"></div>
            
            <div class="col-12 col-md-6 _col_imagen">
                
                <div class="__image_f">
                    
                    <img src="<?php echo get_field('imagen') ?>" alt="">

                </div>

            </div>

            <?php $logeo_text = get_field('desktop') ?>
            <?php $mobile = get_field('mobile') ?>

            <div class="col-12 col-md-6 _col_form">



        		<div class="container">
                    

                <div class="title_global mb-2 mb-md-5 d-block d-md-none tit_oc">
                        
                    <h1>
                         <?php echo $logeo_text['titulo'] ?>
                    </h1>

                </div>
                    
                   

                    <div class="__tabs_container __formulario__custom d-block d-md-none">
                
                        <ul class="uk-subnav uk-subnav-pill tabs_mayor mb-3">
                            <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state ">
                                <a href="<?php echo home_url( 'registro', null ); ?>">
                                   <?php echo $mobile['texto_registro'] ?>
                                </a>
                            </li> 
                            <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state uk-active">
                                <a href="#">
                                    <?php echo $logeo_text['titulo_de_logeo'] ?>
                                </a>
                            </li> 
                        </ul>

                    </div>

        			<div class="__formulario_ ">

                       <div class="__f__e">

                            <div class="title_global ">

                               
                            
                                <h1 class="d-none d-md-block">
                                    <?php echo $logeo_text['titulo_de_logeo'] ?>
                                </h1>

                                <div class="_caption__ mt-1">
                                    
                                    <?php echo $logeo_text['subtitulo_de_logeo'] ?>

                                </div>

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

                            <form action="" class="_form mt-4" novalidate name="formulario_login" id="formulario_login">
            					
            					 <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="field">
                                        	<label data_form="formulario_login" for="correo">
                                                Ingresar correo electrónico
                                            </label>
                                            <input id="correo" name="correo" placeholder="Correo" required="" type="email"/>
                                        </div>
                                    </div>

                                     <div class="col-md-12  mb-3">
                                        <div class="field">
                                            <label data_form="formulario_login" for="password">
                                                Ingresar contraseña
                                            </label>
                                            <input id="password" name="password" placeholder="Contraseña" required="" type="password"/>
                                        </div>
                                    </div>

                                     <div class="col-md-12">
                                    
                                        <div class="__checkbox_content">
                                            <label class="container_checkbox">Mantener sesión activa
                                              <input type="checkbox" checked="checked" name="man_sesion" id="man_sesion">
                                              <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>

                                     <?php wp_nonce_field('ajax-login-nonce', 'security');?>

                                     <div class="col-md-12 __group_buttons mt-4">
                                        <button class="btn__inter w-100 _login" type="submit">
                                            Inicia sesión
                                        </button>
                                    </div>
                                </div>
            	
                            </form>

                            <div class="__form_aditions_">
                                 <div class="__social_redes row">
                                    <div class="__left col-md-6">
                                        <div class="link_social google">
                                            <a rel="nofollow" onclick="moOpenIdLogin('google','true');">
                                                <div class="_svg">
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 48 48" class="abcRioButtonSvg"><g><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path><path fill="none" d="M0 0h48v48H0z"></path></g></svg>
                                                </div>
                                                <span>
                                                    Iniciar con google
                                                </span>
                                            </a>
                                        </div>
                                      <div class="__fllow d-none">
                                           <?php echo do_shortcode( '[miniorange_social_login apps="google" shape="longbuttonwithtext" view="horizontal" theme="default" space="10" width="200" height="40" color="fff"]' ); ?>
                                      </div>
                                    </div>
                                    <div class="__rigth col-md-6">
                                        <?php do_action('facebook_login_button');?>
                                    </div>
                                </div>

                            </div>

                            <div class="__form_aditions_">
                                
                                <span class="__text" >
                                    
                                    ¿Te olvidaste tu contraseña?

                                    <a href="<?php echo home_url( 'forgot-password', null ); ?>">
                                        Ingresa aqui
                                    </a>

                                </span>

                            </div>

                            <div class="__form_aditions_">
                            
                            	
                            	<span class="__text">
                            		
                            		¿No tienes una cuenta?

                            		<a href="<?php echo home_url( 'registro', null ); ?>">
                            			Registrate aqui
                            		</a>

                            	</span>

                            </div>
                    </div>        				

        			</div>


        		</div>

            </div>

        </div>


	</div>

</section>