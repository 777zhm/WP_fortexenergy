<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-2 header_logo">
				<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
				<?php endif; ?>	
			</div>
			<div class="col-8 main_menu">
				<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
			</div>
			<div class="col-2 lang_menu">
				<?php wp_nav_menu( array('theme_location' => 'lang_menu') ); ?>
			</div>
			<div class="d-sm-none burger_icon_box" id="burger_icon_box"><span class="burger_icon">&#9776;</span></div>
		</div>
	</div>
	<div id="burger_nav" class="overlay">
		<span class="burger_icon_close" id="burger_icon_close">&times;</span>
		<div class="overlay_menu">
			<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
		</div>
	</div>
</header>

<main id="main" class="main" role="main">