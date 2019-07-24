<?php 

add_action( 'wp_enqueue_scripts', 'theme_header_connections' );
add_action( 'wp_footer', 'theme_footer_connections' );
add_action( 'after_setup_theme', 'theme_register_nav_menus' );
add_action( 'widgets_init', 'theme_register_sidebar' );

function theme_register_sidebar() {
	register_sidebar( array(
		'name'          => 'Right Sidebar',
		'id'            => "right_sidebar",
		'description'   => 'Right sidebar for single pages and archives',
		'class'         => '.section__sidebar.sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s text text_low text_separated">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<div class="text text_black widgettitle">',
		'after_title'   => "</div>\n",
	) );
}

function theme_register_nav_menus() {
	register_nav_menus( [
		'header_menu' => 'Header menu',
		'page_menu' => 'Page menu'
	]);
	add_theme_support( 'title-tag' );
	add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
	function add_my_class_to_nav_menu( $classes, $item ){
		$classes[] = 'text text_white text_medium';
		return $classes;
	}
	add_filter('excerpt_more', function($more) {
		return ' ...';
	});
	add_filter( 'excerpt_length', function(){
		return 30;
	} );
	add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
	function my_navigation_template( $template, $class ){
		return '
			<nav class="navigation %1$s" role="navigation">
			<div class="nav-links">%3$s</div>
			</nav>    
		';
	}
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
