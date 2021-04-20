<?php

//add_action( 'wp_ajax_my_action', 'my_action' );
//if (!is_admin()) {
//    add_action('pre_get_posts', 'pre_get_posts');
//}
//
//function pre_get_posts($query) {
//    if ($query->is_main_query()) {
//        $query->set('posts_per_page', -1);
//        $query->set('s', 'тест');
//        $query->set('post_type', array('news', 'jobs'));
//    }
//}


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

add_action( 'init', 'news_register_post_type_init' ); // Использовать функцию только внутри хука init

function news_register_post_type_init()
{
    $labels = array(
        'name' => 'Новости',
        'singular_name' => 'Новость', // админ панель Добавить->Функцию
        'add_new' => 'Добавить новость',
        'add_new_item' => 'Добавить новую новость', // заголовок тега <title>
        'edit_item' => 'Редактировать новость',
        'new_item' => 'Новая новость',
        'all_items' => 'Все новости',
        'view_item' => 'Просмотр новостей на сайте',
        'search_items' => 'Искать новости',
        'not_found' =>  'Новостей не найдено !!!!!',
        'not_found_in_trash' => 'В корзине нет новостей.',
        'menu_name' => 'Новости' // ссылка в меню в админке
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => 'dashicons-edit-large', // иконка в меню
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
    );

    register_post_type('news', $args);
}

add_action( 'init', 'jobs_register_post_type_init' ); // Использовать функцию только внутри хука init

function jobs_register_post_type_init()
{
    $labels = array(
        'name' => 'Вакансии',
        'singular_name' => 'Вакансии', // админ панель Добавить->Функцию
        'add_new' => 'Добавить Вакансии',
        'add_new_item' => 'Добавить новую Вакансии', // заголовок тега <title>
        'edit_item' => 'Редактировать Вакансии',
        'new_item' => 'Новая Вакансии',
        'all_items' => 'Все Вакансии',
        'view_item' => 'Просмотр Вакансии на сайте',
        'search_items' => 'Искать Вакансии',
        'not_found' =>  'Вакансии не найдено !!!!!',
        'not_found_in_trash' => 'В корзине нет Вакансии.',
        'menu_name' => 'Вакансии' // ссылка в меню в админке
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => 'dashicons-edit-large', // иконка в меню
        'menu_position' => 10, // порядок в меню
        'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
    );

    register_post_type('jobs', $args);
}

add_action( 'init', function() {
    $golive_category = array(
        'label' => 'Страны',
        'hierarchical' => true,
        /* true - по типу рубрик, false - по типу меток,
        по умолчанию - false */
        'public' => true,
        /* каждый может использовать таксономию, либо
        только администраторы, по умолчанию - true */
        'show_in_nav_menus' => true,
        /* добавить на страницу создания меню */
        'show_ui' => true,

        'show_in_rest' => true,

        /* добавить интерфейс создания и редактирования */
        'show_tagcloud' => true,
        /* нужно ли разрешить облако тегов для этой таксономии */
        'update_count_callback' => '_update_post_term_count',
        /* callback-функция для обновления счетчика $object_type */
        'query_var' => true,
    );

    register_taxonomy('post_country', array('post'), $golive_category); // category
});

add_action( 'init', function() {
    $golive_category = array(
        'label' => 'Теги',
        'hierarchical' => false,
        /* true - по типу рубрик, false - по типу меток,
        по умолчанию - false */
        'public' => true,
        /* каждый может использовать таксономию, либо
        только администраторы, по умолчанию - true */
        'show_in_nav_menus' => true,
        /* добавить на страницу создания меню */
        'show_ui' => true,

        'show_in_rest' => true,

        /* добавить интерфейс создания и редактирования */
        'show_tagcloud' => true,
        /* нужно ли разрешить облако тегов для этой таксономии */
        'update_count_callback' => '_update_post_term_count',
        /* callback-функция для обновления счетчика $object_type */
        'query_var' => true,
    );
    register_taxonomy('my_tag', array('jobs', 'news'), $golive_category); // category
});

add_filter( 'nav_menu_css_class', function($css, $some_vars, $menu_place) {
    if ($menu_place->theme_location == 'primary-menu') {
        return array('nav-item');
    } else {
        return $css;
    }

}, 10, 4 );

add_filter( 'nav_menu_link_attributes', function($arg) {
    $arg['class'] = 'nav-link';
    return $arg;
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

add_shortcode( 'test_text' , function($arg) {
    return $arg['text'];
});