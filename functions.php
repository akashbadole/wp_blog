<?php 

function simple_theme_setup(){
	// Featured Image Suport
	add_theme_support( 'post-thumbnails');

	// Menus Support
	register_nav_menus( array(
		'primary' => __('Primary Menu')
	) );
}

add_action('after_setup_theme', 'simple_theme_setup');
// excerpt link

function set_excerpt_lenght(){
	return 25;
}
add_filter( 'excerpt_length', 'set_excerpt_lenght' );

// Widget Location

function init_widget($id){
	register_sidebar(array(
		'name'  => 'Sidebar',
		'id'	=> 'sidebar',
		'before_widget' => '<div class="side-widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'

	));
}

add_action( 'widgets_init', 'init_widget' );