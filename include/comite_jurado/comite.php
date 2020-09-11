<?php $comite = get_field('comite', $__id_from_page) ?>
<?php $jurado = get_field('jurado', $__id_from_page) ?>
<?php $banner = get_field('banner') ?>


<section class="comite_consultivo" id="comite_consultivo">
	
	<div class="container-fluid">
		
		<div class="container">

			<div class="title_global mb-5 d-none d-md-block">
				
				<h1>
					Comité consultivo
				</h1>

			</div>

			<div class="title_global mb-5 d-block d-md-none">
				
				<h1>
					Comité consultivo y jurado
				</h1>

			</div>

			<!-- <div class="_caption mb-3">
				
				<span>
					<?php jump_words($banner['caption']); ?>
				</span>

			</div> -->


			<div class="__tabs_container __comite p-0 d-block d-md-none">
				
				<ul class="uk-subnav uk-subnav-pill tabs_mayor mb-3" uk-switcher="animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                    <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state">
                        <a href="#">
                           Comité consultivo
                        </a>
                    </li> 
                    <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state">
                        <a href="#">
                            Jurado
                        </a>
                    </li> 
                </ul>

                 <ul class="uk-switcher uk-margin uk_tabs_contenes col-animate_state_content_tabs animate_init_fadeOut animate__state">
                	<!-- Fachada -->
                	
	                <li class="__detail_tab items_criterios">
	                	<div class="_row row">
	                		
	                	
	                	<div class="col-12 mb-3 items_criterios">
							<div class="__details">
										
								<span>
									<?php jump_words_space($banner['caption']); ?>
								</span>

							</div>
						</div>
	                	<?php foreach ($comite['comite']  as $key => $comit): ?>
                    		<div class="col-12 col-md-4 mb-3 items_criterios">
						
								<div class="__content_panel">
									
									<div class="__picture">
										
										<img src="<?php echo $comit['imagen'] ?>" alt="">
										
									</div>
									<div class="__title">
			                			<span>
			                				<?php jump_words($comit['nombre']); ?>
			                			</span>
			                		</div>


									<div class="__details">
										
										<span>
											<?php jump_words($comit['detalle']); ?>
										</span>

									</div>

								</div>

							</div>
			            <?php endforeach ?>
			            </div>
	                </li>
	               
					<!-- Fin fachada -->

					<!-- Fachada -->
                	 <li class="__detail_tab __jurado">
                	 	<div class="_row row">
							<div class="col-12 mb-3">
								<div class="__details">
											
									<span>
										<?php jump_words_space($banner['caption']); ?>
									</span>

								</div>
							</div>
							<?php foreach ($jurado['jurado']  as $key => $jura): ?>
	                    		<div class="col-12 col-md-6 items_jurado">

									<div class="__content">
										
										<div class="__picture">
										
											<img src="<?php echo $jura['imagen'] ?>" alt="">

										</div>

										<div class="_bio">
											
											<div class="__title">
					                			<span>
					                				<?php jump_words($jura['nombre']); ?>
					                			</span>
					                		</div>


											<div class="__details">
												
												<span>
													<?php jump_words($jura['detalle']); ?>
												</span>

											</div>

										</div>

									</div>

								</div>
				            <?php endforeach ?>
				        </div>
	                </li>
					<!-- Fin fachada -->
                </ul>

			</div>

			<div class="__comite d-none d-md-block">
				
				<div class="row __row">

					<?php foreach ($comite['comite']  as $key => $comit): ?>
					
						<div class="col-12 col-md-4 mb-3 items_criterios">
							
							<div class="__content_panel">
								
								<div class="__picture">
									
									<img src="<?php echo $comit['imagen'] ?>" alt="">
									
								</div>
								<div class="__title">
		                			<span>
		                				<?php jump_words($comit['nombre']); ?>
		                			</span>
		                		</div>


								<div class="__details">
									
									<span>
										<?php jump_words($comit['detalle']); ?>
									</span>

								</div>

							</div>

						</div>

					<?php endforeach ?>

				</div>

			</div>

			<div class="title_global mt-5 pt-3  mb-5  d-none d-md-block">
				
				<h1>
					Jurado
				</h1>

			</div>

			<div class="__jurado  d-none d-md-block">
				
				<div class="row __row">

					<?php foreach ($jurado['jurado']  as $key => $jura): ?>

						<div class="col-12 col-md-6 items_jurado">

							<div class="__content">
								
								<div class="__picture">
								
									<img src="<?php echo $jura['imagen'] ?>" alt="">

								</div>

								<div class="_bio">
									
									<div class="__title">
			                			<span>
			                				<?php jump_words($jura['nombre']); ?>
			                			</span>
			                		</div>


									<div class="__details">
										
										<span>
											<?php jump_words($jura['detalle']); ?>
										</span>

									</div>

								</div>

							</div>

						</div>

					<?php endforeach ?>

				</div>

			</div>

		</div>

	</div>

</section>