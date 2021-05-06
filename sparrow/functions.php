<?php
add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_footer', 'theme_stcripts');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action( 'widgets_init', 'register_my_widgets' );

add_action( 'init', 'register_post_types' );
function register_post_types(){
    register_post_type( 'portfolio', [
        'label'  => null,
        'labels' => [
            'name'               => 'Портфолио', // основное название для типа записи
            'singular_name'      => 'Портфолио', // название для одной записи этого типа
            'add_new'            => 'Добавить работу', // для добавления новой записи
            'add_new_item'       => 'Добавление работы', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование работы', // для редактирования типа записи
            'new_item'           => 'Новая работа', // текст новой записи
            'view_item'          => 'Смотреть работу', // для просмотра записи этого типа.
            'search_items'       => 'Искать работу в портфолио', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Портфолио', // название меню
        ],
        'description'         => 'Это наши работы в портфолио',
        'public'              => true,
        'publicly_queryable'  => true, // зависит от public
        'show_ui'             =>  true, // зависит от public
        'show_in_nav_menus'   =>  true, // зависит от public
        'show_in_menu'        => true, // показывать ли в меню адмнки
        'show_in_admin_bar'   => true, // зависит от show_in_menu
        'show_in_rest'        => true, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => 4,
        'menu_icon'           => 'dashicons-format-gallery',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'author', 'thumbnail',
            'excerpt' ], // 'title',
        //'editor','author','thumbnail','excerpt','trackbacks',
        //'custom-fields','comments','revisions','page-attributes',
        //'post-formats'
        'taxonomies'          => ['skills'],
        'has_archive'         => true,
        'rewrite'             => true,
        'query_var'           => false,
    ] );
}

// хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){
    register_taxonomy( 'skills', [ 'portfolio' ], [
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => [
            'name'              => 'Навыки',
            'singular_name'     => 'Навыки',
            'search_items'      => 'Найти навык',
            'all_items'         => 'Все навыки',
            'view_item '        => 'Смотреть навыки',
            'parent_item'       => 'Родительский навык',
            'parent_item_colon' => 'Родительский навык:',
            'edit_item'         => 'Изменить навык',
            'update_item'       => 'Обновить навык',
            'add_new_item'      => 'Добавить новый навык',
            'new_item_name'     => 'Новое имя навыка',
            'menu_name'         => 'Навыки',
        ],
        'description'           => 'Навыки, которые использовались в работе над проектом', // описание таксономии
        'public'                => true,
        'publicly_queryable'    => null, // равен аргументу public
        'hierarchical'          => false,
        'rewrite'               => true,
    ] );
}


add_action( 'init', 'skills_for_portfolio' );
function skills_for_portfolio(){
    register_taxonomy_for_object_type( 'skills', 'portfolio');
}

function register_my_widgets()
{
    register_sidebar( array(
        'name'          => 'Left Sidebar',
        'id'            => "left_sidebar",
        'description'   => 'Cайдбар расположен на странице Блог',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => "</h5>\n"
    ) );
//    register_sidebar( array(
//        'name'          => 'Top Sidebar',
//        'id'            => "top_sidebar",
//        'description'   => 'Верхний сайдбар',
//        'before_widget' => '<div class="widget %2$s">',
//        'after_widget'  => "</div>\n",
//        'before_title'  => '<h5 class="widgettitle">',
//        'after_title'   => "</h5>\n"
//    ) );
}


function theme_register_nav_menu()
{
    register_nav_menu('top', 'menu in HEADER');
    register_nav_menu('footer', 'menu in FOOTER');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails', array ('post', 'portfolio') );
    add_theme_support( 'post-formats', array( 'aside', 'video', 'gallery', 'chat' ) );
    add_image_size( 'post-thumb', 1300, 500, true );
    add_filter( 'excerpt_more', 'new_excerpt_more' );
    function new_excerpt_more( $more ){
        global $post;
        return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
    }
    // удаляет H2 из шаблона пагинации
    add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
    function my_navigation_template( $template, $class ){
        /*
        Вид базового шаблона:
        <nav class="navigation %1$s" role="navigation">
            <h2 class="screen-reader-text">%2$s</h2>
            <div class="nav-links">%3$s</div>
        </nav>
        */

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
}
// CSS
function theme_styles()
{
    wp_enqueue_style('styles', get_template_directory_uri());
    wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
}
//JS
function theme_stcripts()
{

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', ['jquery'], null, true);
    wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', ['jquery'], null, true);
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js', ['jquery'], null, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', ['jquery'], null, true);
}

add_action( 'my_autors', 'action_function' );

function action_function() {
    echo 'Я тут шорткод!';
}

