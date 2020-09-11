<?php $banner = get_field('banner') ?>


<section class="banner__pages" id="banner__pages" style="background-image: url(<?php echo $banner['imagen'] ?>);">
	
	<div class="container-fluid">

		<div class="container">
			
			<div class="__title__r">
				
				<h1>
					<?php jump_words($banner['titulo']); ?>
				</h1>

			</div>

			<div class="_caption">
				
				<span>
					<?php jump_words($banner['caption']); ?>
				</span>

			</div>
			
			<?php if ($banner['boton']['texto_del_boton'] != '' || $banner['boton']['url'] != ''): ?>
				<div class="__group_buttons">
					<a href="<?php echo $banner['boton']['url'] ?>" class="btn__inter white">
						<span>
							<?php echo $banner['boton']['texto_del_boton'] ?>
						</span>
					</a>
				</div>

			<?php endif ?>

		</div>

	</div>

</section>