<?php
get_header();?>

<div class="container-fluid">
		
	<div class="container">

		<div class="breadcrumb __section d-none d-md-block">
			<div class="container-fluid">
				<div class="container">
					<ul class="__breadcrumb_custom">
					    <li><a href="/">Inicio <span class="ico"><i class="arrow right"></i></span></a></li>
					    <li><a href="<?php echo home_url( 'iniciativas', null ); ?>">Iniciativas ganadoras <span class="ico"><i class="arrow right"></i></span></a></li>
					    <li><span class="_nothing"><?php echo get_field('responsable') ?></span></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Detalle -->

		<?php include get_theme_file_path( 'include/iniciativas_ganadoras/single/detail.php' ); ?>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="__content__single">
				
				<?php the_content(); ?>

			</div>
		<?php endwhile;?>

		 <?php endif; ?>

		<?php $resultado = get_field('resultado') ?>

		<!-- Galería -->

		<?php include get_theme_file_path( 'include/iniciativas_ganadoras/single/galeria.php' ); ?>

		<!-- Relacionados -->

		

		<div class="title_global">
				
			<h1>
				<?php 
				if($resultado == 'ganador') {
					echo 'Iniciativas ganadoras';
				}else{
					echo 'Otros finalistas';
				} ?>
			</h1>

		</div>

		
		<?php   
            $iniciativas_array = array(
                'posts_per_page' => '3',
                'post_type' => 'iniciativas',
                'meta_query' => array(
				    array(
				      'key' => 'resultado',
				      'compare' => '=',
				      'value' => $resultado,
				    )
				  ),
            ); 

         ?>

		<?php $query_args = new WP_Query( $iniciativas_array ); ?>

		<div class="__content_separate uk-position-relative mb-5 __relacionados">
						
			<div class="row __row">

             	<?php if ( $query_args->have_posts() ) : ?>

             		<?php while ( $query_args->have_posts() ) : $query_args->the_post(); ?>

             			<?php $resultado__relacionados = get_field('resultado') ?>

             			<?php if ($resultado == 'ganador'): ?>
             				<div class="col-12 col-md-4 _col_  mb-md-0 mb-3">
							
								<div class="__panel_inic">
									
									<div class="__top">
										
										<div class="__regi">
											
											<span><?php echo get_field('lugar') ?></span>

										</div>

										<div class="__anio">
											
											<span><?php echo get_field('ano'); ?></span>

										</div>

									</div>

									<!-- <div class="__name_inic">
										
										<span><?php //echo get_field('nombre_inicativa') ?></span>

									</div> -->

									<div class="__midd">
										
										<div class="__picture">
											
											<img src="<?php echo get_field('imagen_repsonsable') ?>" alt="">

										</div>

										<div class="__details">
											
											<span class="__nombre">
												
												<?php echo get_field('responsable') ?>

											</span>

											<span class="__colegio">
												
												<?php echo get_field('colegio') ?>

											</span>

										</div>

									</div>

									<div class="__bottom">
										
										<div class="__ico_go">
											
											<img src="<?php echo get_template_directory_uri() . '/assets/iconos/arrow.png' ?>" alt="">

										</div>

									</div>
									<a href="<?php echo get_permalink(); ?>" class="__link_flo"></a>

								</div>

							</div>

						<?php else: ?>

							<div class="col-12 col-md-4 _col_ mb-md-0 mb-3">
                                
                                <div class="__panel_inic">
                                    
                                    <div class="__top">
                                        
                                        <div class="__regi">
                                            
                                            <span><?php echo get_field('lugar') ?></span>

                                        </div>

                                        <div class="__anio">
                                            
                                           <span><?php echo get_field('ano'); ?></span>

                                        </div>

                                    </div>

                                    <!-- <div class="__name_inic">
                                        
                                       <span><?php //echo get_field('nombre_inicativa') ?></span>

                                    </div> -->

                                    <div class="__midd nothin_picture">
                                        
                                        <div class="__details">
                                            
                                            <span class="__nombre">
                                                
                                                <?php echo get_field('responsable') ?>

                                            </span>

                                            <span class="__colegio">
                                                
                                                <?php echo get_field('colegio') ?>

                                            </span>

                                        </div>

                                    </div>

                                    <div class="__bottom">
                                        
                                        <div class="__ico_go">
                                            
                                            <img src="<?php echo get_template_directory_uri() . '/assets/iconos/arrow.png' ?>" alt="">

                                        </div>

                                    </div>

                                    <a href="<?php echo get_permalink(); ?>" class="__link_flo"></a>

                                </div>

                            </div>
             				
             			<?php endif ?>
				
						

					<?php endwhile; ?>

           		<?php endif; ?>

			</div>

        </div>

	</div>


</div>


<?php include 'include/necesi_ayuda.php'; ?>


<?php get_footer( null ); ?>