<section class="form_registro" id="form_registro">
	
	<div class="container-fluid position-relative">

        <div class="__overlay_separate"></div>

        <div class="row __row">
            
            <div class="col-12 col-md-6 _col_imagen">
                
                <div class="__image_f">
                    
                      <img src="<?php echo get_field('imagen') ?>" alt="">

                </div>

            </div>

            <?php $desktop = get_field('desktop') ?>
            <?php $mobile = get_field('mobile') ?>

            <div class="col-12 col-md-6 _col_form">

                 <div class="title_global mb-5 d-block d-md-none tit_oc">
                        
                    <h1>
                       <?php echo $desktop['titulo'] ?>
                    </h1>

                </div>

        		<div class="container">

                     <div class="__tabs_container __formulario__custom d-block d-md-none">
                
                        <ul class="uk-subnav uk-subnav-pill tabs_mayor mb-3">
                            <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state uk-active">
                                <a href="#">
                                   <?php echo $mobile['titulo'] ?>
                                </a>
                            </li> 
                            <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state ">
                                <a href="<?php echo home_url( 'login', null ); ?>">
                                    <?php echo $mobile['texto_de_logeo'] ?>
                                </a>
                            </li> 
                        </ul>

                    </div>

        			<div class="__formulario_ ">

                        <div class="__f__e">

                            <div class="title_global">
                            
                                <h1 class="d-none d-md-block">
                                    <?php echo $desktop['titulo'] ?>
                                </h1>

                                <div class="_caption__ mt-1">

                                    <?php jump_words($desktop['subtitulo']); ?>
                                    
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

                            <form action="" class="_form mt-4" novalidate name="formulario_registro" id="formulario_registro">
            					
            					 <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="field">
                                        	<label data_form="formulario_registro" for="correo">
                                                Ingresar correo electrónico
                                            </label>
                                            <input id="correo" name="correo" placeholder="Ingresar" required="" type="email"/>
                                            <div class="__error_mensaje">
                                                <span>*Ingresar campo requerido</span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-md-12  mb-3">
                                        <div class="field">
                                            <label data_form="formulario_registro" for="password">
                                                Ingresar contraseña
                                            </label>
                                            <input id="password" name="password" placeholder="Mayor a 6 dígitos" required="" type="password"/>
                                            <div class="__error_mensaje">
                                                <span>*Ingresar campo requerido</span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-md-12  mb-3">
                                        <div class="field">
                                            <label data_form="formulario_registro" for="valid_password">
                                                Repetir contraseña
                                            </label>
                                            <input id="valid_password" name="valid_password" placeholder="Mayor a 6 dígitos" required="" type="password"/>
                                            <div class="__error_mensaje">
                                                <span>*Ingresar campo requerido</span>
                                            </div>
                                        </div>
                                    </div>

                                    <?php wp_nonce_field('ajax-register-nonce', 'security_register');?>

                                     <div class="col-md-12 __group_buttons mt-4">
                                        <button class="btn__inter w-100 _login" type="submit">
                                            Regístrate
                                        </button>
                                    </div>
                                </div>
            	
                            </form>

                            <div class="__form_aditions_">
                            	
                            	<span class="__text">
                            		
                            		¿Ya tienes cuenta?

                            		 <a href="<?php echo home_url( 'login', null ); ?>">
                            			Inscíbete aqui
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