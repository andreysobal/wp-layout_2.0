<?php 

add_action( 'wp_enqueue_scripts', 'theme_header_connections' );
add_action( 'wp_footer', 'theme_footer_connections' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Header menu' );
}

add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
function add_my_class_to_nav_menu( $classes, $item ){
	$classes[] = 'text text_white text_medium';
	return $classes;
}

function theme_header_connections() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('theme-main-style', get_template_directory_uri() . "/assets/css/main.min.css");
	wp_enqueue_style('theme-components-style', get_template_directory_uri() . "/assets/css/components.min.css");
	wp_enqueue_script('theme-components-script', get_template_directory_uri() . "/assets/scripts/components.min.js");
};
function theme_footer_connections() {
	wp_enqueue_script('theme-main-script', get_template_directory_uri() . "/assets/scripts/scripts.min.js");
};
