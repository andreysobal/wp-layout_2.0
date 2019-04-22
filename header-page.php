<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>Escape WP-Theme</title>
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
		<header class="main-block header header_wide">
			<div class="wrapper">
				<div class="header__title"><h1><span class="text text_header-1 text_white"><?php bloginfo( 'name' ); ?></span></div>
			</div>
		</header>