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
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?> 
				<a href="https://fortexenergy.com"><img class="img img-fluid" src="<?php echo $image[0]; ?>" alt="logotype"></a>
				<?php endif; ?>	
			</div>
			<div class="col-lg-8 col-md-7 main_menu d-none d-md-block">
				<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 lang_menu d-none">
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