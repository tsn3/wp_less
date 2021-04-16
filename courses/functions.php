<?php

add_action('wp_enqueue_scripts', 'theme_stcripts');
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {

	wp_enqueue_style('style', '//fonts.googleapis.com/css?family=Montserrat:300,400,500%7CPlayfair+Display:700');
    wp_enqueue_style( 'testovoe', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/style.css');
}

function theme_stcripts()
{
	wp_enqueue_script('core', get_template_directory_uri() . '/assets/js/core.min.js' , array(),time(), 1);
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js' ,array(), time(), 1);
}

