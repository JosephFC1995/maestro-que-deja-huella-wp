<?php

get_header();?>
<?php include get_theme_file_path( 'include/banner.php' ); ?>

<div class="container-fluid">
	
	<div class="container">
		
		<div class="__content__single">
					
			<?php the_content(); ?>

		</div>

	</div>

</div>



<?php get_footer( null ); ?>