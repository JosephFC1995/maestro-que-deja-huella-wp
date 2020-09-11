<?php $criterios_de_evaluacion = get_field('criterios_de_evaluacion') ?>
<?php $textos_criterios = get_field('textos_criterios') ?>

<section class="criterios" id="criterios">
	
	<div class="container-fluid">
		
		<div class="container">

			<div class="title_global">
				
				<h1>
					<?php echo $textos_criterios['titulo'] ?>
				</h1>

				<div class="_caption__">
					
					<?php echo $textos_criterios['caption'] ?>

				</div>

			</div>

			<div class="__criterio_content">
				
				<div class="row __row">

					<?php foreach ($criterios_de_evaluacion  as $key => $crit): ?>
					
						<div class="col-12 col-md-4 mb-4 items_criterios">
							
							<div class="__content_panel">
								
								<div class="__picture">
									
									<?php echo file_get_contents($crit['icono']) ?>

									<div class="__span_label">
			                			<span>
			                				<?php jump_words($crit['titulo']); ?>
			                			</span>
			                		</div>

								</div>

								<div class="__details">
									
									<span>
										<?php jump_words($crit['descripcion']); ?>
									</span>

								</div>

							</div>

						</div>
					 <?php endforeach ?>


				</div>

			</div>

		</div>

	</div>

</section>