<?php $cronograma = get_field('cronograma') ?>



<section class="cronograma" id="cronograma">
	
	<div class="container-fluid">
		
		<div class="container">

			<div class="title_global">
				
				<h1>
					Cronograma
				</h1>

			</div>

			<div class="__cronograma_content">
				
				<div class="__list_cronograma">

					<?php foreach ($cronograma  as $key => $crono): ?>
					
						<div class="__item_cronograma">
							
							<div class="point_">
								
								<div class="_circle"></div>

							</div>

							<div class="_data_">
								
								<span class="_top">
									<?php echo $crono['fecha'] ?>
								</span>

								<span class="bottom d-none d-md-block">
									
									<?php jump_words($crono['detalle']); ?>

								</span>

								<span class="bottom d-block d-md-none">
									
									<?php jump_words_space($crono['detalle']); ?>

								</span>

							</div>

						</div>

					 <?php endforeach ?>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>