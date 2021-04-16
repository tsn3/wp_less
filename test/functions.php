<?php

add_theme_support( 'title-tag' );

wp_enqueue_style( 'main', trailingslashit(get_template_directory_uri()) . 'css/main.css', array(), time());

wp_enqueue_script('main', trailingslashit(get_template_directory_uri()) . 'js/main.js', array('jquery'), time(), 1);