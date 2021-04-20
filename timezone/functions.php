<?php

add_action('wp_enqueue_scripts', 'theme_stcripts');
add_action( 'wp_enqueue_scripts', 'theme_name_scripts');

add_action( 'after_setup_theme', function() {

	add_theme_support( 'custom-logo', array(
		'height'      => 24,
		'width'       => 132,
	) );
});

add_action( 'widgets_init', 'register_my_widgets' );

function register_my_widgets()
{
    register_sidebar( array(
        'name'          => 'Left Sidebar',
        'id'            => "left_sidebar",
        'description'   => 'Описание нашего сайдбара',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => "</h5>\n"
    ) );
    register_sidebar( array(
        'name'          => 'Top Sidebar',
        'id'            => "top_sidebar",
        'description'   => 'Верхний сайдбар',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => "</h5>\n"
    ) );
}

add_action( 'after_setup_theme', function() {
//    add_theme_support('title-tag');
////    add_theme_support('custom-logo');
//    add_theme_support('post-thumbnails');
//    add_theme_support('woocommerce');
//    add_theme_support('html5');
//
//    add_theme_support( 'custom-logo', array(
//        'height'      => 50,
//        'width'       => 137,
//    ) );

    register_nav_menus(array(
            'primary-menu' => 'Главное меню',
            'mobile-menu' => 'Мобильное меню',
        )
    );

});


class my_menu_class extends Walker_Nav_Menu {
//    function start_lvl( &$output, $depth = 0, $args = null ) {
//        $output = '';
//    }
//
//    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
//        $output = '';
//    }
//
//    function end_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
//        $output = '';
//    }
}

function theme_name_scripts() {
//    wp_enqueue_style('styles', get_stylesheet_uri());

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
}

function theme_stcripts()
{
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
}
