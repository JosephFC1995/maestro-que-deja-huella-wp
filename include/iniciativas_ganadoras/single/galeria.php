<?php $galeria = get_field('galeria') ?>


<?php if ($galeria): ?>

	<section class="ceremonia" id="ceremonia">
	
	

				<div class="title_global">
					
					<h1>
						De la ceremonía
					</h1>

				</div>

				<div class="__galeria">
					
					<div class="uk-position-relative uk-visible-toggle uk-light  d-none d-md-block" tabindex="-1" uk-slideshow="min-height: 500px">

					    <ul class="uk-slideshow-items">
					    	<?php $img_galeria = array(); ?>

					    	<?php foreach ($galeria  as $key => $gal): ?>
						        <li>
									<div class="__row row h-auto">

										<?php foreach ($gal['seleccion_galeria'] as $y => $imagen): ?>

											<?php array_push($img_galeria,  $imagen['sizes']['large']) ?>

											<div class="col-6 col-md-3 mb-4">
											
												<div class="_picture"  data-fancybox="galeria" href="<?php echo $imagen['sizes']['large']; ?>">
													
													<img alt="" src="<?php echo $imagen['sizes']['large']; ?>" uk-cover="">

												</div>

											</div>
											
										<?php endforeach ?>

										

									</div>
						        </li>

						     <?php endforeach ?>

					    </ul>
						
						<a uk-slideshow-item="previous" class="prev arrow_slider">
							<?php echo file_get_contents(  home_url( '', null ) . '/wp-content/uploads/2020/02/arrow-v2.svg') ?>
						</a>
						<a uk-slideshow-item="next" class="nav arrow_slider">
							<?php echo file_get_contents( home_url( '', null ) .  '/wp-content/uploads/2020/02/arrow-v2.svg') ?>
						</a>
					

					</div>

					<div class="__galeria_mobile  d-block d-md-none">
						
					<div class="__content_galeria">
						
						<div class="__list_img">

							<?php $count_galeru = count($img_galeria) ?>

							<?php $count_fow_row = intval($count_galeru/2) ?>

							<?php for ($i=1; $i <= 2; $i++) {  ?>

								<div class="__row_w">

									<?php for ($y=($count_fow_row * ($i - 1)); $y < $count_fow_row * $i; $y++) {  ?>

										<div class="_picture"  data-fancybox="galeria" href="<?php echo $img_galeria[$y]; ?>">
														
											<img alt="" src="<?php echo $img_galeria[$y]; ?>">

										</div>
										
									<?php } ?>

									
								</div>
								
							<?php } ?>
							
							

						</div>

					</div>

				</div>

				</div>

			

	</section>
	
<?php endif ?>
