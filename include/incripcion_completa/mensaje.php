<section class="incripcion_compelta padding_general" id="incripcion_compelta">
	
	<div class="container-fluid">

      <div class="container">

      	<?php 

      	global $wpdb;

      	$current_user   = wp_get_current_user();
	    $id_user        = $current_user->ID;

	    $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}encuesta where id_user = {$id_user}", OBJECT );
      	?>

      		<div class="__image">
				<?php echo file_get_contents(get_template_directory_uri() . '/assets/iconos/check-circle.svg') ?>
			</div>
          
            <div class="title_global">
                        
                <h1>
                    ¡Tu iniciativa ya está inscrita!
                </h1>

                <div class="_caption__">
					
					<span>
						<b>Nota: </b>Hemos enviado una confirmación a tu correo electrónico.
					</span>
					<?php if (count($results) == 0): ?>

						<span class="__but">
							Queremos conocer tu opinión a travésde esta <a href="#modal-encuesta" uk-toggle>breve en cuesta</a>
						</span>
						
					<?php endif ?>
					


				</div>

            </div>

        </div>

    </div>

</section>

<div id="modal-encuesta" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
		
		<div class="__step__grac __content_prev" >
			<div class="__close uk-modal-close">
				<?php echo file_get_contents(get_template_directory_uri() . '/assets/iconos/cancel.svg') ?>
			</div>

	         <form action="" class="_form" novalidate name="formulario_encuesta" id="formulario_encuesta">

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
				
				<span class="__detail_">
					¿Cómo te enteraste del concurso?
				</span>
				<div class="row mt-3">
	                <div class="col-md-12">
	                    <div class="row __row">
	                    	<div class="col-12 col-md-6">
	                    		<div class="__checkbox_content">
			                        <label class="container_checkbox">En Facebook
			                          <input type="radio" name="medio" value="Facebook">
			                          <span class="checkmark"></span>
			                        </label>
			                    </div>
	                    	</div>
	                    	<div class="col-12 col-md-6">
	                    		<div class="__checkbox_content">
			                        <label class="container_checkbox">Prensa
			                          <input type="radio" name="medio" value="Prensa">
			                          <span class="checkmark"></span>
			                        </label>
			                    </div>
	                    	</div>
	                    	<div class="col-12 col-md-6">
	                    		<div class="__checkbox_content">
			                        <label class="container_checkbox">Afiches/Volantes
			                          <input type="radio" name="medio" value="Afiches/Volantes">
			                          <span class="checkmark"></span>
			                        </label>
			                    </div>
	                    	</div>
	                    	<div class="col-12 col-md-6 otro_text">
	                    		<div class="__checkbox_content">
			                        <label class="container_checkbox">
			                          <input type="radio" name="medio" value="Otro">
			                          <span class="checkmark"></span>
			                        </label>
			                    </div>
			                    <input type="text" name="otro_text" id="otro_text" class="__text otro_text__ disabled">
	                    	</div>
	                    	<div class="col-12 col-md-6">
	                    		<div class="__checkbox_content">
			                        <label class="container_checkbox">Radio
			                          <input type="radio" name="medio" value="Radio">
			                          <span class="checkmark"></span>
			                        </label>
			                    </div>
	                    	</div>
	                    </div>
	                </div>

	                <div class="col-md-12 __group_buttons mt-2">
	                    <button class="btn__inter" type="submit">
	                        Enviar
	                    </button>
	                </div>
	            </div>

	        </form>
			
		</div>

		<div class=" __step__grac __finish_ " style="display: none">
			
			<div>
				<div class="__image">
					<?php echo file_get_contents(get_template_directory_uri() . '/assets/iconos/check-circle.svg') ?>
				</div>
	          
	            <div class="title_global">
	          
	                <div class="_caption__">	
						<span>
							Gracias por completar la encuesta, fue enviado con éxito
						</span>

					</div>

	            </div>
				
				<div class="justify-content-center __group_buttons mt-3">
		             <a class="btn__inter uk-modal-close">
	                    Aceptar
	                </a>
	            </div>
			</div>

		</div>

    </div>
</div>
