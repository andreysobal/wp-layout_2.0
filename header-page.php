<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->
	
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->
	

	<?php wp_head(); ?>
</head>

<body>
	
	<div class="wrapper_main flex-wrapper flex-wrapper_column flex-wrapper_stretch">
		<header class="main-block main-block_short-top header header_wide">
			<div class="wrapper">
				<div class="header__top">
						<a class="header__logo logo" href="<?php bloginfo( 'url' ); ?>">
							<div class="logo__img"></div>
							<div class="logo__text text text_hight text_extra text_upper text_white"><?php bloginfo( 'name' ); ?></div>
						</a>
						<?php wp_nav_menu(
								array(
									'theme_location'  => 'page_menu',
									'container'       => 'nav',
									'container_class' => 'header__nav nav', 
									'menu_class' => 'nav__wrapper',
									'fallback_cb' => false,
									'items_wrap' => '<div class="nav__burger icon">
											<span class="icon__item one"></span>
											<span class="icon__item two"></span>
											<span class="icon__item three"></span>
											<span class="icon__item four"></span>
										</div><ul id="%1$s" class="%2$s">%3$s</ul>'
								)
			); ?>
				</div>
			</div>
			<div class="header__title"><h1><span class="text text_header-1 text_white"><?php bloginfo( 'name' ); ?></span></div>
		</header>