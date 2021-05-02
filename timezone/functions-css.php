<?php

// Add custom post types
// случайных сотрудника-- Преобразовать в список сотрудников. Заголовок - Наши сотрудники,
// и отображено должно быть 3 случайных сотрудника-> Фото(размер должен соответствовать
// размеру ячейки) и Фио сотрудника
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

add_image_size('post_preview', 555, 280, 1);
add_image_size('post_image', 750, 375, 1);
add_image_size('avatar', 361, 489, 1);


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


//Страница контакты
// (6 полей справа от формы обратной связи)
add_action('admin_menu',
    function() {
        add_menu_page( 'Контакты', 'Контакты', 'manage_options', 'contact_page', 'get_contact_page' );
    }
);

function get_contact_page() {
    // Сохранение настроек
    if ($_POST) {
        update_option('tsn_address', stripslashes($_POST['address']));
        update_option('tsn_post_address', stripslashes($_POST['post_address']));
        update_option('tsn_phone', stripslashes($_POST['phone']));
        update_option('tsn_time_job', stripslashes($_POST['time_job']));
        update_option('tsn_email', stripslashes($_POST['email']));
        update_option('tsn_text', stripslashes($_POST['text']));

        echo '<div id="message" class="updated fade"><p><strong>Успешно сохраненно</strong></p></div>';
    }
    ?>
    <div class="wrap">
        <h2><?php echo get_admin_page_title() ?></h2>

        <form method="post" novalidate="novalidate">
            <label><?php _e('Область, город:', 'tsn'); ?>
                <input type="text" name="address" value="<?php echo get_option('tsn_address'); ?>">
            </label><br><br>
            <label><?php _e('Почтовый адрес (индекс):', 'tsn'); ?>
                <input type="text" name="post_address" value="<?php echo get_option('tsn_post_address'); ?>">
            </label><br><br>
            <label><?php _e('Телефон:', 'tsn'); ?>
                <input type="text" name="phone" value="<?php echo get_option('tsn_phone'); ?>">
            </label><br><br>
            <label><?php _e('График работы:', 'tsn'); ?>
                <input type="text" name="time_job" value="<?php echo get_option('tsn_time_job'); ?>">
            </label><br><br>
            <label><?php _e('Эл. почта:', 'tsn'); ?>
                <input type="text" name="email" value="<?php echo get_option('tsn_email'); ?>">
            </label><br><br>
            <label><?php _e('Нижний слоган:', 'tsn'); ?>
                <input type="text" name="text" value="<?php echo get_option('tsn_text'); ?>">
            </label>

            <p class="submit">
                <input type="submit" class="button button-primary button-large" value="Save" />
            </p>
        </form>
    </div>
<?php }
//Страница контакты конец