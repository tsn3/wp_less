<?php

    // add JS and CSS
add_action( 'wp_enqueue_scripts', 'theme_name_scripts');

function theme_name_scripts() {
    //    HERE CSS
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.css');
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style( 'fontawesome-all', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css');
    wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css');
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');

	//    HERE JS
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.5.0.min.js' , array(),time(), 1);
    wp_enqueue_script('jquery-1.12.4', get_template_directory_uri() . '/assets/js/vendor/jquery-1.12.4.min.js' , array(), time(), 1);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js' , array(), time(), 1);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js' , array(), time(), 1);
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js' , array(), time(), 1);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js' , array(), time(), 1);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js' , array(), time(), 1);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js' , array(), time(), 1);
    wp_enqueue_script('animated', get_template_directory_uri() . '/assets/js/animated.headline.js' , array(), time(), 1);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js' , array(), time(), 1);
    wp_enqueue_script('scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js' , array(), time(), 1);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js' , array(), time(), 1);
    wp_enqueue_script('sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js' , array(), time(), 1);
    wp_enqueue_script('contact', get_template_directory_uri() . '/assets/js/contact.js' , array(), time(), 1);
    wp_enqueue_script('form', get_template_directory_uri() . '/assets/js/jquery.form.js' , array(), time(), 1);
    wp_enqueue_script('validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js' , array(), time(), 1);
    wp_enqueue_script('mail-script', get_template_directory_uri() . '/assets/js/mail-script.js' , array(), time(), 1);
    wp_enqueue_script('ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js' , array(), time(), 1);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js' , array(), time(), 1);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js' , array(), time(), 1);
    wp_enqueue_script('function', get_template_directory_uri() . '/assets/js/function.js', array('jquery'), time(), 1);
}