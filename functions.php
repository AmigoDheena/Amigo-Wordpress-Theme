<?php

function load_css(){
	wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(), false,'all'  );
	wp_enqueue_style('bootstrap');
}
add_action('wp_enqueue_scripts','load_css');

function load_js(){
	wp_enqueue_script('jquery');
	wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', 'jquery','fale','true');
	wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts','load_js');

//Enable Menu
add_theme_support('menus');

//Register menu
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Menu Location',
	)
);