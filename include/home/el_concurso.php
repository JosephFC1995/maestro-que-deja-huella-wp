<?php $concurso = get_field('el_concurso', $__id_from_page) ?>


<section class="el_concurso padding_general pb-0" id="el_concurso">
	
	<div class="container-fluid">
		
		<div class="container">

			<div class="title_global">
				
				<h1>
					El concurso
				</h1>

			</div>

			<div class="__tabs_container">
				
				<ul class="uk-subnav uk-subnav-pill tabs_mayor mb-3" uk-switcher="animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
					<?php foreach ($concurso  as $key => $con): ?>
	                    <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state">
	                        <a href="#">
	                            <?php echo $con['titulo_tab'] ?>
	                        </a>
	                    </li> 

                    <?php endforeach ?>
                </ul>

                 <ul class="uk-switcher uk-margin uk_tabs_contenes col-animate_state_content_tabs animate_init_fadeOut animate__state">
                	<!-- Fachada -->
                	<?php foreach ($concurso  as $key => $con): ?>
		                <li class="__detail_tab">
		                     <div class="__content_separate uk-position-relative">
				            	<div class="content__">
				            			<?php echo $con['detalle'] ?>
				            	</div>
				            </div>
		                </li>
	                <?php endforeach ?>
					<!-- Fin fachada -->
                </ul>

			</div>


		</div>

	</div>

</section>