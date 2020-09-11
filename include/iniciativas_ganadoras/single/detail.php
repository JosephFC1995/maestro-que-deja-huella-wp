<div class="__detail_iniciativa">
	
	<div class="__content">
		<?php $resultado = get_field('resultado') ?>

		<?php if ($resultado == 'ganador'): ?>
		
			<div class="_picture">

				<img src="<?php echo get_field('imagen_repsonsable') ?>" alt="">

				<div class="__button_shared">
					
					
				
				</div>

			</div>
		<?php endif ?>

		<div class="__detail <?php if ($resultado != 'ganador'){ echo '__full';} ?>">
			
			<div class="title">
				
				<h1>
					<?php echo get_field('nombre_inicativa') ?>
				</h1>

			</div>

			<div class="_name">
				
				<span>
					<?php echo get_field('responsable') ?>
				</span>

			</div>

			<div class="_colegio">
				
				<span>
					<?php echo get_field('colegio') ?>
				</span>

			</div>

			<div class="_more">
				
				<span>
					<?php echo get_field('lugar') ?> | <?php if ($resultado == 'ganador'){ echo 'Ganador de la edición ' .  get_field('anio');}else{echo 'Finalista de la edición ' .  get_field('ano'); } ?>
						
				</span>

			</div>

		</div>

	</div>

</div>