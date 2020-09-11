<div class="__switcher__tab directores_finalistas">
    <div uk-grid>
        <div class="uk-width-1-3@m">
             <div class="__select_custom__move d-md-none d-block" id="select_ccc_e" data_content="directores_finalista">
                    
                    <div class="__label">
                        Elige una edición
                    </div>

                    <div class="__com">
                        
                        <span class="set_text">
                            Edicion 2020
                        </span>

                         <span class="ico"><i class="arrow bottom"></i>

                    </div>

                </div>
            <ul class="uk-tab-left" uk-tab="connect: #componente_directores_finalistas; animation: uk-animation-slide-top-small, uk-animation-slide-bottom-small">
                
                <?php for ($i=(date('Y') - 1); $i > 2006; $i--) {  ?>
                    <li  class="d-none d-md-block"><a href="#">Edicion <?php echo $i; ?> <span class="ico"><i class="arrow right"></i></span></a></li>
                <?php } ?>
            </ul>
        </div>
        <div class="uk-width-expand@m">
            <ul id="componente_directores_finalistas" class="uk-switcher" data_content_content="directores_finalista">
                <!-- Separate anio -->
                <?php for ($i=(date('Y') - 1); $i > 2006; $i--) {  ?>

                    <li>
                         <div class="__content_separate uk-position-relative">

                            <div class="row __row">
                               

                                <?php $valid_no_exist = true; ?>

                                 <?php if ( $query_directores_finalista->have_posts() ) : ?>

                                    <?php while ( $query_directores_finalista->have_posts() ) : $query_directores_finalista->the_post(); ?>
                                        <?php if (get_field('ano') == $i): ?>

                                            <?php $valid_no_exist = false; ?>
                                                  
                                            <div class="col-12 col-md-6 _col_ mb-4">
                                    
                                                <div class="__panel_inic __text_full">
                                                    
                                                    <div class="__top">
                                                        
                                                        <div class="__regi">
                                                            
                                                            <span><?php echo get_field('lugar') ?></span>

                                                        </div>

                                                        <div class="__anio">
                                                            
                                                           <span><?php echo get_field('ano'); ?></span>

                                                        </div>

                                                    </div>

                                                    <!-- <div class="__name_inic">
                                                        
                                                       <span><?php //echo get_field('nombre_inicativa') ?></span>

                                                    </div> -->

                                                    <div class="__midd nothin_picture">
                                                        
                                                        <div class="__details">
                                                            
                                                            <span class="__nombre">
                                                                
                                                                <?php echo get_field('responsable') ?>

                                                            </span>

                                                            <span class="__colegio">
                                                                
                                                                <?php echo get_field('colegio') ?>

                                                            </span>

                                                        </div>

                                                    </div>

                                                    <div class="__bottom">
                                                        
                                                        <div class="__ico_go">
                                                            
                                                            <img src="<?php echo get_template_directory_uri() . '/assets/iconos/arrow.png' ?>" alt="">

                                                        </div>

                                                    </div>

                                                    <a href="<?php echo get_permalink(); ?>" class="__link_flo"></a>

                                                </div>

                                            </div>

                                        <?php endif; ?>

                                    <?php endwhile; ?>

                                <?php endif; ?>

                                <?php if ($valid_no_exist): ?>
                                    <div class="col-12 col-md-12 text-center _col_">
                                        <h2>No hay datos por aqui.</h2>
                                    </div>
                                <?php endif ?>

                            </div>

                         </div>
                    </li>

                <?php } ?>
            </ul>
        </div>
    </div>
</div>