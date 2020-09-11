<section class="banner__pages svg_swhite" id="banner__pages" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
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

				<span class="d-block mt-2">
					 <?php echo file_get_contents(  home_url( '', null ) . '/wp-content/uploads/2020/02/ico-mail.svg') ?>  maestroquedejahuella@intercorp.com.pe
				</span>

			</div>

		</div>

	</div>

</section>