<?php
get_header();?>

<?php include get_theme_file_path( 'include/iniciativas_ganadoras/banner.php' ); ?>

<!-- TABS -->

<?php   
    $maestros_ganadores = array(
    	'posts_per_page' => -1,
        'post_type' => 'iniciativas',
        'meta_query' => array(
		    array(
		      'key' => 'resultado',
		      'compare' => '=',
		      'value' => 'ganador',
		    ),
		    array(
		      'key' => 'rol',
		      'compare' => '=',
		      'value' => 'maestro',
		    )
		  ),
    ); 

 ?>

 <?php $query_maestros_ganadores = new WP_Query( $maestros_ganadores ); ?>


<!-- Directores Ganadoras -->


<?php   
    $directores_ganadores = array(
    	'posts_per_page' => -1,
        'post_type' => 'iniciativas',
        'meta_query' => array(
		    array(
		      'key' => 'resultado',
		      'compare' => '=',
		      'value' => 'ganador',
		    ),
		    array(
		      'key' => 'rol',
		      'compare' => '=',
		      'value' => 'director',
		    )
		  ),
    ); 

 ?>

 <?php $query_directores_ganadores = new WP_Query( $directores_ganadores ); ?>


 <!-- Maestros finalistas -->


<?php   
    $maestro_finalista = array(
    	'posts_per_page' => -1,
        'post_type' => 'iniciativas',
        'meta_query' => array(
		    array(
		      'key' => 'resultado',
		      'compare' => '=',
		      'value' => 'finalista',
		    ),
		    array(
		      'key' => 'rol',
		      'compare' => '=',
		      'value' => 'maestro',
		    )
		  ),
    ); 

 ?>

 <?php $query_maestro_finalista = new WP_Query( $maestro_finalista ); ?>
 <!-- Directores finalistas -->


<?php   
    $director_finalista = array(
    	'posts_per_page' => -1,
        'post_type' => 'iniciativas',
        'meta_query' => array(
		    array(
		      'key' => 'resultado',
		      'compare' => '=',
		      'value' => 'finalista',
		    ),
		    array(
		      'key' => 'rol',
		      'compare' => '=',
		      'value' => 'director',
		    )
		  ),
    ); 

 ?>

 <?php $query_directores_finalista = new WP_Query( $director_finalista ); ?>

<div class="container-fluid mb-5">
	
	<div class="container">
		
		<div class="__tabs_container __tabs_wi_auto p-0">
		
			<ul class="uk-subnav uk-subnav-pill tabs_mayor mb-3" uk-switcher="animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">



				<?php if ($query_maestros_ganadores->post_count > 0): ?>

					 <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state">
		                <a href="#">
		                    Maestros ganadores
		                </a>
		            </li> 
					
				<?php endif ?>
	           
				<?php if ($query_maestro_finalista->post_count > 0): ?>
		            <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state">
		                <a href="#">
		                    Maestros finalistas
		                </a>
		            </li>
		         <?php endif ?>

	            <?php if ($query_directores_ganadores->post_count > 0): ?>

		            <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state">
		                <a href="#">
		                    Directores reconocidos
		                </a>
		            </li>

		        <?php endif ?>

				<?php if ($query_directores_finalista->post_count > 0): ?>
	             <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state">
	                <a href="#">
	                    Directores finalistas
	                </a>
	            </li>
	            <?php endif ?>

	        </ul>

	         <ul class="uk-switcher uk-margin uk_tabs_contenes col-animate_state_content_tabs animate_init_fadeOut animate__state mt-4">
            	<!--  Maestros ganadores -->

            	<?php if ($query_maestros_ganadores->post_count > 0): ?>

            		<?php if ( $query_maestros_ganadores->have_posts() ) : ?>
            			 <li class="__detail_tab">
            			 	 <div class="__content_separate uk-position-relative">
            			 	 	<div class="row __row">

	             					<?php while ( $query_maestros_ganadores->have_posts() ) : $query_maestros_ganadores->the_post(); ?>
		                   
										<div class="col-12 col-md-4 _col_ mb-4">
											
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

		               				<?php endwhile; ?>
		                		</div>
			             	</div>
			            </li>

           			<?php endif; ?>

	            <?php endif; ?>

	            <!--  Maestros finalistas -->
				
				<?php if ($query_maestro_finalista->post_count > 0): ?>
	               
	                <li class="__detail_tab">
	                    <div class="__content_separate uk-position-relative">
							
							<!-- Tabs Inner -->
							<div class="__tabs__inner">
								
								<?php include get_theme_file_path( 'include/iniciativas_ganadoras/maestros_finalistas.php' ); ?>

							</div>

	                    </div>

	                </li>
					
				<?php endif; ?>

                <!--  Directores reconocidos -->
                <?php if ($query_directores_ganadores->post_count > 0): ?>
            		<?php if ( $query_directores_ganadores->have_posts() ) : ?>
						<li class="__detail_tab">
			                <div class="__content_separate uk-position-relative">
									
								<div class="row __row">

	             					<?php while ( $query_directores_ganadores->have_posts() ) : $query_directores_ganadores->the_post(); ?>
			                
										
										<div class="col-12 col-md-4 _col_ mb-4">
											
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

									
			            			<?php endwhile; ?>

			           			</div>
						
			                </div>

			            </li>

           			<?php endif; ?>

	            <?php endif; ?>

                <!--  Directores finalistas -->
                <?php if ($query_directores_finalista->post_count > 0): ?>
	                <li class="__detail_tab">
	                    <div class="__content_separate uk-position-relative">
							
							<?php include get_theme_file_path( 'include/iniciativas_ganadoras/directores_finalistas.php' ); ?>

	                    </div>

	                </li>
            	<?php endif; ?>

	        </ul>

	    </div>

	</div>

</div>

<div class="__overlay_select">
	
</div>

<div class="__floating_select">
    
    <div class="__list_sle">
        
         <?php for ($i=(date('Y') - 1); $i > 2006; $i--) {  ?>
            <li class="select_item <?php if($i == date('Y')) {echo 'active';}?>"><a><span class="anio">Edicion <?php echo $i; ?></span> <span class="ico"><i class="arrow right"></i></span></a></li>
        <?php } ?>

    </div>

</div>
<?php include 'include/necesi_ayuda.php'; ?>

<?php get_footer( null ); ?>