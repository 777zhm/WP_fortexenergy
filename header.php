<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="header_logo">
	<?php if ( has_custom_logo() ) : ?>
		<?php the_custom_logo(); ?>
	<?php endif; ?>		
	</div>
	<nav class="main_menu">
		<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
	</nav>
	<div class="burger_icon_box" id="burger_icon_box"><span class="burger_icon">&#9776;</span></div>
	<div id="burger_nav" class="overlay">
		<span class="burger_icon_close" id="burger_icon_close">&times;</span>
		<div class="overlay_menu">
			<?php wp_nav_menu( array('theme_location' => 'burger_menu') ); ?>
		</div>
	</div>
</header>

<main id="main" class="main" role="main">