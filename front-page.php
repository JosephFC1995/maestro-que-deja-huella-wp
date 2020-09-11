<?php get_header();?>
<?php $page = get_page_by_path( 'inicio','','page' ); ?>
<?php $__id_from_page = $page->ID; ?>
<?php include 'include/home/slider.php'; ?>
<?php include 'include/home/el_concurso.php'; ?>
<?php include 'include/home/los_premios.php'; ?>
<?php include 'include/necesi_ayuda.php'; ?>

<?php get_footer(); ?>