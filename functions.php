<?php 

add_action( 'wp_enqueue_scripts', 'theme_header_connections' );
add_action( 'wp_footer', 'theme_footer_connections' );
function theme_header_connections() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('theme-main-style', get_template_directory_uri() . "/assets/css/main.min.css");
	wp_enqueue_style('theme-components-style', get_template_directory_uri() . "/assets/css/components.min.css");
	wp_enqueue_script('theme-components-script', get_template_directory_uri() . "/assets/scripts/components.min.js");
};
function theme_footer_connections() {
	wp_enqueue_script('theme-main-script', get_template_directory_uri() . "/assets/scripts/scripts.min.js");
};
