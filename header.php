<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
	<meta charset="UTF-8">
	<?php
	$sep = ' - ';
	$name = get_bloginfo( 'name' );

	if( is_single() || is_page() )
	{
		$title = wp_title( $sep, false, 'right' ) . $name;
	}

	if( is_category())
	{
	  	$title = single_cat_title( '', false ) . $sep . $name;
	}

	if(is_post_type_archive())
	{
		$title = post_type_archive_title( '', false ) . $sep . $name;
	}

	if(is_tax())
	{
		$taxonomy = get_queried_object();
		$title = $taxonomy->name . $sep . $name;
		
	}

	if (is_404()) 
	{
	  	$title = '404' . $sep . $name;
	}

	if( is_home() || is_front_page() )
	{
		$name_page =  get_bloginfo('name');
		$title = $name_page . $sep . get_bloginfo( 'description' );
	}

	?>
	<title><?php echo $title;?></title>
	<meta name="description" content="<?php echo bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<?php wp_head(); ?>
</head>
<?php $page = get_page_by_path( 'inicio','','page' ); ?>
<body <?php body_class(); ?>>
		<?php include 'include/menu.php'; ?>