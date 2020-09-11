<?php $banner = get_field('banner', 'cpt_iniciativas'); ?>
<section class="banner__pages" id="banner__pages" style="background-image: url(<?php echo $banner['imagen'] ?>);">
	
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
