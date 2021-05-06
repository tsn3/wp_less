<?php
/**
 * REQUIRED FILES
 * Include required files.
 */
// CSS and JS
require get_template_directory() . '/functions-css.php';

add_action( 'after_setup_theme', function() {
    add_theme_support('title-tag');
	add_theme_support( 'post-thumbnails', array( 'post' ) );
//    add_theme_support('woocommerce');
    add_theme_support('html5');

	add_theme_support( 'custom-logo', array(
		'height'      => 24,
		'width'       => 132,
	) );

    register_nav_menus(array(
            'primary-menu' => 'Главное меню',
            'footer-menu' => 'Подвальное меню',
            'mobile-menu' => 'Мобильное меню',
        )
    );

	add_filter( 'excerpt_more', 'new_excerpt_more' );
	function new_excerpt_more( $more ){
		global $post;
		return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
	}
	// удаляет H2 из шаблона пагинации
	add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
	function my_navigation_template( $template, $class ){
		return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
	}

// выводим пагинацию
	the_posts_pagination( array(
		'end_size' => 2,
	) );

});

// Add sidebars in Block
add_action( 'widgets_init', 'register_my_widgets' );

function register_my_widgets()
{
    register_sidebar( array(
        'name'          => 'Right Sidebar',
        'id'            => "right_sidebar",
        'description'   => 'Описание нашего сайдбара',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => "</h5>\n"
    ) );
}

class my_menu_class extends Walker_Nav_Menu {

}


// Волшебный AJAX
add_action( 'wp_ajax_contact', 'magicAjax' );
add_action( 'wp_ajax_nopriv_contact', 'magicAjax' );
//add_action( 'wp_ajax_{action}', 'magicAjax' );

function magicAjax() {
//    $status = wp_mail(get_option('admin_email'), __('Контакты'), print_r($_POST, 1));
    $status = wp_mail('tsn3ps@gmail.com', __('Контакты'), print_r($_POST, 1));

    wp_send_json(array('status' => $status));
}

add_action( 'wp_ajax_needmore', 'magicAjax2' );
add_action( 'wp_ajax_nopriv_needmore', 'magicAjax2' );

function magicAjax2() {
    $data = new WP_Query('post_type=post&posts_per_page=1&orderby=rand');

    ob_start();
    ?>

    <?php if ($data->have_posts()): ?>
        <?php while($data->have_posts()): ?>
            <?php $data->the_post(); ?>
            <?php get_template_part('content/post', get_post_type());?>
        <?php endwhile; ?>
    <?php else : ?>
        <hr><?php _e('Ничего не найденно.', 'tsn')?><hr>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

    <?php

    $content = ob_get_contents();
    ob_clean();

    wp_send_json(
        array(
            'status' => 1,
            'content' => $content
        )
    );
}


function get_gallery( $id )
{
    // Simple query
    $posts = get_posts( array(
        'category' => $id,
        'post_status' => 'publish',
        'post_type' => 'post',
    ) );

    // Start building the Html code
    $slide_show = '
        <div id="slide-show">
            <ul>';

    // Iterate through the results
    foreach ( $posts as $post )
    {
        // Assign value and test if it exists at the *same time*
        if( $thumb = get_post_thumbnail_id( $post->ID ) )
        {
            $permalink = get_permalink( $post->ID );
            $image = wp_get_attachment_image_src( $thumb );

            // Build the Html elements
            $slide_show .= '
                <li>
                    <a href="' . $permalink . '">
                    <img src="'. $image[0] . '" alt="' . $post->post_title .'" />
                    </a>
                </li>';
        }
    }

    // Finish the Html
    $slide_show .= '
            </ul>
        </div>
    ';

    // Print the Html
    echo $slide_show;
}

