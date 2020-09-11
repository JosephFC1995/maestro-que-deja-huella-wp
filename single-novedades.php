<?php
get_header();?>

<div class="container-fluid">
		
	<div class="container">

		<div class="breadcrumb __section d-none d-md-block">
			
					<ul class="__breadcrumb_custom">
					    <li><a href="/">Inicio <span class="ico"><i class="arrow right"></i></span></a></li>
					    <li><a href="<?php echo home_url( 'novedades', null ); ?>">Novedades <span class="ico"><i class="arrow right"></i></span></a></li>
					    <li><span class="_nothing">Alinor</span></li>
					</ul>
			
		</div>

		<div class="_content_page py-4">

			<?php include get_theme_file_path( 'include/novedades/single/detail.php' ); ?>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="__content__single">
					
					<?php the_content(); ?>

				</div>
			<?php endwhile;?>

			 <?php endif; ?>


			<!-- Galería -->

			<?php include get_theme_file_path( 'include/novedades/single/galeria.php' ); ?>
			


			<!-- Relacionados -->

			<div class="title_global">
				
				<h1>
					Otras publicaciones
				</h1>

			</div>

			<?php   
	            $noticias_array = array(
	                'posts_per_page' => '3',
	                'post_type' => 'novedades',
	            ); 

	         ?>

	         <?php $query_args = new WP_Query( $noticias_array ); ?>

			<div class="__more_novedades mt-4">
				
				<div class="__row row">

					<?php if ( $query_args->have_posts() ) : ?>

	             		<?php while ( $query_args->have_posts() ) : $query_args->the_post(); ?>
						
							<!-- Novedad -->

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
											
											<h2><?php echo get_the_title( $post ); ?></h2>

										</div>

										<div class="_more">
											Seguir leyendo <span class="ico"><i class="arrow right"></i></span>
										</div>
										</div>
										<a href="<?php echo get_permalink(); ?>" class="link_floating"></a>
									</div>

								</div>

							</div>

							<?php endwhile; ?>

           				<?php endif; ?>

				</div>

			</div>

		</div>

	</div>

</div>



<?php include 'include/necesi_ayuda.php'; ?>


<?php get_footer( null ); ?>