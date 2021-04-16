<?php

//add_action( 'wp_ajax_my_action', 'my_action' );

add_action( 'after_setup_theme', function() {
    add_theme_support('title-tag');
//    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('html5');

    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 137,
    ) );
});

add_image_size('post_preview', 555, 280, 1);
add_image_size('post_image', 750, 350, 1);

wp_enqueue_style( 'main', trailingslashit(get_template_directory_uri()) . 'css/main.css', array(), time());
wp_enqueue_script('main', trailingslashit(get_template_directory_uri()) . 'js/main.js', array('jquery'), time(), 1);

add_action('block_meta', function() {?>
    <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?><i class="lnr lnr-user"></i></a></li>
<?php });

function my_get_date() {
    echo '<li><a href="#">';
    the_date();
    echo '<i class="lnr lnr-calendar-full"></i></a></li>';
}

add_action('block_meta', 'my_get_date');

add_action('block_meta', function() {
    echo '<li><a href="#">';
    do_action('get_views');
    echo ' Views<i class="lnr lnr-eye"></i></a></li>';
});

add_action('block_meta', function() {
    $num_comments = get_comments_number();
    if ( $num_comments == 0 ) {
        $comments = __('No Comments');
    } elseif ( $num_comments > 1 ) {
        $comments = $num_comments . __(' Comments');
    } else {
        $comments = __('1 Comment');
    }

    if (is_user_logged_in()) {
        echo '<li><a href="#">'.$comments.'<i class="lnr lnr-bubble"></i></a></li>';
    }
});

add_action('get_views', function() {
    $views = (int)get_post_meta(get_the_ID(), 'views', true);

    if (is_single()) {
        $views++;
        update_post_meta(get_the_ID(), 'views', $views);
    }

    echo $views;
});

add_filter('the_content', function($text) {
    return '<hr> Реклама <hr>' . $text;
});

//add_shortcode( 'test_text' , function($arg) {
//
//});