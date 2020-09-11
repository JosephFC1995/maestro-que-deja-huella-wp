<?php $switcher = get_field('preguntas_frecuentes') ?>

<div class="__switcher__tab my-5 d-none d-md-block">
    <div uk-grid>
        <div class="uk-width-1-3@m">
            <ul class="uk-tab-left" uk-tab="connect: #componente_directores_finalistas; animation: uk-animation-slide-top-small, uk-animation-slide-bottom-small">
                <?php foreach ($switcher as $key => $sw): ?>
                     <li><a href="#"><?php echo $sw['titulo_tab'] ?> <span class="ico"><i class="arrow right"></i></span></a></li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="uk-width-expand@m">
            <ul id="componente_directores_finalistas" class="uk-switcher">
                <!-- Separate anio -->
                <?php foreach ($switcher as $key => $sw): ?>
                <li>
                     <div class="__content_separate uk-position-relative">

                       <?php echo $sw['contenido'] ?>

                     </div>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<div class="_accordian  my-5 d-block d-md-none">
    <ul uk-accordion>
        <?php foreach ($switcher as $key => $sw): ?>
            <li>
                <a class="uk-accordion-title" href="#"><?php echo $sw['titulo_tab'] ?> </a>
                <div class="uk-accordion-content">
                     <div class="__content_separate uk-position-relative">

                       <?php echo $sw['contenido'] ?>

                     </div>
                </div>
            </li>
        <?php endforeach ?>
    </ul>
</div>