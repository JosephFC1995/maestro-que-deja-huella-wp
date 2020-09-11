<div class="__detail_novedad">

	<div class="title d-block d-md-none">
			
			<h2>
				<?php echo get_the_title(); ?>
			</h2>

		</div>
	
	<div class="_picture">
			
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

	</div>

	<div class="__detail">
		
		<div class="_fecha">
			
			<span>
				<?php echo get_the_date( 'd \d\e\ F', null ); ?>
			</span>

		</div>

		<div class="title d-none d-md-block">
			
			<h2>
				<?php echo get_the_title(); ?>
			</h2>

		</div>

	</div>

</div>