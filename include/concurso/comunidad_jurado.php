<?php $comunidad = get_field('comunidad') ?>

<section class="comunidad_jurado padding_general" id="comunidad_jurado">
	
	<div class="container-fluid">
		
		<div class="container">

			<div class="__comunidad">
				
				<div class="__image">
					<?php echo file_get_contents($comunidad['imagen']) ?>
				</div>
				<div class="__detail">
					<span class="__title"><?php jump_words($comunidad['titulo']); ?></span>
					<p class="__more"><?php jump_words($comunidad['detalle']); ?>
					</p>
					<?php if ($comunidad['boton']['texto_del_boton'] != '' || $comunidad['boton']['enlace_del_boton'] != ''): ?>
						<div class="link">
							<a href="<?php echo $comunidad['boton']['enlace_del_boton']; ?>">
								<?php echo $comunidad['boton']['texto_del_boton']; ?> <span class="ico"><i class="arrow right"></i></span>
							</a>
						</div>
					<?php endif ?>
				</div>

			</div>


		</div>

	</div>

</section>