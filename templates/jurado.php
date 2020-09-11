<?php
/**
 * Template Name: Comite y jurado
 *
 */
get_header();?>
<?php include get_theme_file_path( 'include/comite_jurado/banner.php' ); ?>

<div class="container d-none d-md-block">
	
	<div class="breadcrumb __section">
		
					<ul class="__breadcrumb_custom">
					    <li><a href="/">Inicio <span class="ico"><i class="arrow right"></i></span></a></li>
					    <li><a href="<?php echo home_url( 'concurso', null ); ?>">Concurso <span class="ico"><i class="arrow right"></i></span></a></li>
					    <li><span class="_nothing">Comité consultivo y jurado</span></li>
					</ul>
				
		</div>

</div>
<?php include get_theme_file_path( 'include/comite_jurado/comite.php' ); ?>
<?php include  get_theme_file_path('include/necesi_ayuda.php'); ?>



<?php get_footer( null ); ?>