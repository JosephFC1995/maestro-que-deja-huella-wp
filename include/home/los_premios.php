<?php $premios = get_field('premios', $__id_from_page) ?>
<section class="los_premios padding_general pt-0" id="los_premios">
	
	<div class="container-fluid">
		
		<div class="container">

			<div class="title_global">
				
				<h1>
					Los premios
				</h1>

			</div>

			<div class="__slider_premios_container">
				
				<div class="uk-position-relative uk-visible-toggle uk-light slider__content_general" tabindex="-1" uk-slider="sets: true">
					<div class="__overflow__">
					    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@m uk-grid">
					    	<?php foreach ($premios  as $key => $prem): ?>
						        <li>
						            <div class="uk-panel">
						                <div class="__content_slider">
						                	<div class="_picture_l">
						                		<?php echo file_get_contents( $prem['imagen']) ?>
						                		<div class="__span_label">
						                			<span>
						                				<?php echo $prem['titulo']; ?>
						                			</span>
						                		</div>
						                	</div>
						                	<div class="_bottom_det">
						                		<?php foreach ($prem['lista'] as $y => $lista): ?>
						                			<div class="__list__detail">
							                			<span>
							                				<?php echo $lista['premio']; ?>
							                			</span>
							                		</div>
						                		<?php endforeach ?>
						                		
						                
						                	</div>
						                </div>
						            </div>
						        </li>

						    <?php endforeach ?>

					    </ul>
					</div>
				    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

				    <!-- <div class="__group_buttons">
				    	<a class="uk-position-small arrows prev" href="#" uk-slider-item="previous">
					   		a
					   	</a>
					    <a class=" uk-position-small arrows next" href="#" uk-slider-item="next">
					    	b
					    </a>
				    </div> -->
				    <a  uk-slider-item="previous" class="prev arrow_slider">
						<?php echo file_get_contents(  home_url( '', null ) . '/wp-content/uploads/2020/02/arrow-v2.svg') ?>
					</a>
					<a uk-slider-item="next" class="nav arrow_slider">
						<?php echo file_get_contents( home_url( '', null ) .  '/wp-content/uploads/2020/02/arrow-v2.svg') ?>
					</a>

				</div>

			</div>

			<?php $nuestro_jurado = get_field('nuestro_jurado', $__id_from_page) ?>
			<?php $historias_que_inspiran = get_field('historias_que_inspiran', $__id_from_page) ?>

			<div class="__more__">
				
				<div class="row __row">
					
					<div class="col-12 col-md-6 __col__more _jurado">
						
						<div class="__mor_conten">
							
							<div class="__left">
								
								<span class="_title">
									<?php jump_words($nuestro_jurado['titulo']); ?>
								</span>

								<span class="_detail_">
									
									<?php jump_words($nuestro_jurado['descripcion']); ?>

								</span>

								<span class="_enlace">
									<?php echo $nuestro_jurado['texto_del_boton']; ?><span class="ico ml-2"><i class="arrow right"></i></span>
								</span>

							</div>

							<div class="__rigth">
								
								<?php echo file_get_contents($nuestro_jurado['imagen']) ?> 

							</div>

							<a href="<?php echo $nuestro_jurado['url'] ?>" class="__link_flo"></a>

						</div>

					</div>

					<div class="col-12 col-md-6 __col__more _historias">
						
						<div class="__mor_conten">
							
							<div class="__left">
								
								<span class="_title">
									<?php jump_words($historias_que_inspiran['titulo']); ?>
								</span>

								<span class="_detail_">
									
									<?php jump_words($historias_que_inspiran['descripcion']); ?>
									
								</span>

								<span class="_enlace">
									<?php echo $historias_que_inspiran['texto_del_boton']; ?> <span class="ico ml-2"><i class="arrow right"></i></span>
								</span>

							</div>

							<div class="__rigth">
								
								<?php echo file_get_contents($historias_que_inspiran['imagen']) ?>

							</div>

							<a href="<?php echo $historias_que_inspiran['url'] ?>" class="__link_flo"></a>

						</div>

					</div>

				</div>

			</div>


		</div>

	</div>

</section>