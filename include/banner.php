<?php $banner_imagen_mobile = get_field('banner_imagen_mobile') ?>

<section class="banner__pages d-none d-md-flex" id="banner__pages" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
	<?php $banner = get_field('banner') ?>
	<div class="container-fluid">

		<div class="container">
			
			<div class="__title__r">
				
				<h1>
					<?php jump_words($banner['titulo']) ?>
				</h1>

			</div>

			<div class="_caption">
				
				<span>
					<?php  jump_words($banner['caption']) ?>
				</span>
			</div>

		</div>

	</div>

</section>

<section class="banner__pages d-flex d-md-none" id="banner__pages" style="background-image: url(<?php echo ($banner_imagen_mobile) ? $banner_imagen_mobile : get_the_post_thumbnail_url(); ?>);">
	<?php $banner = get_field('banner') ?>
	<div class="container-fluid">

		<div class="container">
			
			<div class="__title__r">
				
				<h1>
					<?php jump_words($banner['titulo']) ?>
				</h1>

			</div>

			<div class="_caption">
				
				<span>
					<?php  jump_words($banner['caption']) ?>
				</span>
			</div>

		</div>

	</div>

</section>