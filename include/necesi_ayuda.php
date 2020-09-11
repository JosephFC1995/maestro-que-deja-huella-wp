<?php 

$post_id = get_options_page_id('general');
// get a value using $post_id
$banner_necesito_ayuda = get_field('banner_necesito_ayuda', $post_id);
 ?>
<section class="banner_necesito_ayuda padding_general" id="banner_necesito_ayuda">
	
	<div class="container-fluid">
		
		<div class="container">

			<div class="__necesito_ayuda">
				
				<div class="__image">
					<?php echo file_get_contents(get_template_directory_uri() . '/assets/ico-fullcolor/ENVIO.svg') ?>
				</div>
				<div class="__detail">
					<span class="__title"><?php echo $banner_necesito_ayuda['titulo'] ?></span>
					<p class="__more"><?php echo $banner_necesito_ayuda['detalle'] ?></p>
				</div>
				<?php if ($banner_necesito_ayuda['boton']['titulo_del_boton'] != '' || $banner_necesito_ayuda['boton']['enlace_del_boton'] != ''): ?>
					<div class="__group_buttons">
						<a href="<?php echo $banner_necesito_ayuda['boton']['enlace_del_boton'] ?>" class="btn__inter">
							<span>
								<?php echo $banner_necesito_ayuda['boton']['titulo_del_boton'] ?>
							</span>
						</a>
					</div>
				<?php endif ?>

			</div>


		</div>

	</div>

</section>