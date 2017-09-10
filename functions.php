<?php


function LWP_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'LWP' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	register_nav_menus(array(
	'primary'=>__('Primary Menu'),
	'footer'=>__('Footer Menu'),
));

}

add_action( 'after_setup_theme', 'LWP_setup' );


function LWP_scripts(){

    wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('script', get_template_directory_uri().'/main.js');

}

add_action('wp_enqueue_scripts','LWP_scripts');
