<?php

get_header();?>
<?php include get_theme_file_path( 'include/banner.php' ); ?>

<div class="container-fluid">
	
	<div class="container">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="__content__single __padding_custom">
				
				<?php the_content(); ?>

			</div>
		<?php endwhile;?>

		 <?php endif; ?>

	</div>

</div>



<?php get_footer( null ); ?>