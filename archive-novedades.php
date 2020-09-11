<?php
get_header();?>

<?php include get_theme_file_path( 'include/novedades/banner.php' ); ?>

<?php   
    $noticias_array = array(
        'post_type' => 'novedades',
    ); 

 ?>

 <?php $query_args = new WP_Query( $noticias_array ); ?>
 <?php $contador = 1; ?>

<div class="container-fluid">
	
	<div class="container">
		
		<div class="__page_o py-5">
	
			<div class="novedad destacada mb-4">
				
				<div class="_content">
					
					<div class="row __row">

						<?php if ( $query_args->have_posts() ) : ?>

	             		<?php while ( $query_args->have_posts() ) : $query_args->the_post(); ?>
							
								<?php if ($contador == 1): ?>
									<div class="col-12 col-md-6 mb-3 mb-md-0">
								
										<div class="content_">
											
											<div class="__left">
									
												<div class="_fecha">
													
													<?php echo get_the_date( 'd \d\e\ F', null ); ?>

												</div>

												<div class="_title">
													
													<h2><?php echo get_the_title(); ?></h2>

												</div>

												<div class="_description d-none d-md-block">
													
													<p>
														<?php $excep =  get_the_excerpt(); ?>

														<?php echo wp_trim_words($excep, 20) ?>
													</p>

												</div>

												<div class="_more d-none d-md-block">
													Seguir leyendo <span class="ico"><i class="arrow right"></i></span>
												</div>

												<div class="_more d-block d-md-none _mobile">
													Leer la nota <span class="ico"><i class="arrow right"></i></span>
												</div>

												<a href="<?php echo get_permalink(); ?>" class="link_floating"></a>

											</div>

										</div>

									</div>

									<div class="col-12 col-md-6">
									
										<div class="_picture">
											
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

											<a href="<?php echo get_permalink(); ?>" class="link_floating"></a>

										</div>

									</div>

								<?php endif ?>
								<?php $contador++; ?>

						<?php endwhile; ?>

           				<?php endif; ?>	

					</div>

				</div>

			</div>


			<div class="__more_novedades mt-4">
				
				<div class="__row row">
					<?php $contador_2 = 1; ?>

					<?php if ( $query_args->have_posts() ) : ?>

	             		<?php while ( $query_args->have_posts() ) : $query_args->the_post(); ?>
					
							<!-- Novedad -->

							<?php if ($contador_2 != 1): ?>
								
								<div class="col-12 col-md-4">
									
									<div class="novedad">
										
										<div class="content_ alter">
											<div class="_picture">
											
												<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

											</div>


											<div class="__other">
												<div class="_fecha">
												
													<?php echo get_the_date( 'd \d\e\ F', null ); ?>

												</div>

												<div class="_title">
													
													<h2><?php echo get_the_title(); ?></h2>

												</div>

												<div class="_more">
													Seguir leyendo <span class="ico"><i class="arrow right"></i></span>
												</div>
											</div>
											<a href="<?php echo get_permalink(); ?>" class="link_floating"></a>
										</div>

									</div>

								</div>

							<?php endif ?>

							<?php $contador_2++; ?>

						<?php endwhile; ?>

           			<?php endif; ?>	

				</div>

			</div>

		</div>

	</div>

</div>

<?php include 'include/necesi_ayuda.php'; ?>

<?php get_footer( null ); ?>