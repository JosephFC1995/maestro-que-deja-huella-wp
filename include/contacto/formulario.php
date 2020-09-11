<?php $titulo = get_field('titulo') ?>
<?php $campos = get_field('campos') ?>

<section class="form_contacto" id="form_contacto">

    <div class="__cont_detai d-md-none d-block __mobile">
        
         <div class="__content_detail_form_contact">
                   
            <h1>
               <?php echo $titulo; ?>
            </h1>

            <div class="_list_contact">

                <?php foreach ($campos as $key => $value): ?>

                      <span class="_item">
                    
                       <img src="<?php echo $value['icono']; ?>" alt=""> <?php echo  $value['texto'] ?>

                    </span>
                    
                <?php endforeach ?>
                

            </div>

        </div>

    </div>
	
	<div class="container-fluid position-relative">

        <div class="__overlay_separate"></div>


       <div class="container">
           
            <div class="row __row">

                
                <div class="col-12 col-md-7 _col_imagen">
                    
                    <div class="__content_detail_form_contact">
                       
                        <h1>
                            <?php echo $titulo; ?>
                        </h1>

                        <div class="_list_contact">
                             <?php foreach ($campos as $key => $value): ?>

                                  <span class="_item">
                                
                                   <img src="<?php echo $value['icono']; ?>" alt="">  <?php echo $value['texto'] ?>

                                </span>
                                
                            <?php endforeach ?>

                        </div>

                        <div class="_picture">
                            
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/image-contacto.jpg' ?>" alt="">

                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-5 _col_form">

                    <div class="container">

                        <div class="__formulario_ contacto">

                            <div class="title_global">
                            
                                <h1>
                                    <?php echo  get_field('titulo_formulario'); ?>
                                </h1>

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

                            <form action="" class="_form mt-4" novalidate name="formulario_contacto" id="formulario_contacto">
                                
                                 <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="field">
                                            <label data_form="formulario_contacto" for="name">
                                                Ingresar nombre completo
                                            </label>
                                            <input id="name" name="name" placeholder="Ingresar nombres y apellidos" required="" type="text"/>
                                            <div class="__error_mensaje">
                                                <span>*Ingresar campo requerido</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="field">
                                            <label data_form="formulario_contacto" for="email">
                                                Ingresar correo eléctronico
                                            </label>
                                            <input id="email" name="email" placeholder="Ingresar mail" required="" type="email"/>
                                            <div class="__error_mensaje">
                                                <span>*Ingresar campo requerido</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="field">
                                            <label data_form="formulario_contacto" for="phone">
                                                Ingresar teléfono/celular
                                            </label>
                                            <input id="phone" name="phone" placeholder="Ingresar máximo 9" required="" type="text" class="phone_mask" />
                                            <div class="__error_mensaje">
                                                <span>*Ingresar campo requerido</span>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="col-md-12 mb-4">
                                        <div class="field">
                                            <label data_form="formulario_contacto" for="mensaje">
                                                Ingresar mensaje
                                            </label>
                                            <textarea id="mensaje" name="mensaje" required="" rows="4" placeholder="Maximo 1200 carácteres" maxlength="1200"></textarea>
                                            <div class="__error_mensaje">
                                                <span>*Ingresar campo requerido</span>
                                            </div>
                                        </div>
                                    </div>

                                  
                                     <div class="col-md-12 __group_buttons mt-4">
                                        <button class="btn__inter" type="submit">
                                            Enviar
                                        </button>
                                    </div>
                                </div>
                
                            </form>

                        </div>


                    </div>

                </div>

            </div>

       </div>


	</div>

</section>