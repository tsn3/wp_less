<?php

add_action('wp_enqueue_scripts', 'theme_stcripts');
add_action( 'wp_enqueue_scripts', 'theme_name_scripts');


//Страница контакты
add_action('admin_menu',
    function() {
        add_menu_page( 'Контакты', 'Контакты', 'manage_options', 'contact_page', 'get_contact_page' );
//        add_submenu_page( 'Email', 'Email', 'manage_options', 'contact_page', 'get_contact_page' );
    }
);
function get_contact_page() {
    // Сохранение настроек
    if ($_POST) {
        update_option('test_address', stripslashes($_POST['address']));
        update_option('test_post_address', stripslashes($_POST['post_address']));
        update_option('test_phone', stripslashes($_POST['phone']));
        update_option('test_time_job', stripslashes($_POST['time_job']));
        update_option('test_email', stripslashes($_POST['email']));
        update_option('test_text', stripslashes($_POST['text']));

        echo '<div id="message" class="updated fade"><p><strong>Успешно сохраненно</strong></p></div>';
    }
    ?>
    <div class="wrap">
        <h2><?php echo get_admin_page_title() ?></h2>

        <form method="post" novalidate="novalidate">
            <label>Область, город:
                <input type="text" name="address" value="<?php echo get_option('test_address'); ?>">
            </label><br><br>
            <label>Почтовый адрес (индекс):
                <input type="text" name="post_address" value="<?php echo get_option('test_post_address'); ?>">
            </label><br><br>
            <label>Телефон:
                <input type="text" name="phone" value="<?php echo get_option('test_phone'); ?>">
            </label><br><br>
            <label>График работы:
                <input type="text" name="time_job" value="<?php echo get_option('test_time_job'); ?>">
            </label><br><br>
            <label>Эл. почта:
                <input type="text" name="email" value="<?php echo get_option('test_email'); ?>">
            </label></label><br><br>
            <label>Нижний слоган:
                <input type="text" name="text" value="<?php echo get_option('test_text'); ?>">
            </label>

            <p class="submit">
                <input type="submit" class="button button-primary button-large" value="Save" />
            </p>
        </form>
    </div>

<?php }
//Страница контакты конец


add_action( 'after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('html5');

	add_theme_support( 'custom-logo', array(
		'height'      => 24,
		'width'       => 132,
	) );

    register_nav_menus(array(
            'primary-menu' => 'Главное меню',
            'mobile-menu' => 'Мобильное меню',
        )
    );

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




add_action( 'init', 'employee_register_post_type_init' ); // Использовать функцию только внутри хука init Добавить Сотрудника

function employee_register_post_type_init()
{
    $labels = array(
        'name' => 'Cотрудники',
        'singular_name' => 'Cотрудники', // админ панель Добавить->Функцию
        'add_new' => 'Добавить cотрудника',
        'add_new_item' => 'Добавить нового cотрудника', // заголовок тега <title>
        'edit_item' => 'Редактировать данные сотрудника',
        'new_item' => 'Новый сотрудник',
        'all_items' => 'Все сотрудник',
        'view_item' => 'Просмотр сотрудника на сайте',
        'search_items' => 'Искать сотрудника',
        'not_found' =>  'Такого сотрудника не существует!',
        'not_found_in_trash' => 'Не выбран сотрудник.',
        'menu_name' => 'Cотрудники' // ссылка в меню в админке
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

    register_post_type('employee', $args);
}




// Волшебный AJAX
add_action( 'wp_ajax_contact', 'magicAjax' );
add_action( 'wp_ajax_nopriv_contact', 'magicAjax' );
//add_action( 'wp_ajax_{action}', 'magicAjax' );

function magicAjax() {
//    $status = wp_mail(get_option('admin_email'), __('Контакты'), print_r($_POST, 1));
    $status = wp_mail('jekessss4@zeffrs.com', __('Контакты'), print_r($_POST, 1));

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
    wp_enqueue_script('function', get_template_directory_uri() . '/assets/js/function.js', array('jquery'), time(), 1);
}
