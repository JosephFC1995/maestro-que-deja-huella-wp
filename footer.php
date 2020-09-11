<?php wp_footer(); ?>
<?php $post_id = get_options_page_id('general'); ?>
<?php $footer = get_field('footer', $post_id); ?>
<footer class="footer" id="footer">
	
	<div class="container-fluid">
		
		<div class="container">
			
			<div class="__menu_footer">
				
				<?php wp_nav_menu(
				    array(
				        'theme_location' => 'footer',
				        'menu_class'     => 'list-unstyled m-0 menu_a_k',
				        'menu_id'        => 'menu_footer',
				    )
				);?>

			</div>

			<div class="__end_footer">
				
				<div class="__auspicios">
					
					<div class="__l">
						
						<span>
							Auspicios
						</span>

					</div>

					<div class="__img_auspicios">

						<?php foreach ($footer['auspicion_imagenes'] as $key => $imagen): ?>
							<div class="_img__aus">
							
								<img src="<?php echo $imagen['url'] ?>" alt="">

							</div>
							
						<?php endforeach ?>
						

					</div>

				</div>

				<div class="__organizador">
					
					<div class="__l">
						
						<span>
							Organizado por
						</span>

					</div>
					
					<div class="__img_auspicios">

						<div class="_img__aus">
							
							<img src="<?php echo get_template_directory_uri(). '/assets/images/imagenes.png' ?>" alt="">

						</div>

					</div>


				</div>

			</div>

		</div>

	</div>

</footer>
</body>
</html>