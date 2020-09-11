<?php $slider = get_field('slider', $__id_from_page) ?>
<section id="__slider-r" class="slider__r">
	
	<div class="__slider_content" >
		
		<div class="uk-position-relative uk-visible-toggle uk-light __slider_slidershow_home" tabindex="-1" uk-slideshow="animation: fade; max-height: 450;">

		    <ul class="uk-slideshow-items">
		    	<?php foreach ($slider  as $key => $sli): ?>
			        <li data-slider-index="<?php echo $key; ?>">
			            <img src="<?php echo $sli['imagen'] ?>" alt="" uk-cover>
			            <div class="__content_banner">
			            	<div class="container">
			            		
				            	<div class="uk-position-left ">
				            			<div class="__title__r">
						
											<h1>
												<?php jump_words($sli['titulo']); ?>
											</h1>

										</div>

										<div class="_caption">
											
											<span>
												<?php jump_words($sli['caption']); ?>
											</span>

										</div>
										<?php if ($sli['button']['texto_del_boton'] != '' || $sli['button']['url_del_boton'] != ''): ?>
											<div class="__group_buttons">
												<a href="<?php echo $sli['button']['url_del_boton'] ?>" class="btn__inter">
													<span>
														<?php echo $sli['button']['texto_del_boton'] ?>
													</span>
												</a>
											</div>
											
										<?php endif ?>
										
				            	</div>

			            	</div>
			            </div>
			        </li>

			    <?php endforeach ?>
		    </ul>

		    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        	<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
			
			<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin">
		        <li uk-slider-item="0"><a href="#">...</a></li>
		        <li uk-slider-item="1"><a href="#">...</a></li>
		        <li uk-slider-item="2"><a href="#">...</a></li>
		    </ul>
        	


		</div>
		
		<!-- <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul> -->

	</div>

</section>