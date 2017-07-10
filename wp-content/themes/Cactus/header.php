<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class('page blog'); ?>>
  <div class="wrapper">
        <!--Header-->
        <?php
		$header_image = get_header_image();
		if ($header_image)
		echo '<img class="header-image" src="'.esc_url($header_image).'" alt="" />';
		
		?>
        <?php get_template_part( 'template-parts/header/header', 'classic' ); ?>