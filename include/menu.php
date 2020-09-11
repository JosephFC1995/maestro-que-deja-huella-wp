<nav class="nav_bar-top" id="menu"  uk-sticky="top: 100; bottom: #sticky-on-scroll-up">

	<div class="container-fluid">

		<div class="container position-relative">

			<div class="nav__top">
				
				<div class="__left-prefix">
					
					<div class="__logo_comp">
						
						<a href="<?php echo home_url( '', null ); ?>">

							<img src="<?php echo get_template_directory_uri(). '/assets/images/logo-MQDH.png' ?>" alt="">

						</a>

						<img src="<?php echo get_template_directory_uri(). '/assets/images/imagenes.png' ?>" alt="" class="inter">

					</div>


				</div>

				<div class="__right-prefix">

					<div class="__mobile_acc">
						<button class="hamburger hamburger--spin d-md-none" type="button" id="hamburger__menu">
						  <span class="hamburger-box">
						    <span class="hamburger-inner"></span>
						  </span>
						</button>

						<?php if (is_user_logged_in()): ?>

							<div class="__burble mobile d-flex d-md-none">
								
								<div class="__picture">

									<?php $current_user = wp_get_current_user(); ?>
									
									<span class="name_user text-capitalize"><?php echo ($current_user->user_firstname) ? $current_user->user_firstname[0].$current_user->user_firstname[1] : $current_user->user_login[0] . $current_user->user_login[1] ?></span>

								</div>

								<div uk-dropdown><a href="<?php echo wp_logout_url( home_url() ); ?>" >Cerrar sesión</a></div>


							</div>

						<?php endif; ?>
					</div>
					
					<div class="__menu-p">

						<div class="gle_m">

							<?php wp_nav_menu(
							    array(
							        'theme_location' => 'navegation',
							        'menu_class'     => 'list-unstyled m-0 menu_a_k',
							        'menu_id'        => 'menu__in',
							    )
							);?>

							<div class="__group_buttons">
								<?php if (is_user_logged_in()): ?>
									<a class="btn__inter w-100" href="<?php echo home_url( 'inscripcion', null ); ?>">
		                                Incríbete
		                            </a>
		                        <?php else: ?>
		                        	<a class="btn__inter w-100" href="<?php echo home_url( 'login', null ); ?>">
		                                Incríbete
		                            </a>
								<?php endif ?>
	                            
	                        </div>

						</div>

					</div>

				</div>

			</div>

			<?php if (is_user_logged_in()): ?>

				<div class="__burble __desktop d-none d-md-flex">
					
					<div class="__picture">

						<?php $current_user = wp_get_current_user(); ?>
						
						<span class="name_user text-capitalize"><?php echo ($current_user->user_firstname) ? $current_user->user_firstname[0].$current_user->user_firstname[1] : $current_user->user_login[0] . $current_user->user_login[1] ?></span>

					</div>

					<div uk-dropdown><a href="<?php echo wp_logout_url( home_url() ); ?>" >Cerrar sesión</a></div>


				</div>

			<?php endif; ?>

		</div>

	</div>
</nav>

<div class="floating__menu__link">

	<div class="gle_m">

		<?php wp_nav_menu(
		    array(
		        'theme_location' => 'navegation',
		        'menu_class'     => 'list-unstyled m-0 menu_a_k',
		        'menu_id'        => 'menu__in',
		    )
		);?>

		<div class="__group_buttons">
			<?php if (is_user_logged_in()): ?>
				<a class="btn__inter w-100" href="<?php echo home_url( 'inscripcion', null ); ?>">
                    Incríbete
                </a>
            <?php else: ?>
            	<a class="btn__inter w-100" href="<?php echo home_url( 'login', null ); ?>">
                    Incríbete
                </a>
			<?php endif ?>
            
        </div>

	</div>
	
</div>

<div class="__inscribete_floating">
	<?php if (is_user_logged_in()): ?>
		<a class="btn__inter w-100" href="<?php echo home_url( 'inscripcion', null ); ?>">
            Incríbete
        </a>
    <?php else: ?>
    	<a class="btn__inter w-100" href="<?php echo home_url( 'login', null ); ?>">
            Incríbete
        </a>
	<?php endif ?>
    
</div>