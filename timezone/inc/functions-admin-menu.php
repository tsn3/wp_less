<?php

//image_size
add_image_size('employee_image', 361, 489, 1);
add_image_size( 'popular-image', 361, 380, 1);
add_image_size( 'sidebar-image', 40, 40, 1);
add_image_size('post_image', 750, 375, 1);

// Adding a list of employees, three displays at random on the Front-page
add_action( 'init', 'employee_register_post_type_init' );
// Use function only inside init hook Add Employee

function employee_register_post_type_init()
{
	$labels = array(
		'name' => __('Cотрудники', 'tsn'),
		'singular_name' => __('Cотрудники', 'tsn'), // admin panel Add-> Function
		'add_new' => __('Добавить cотрудника', 'tsn'),
		'add_new_item' => __('Добавить нового cотрудника', 'tsn'),// tag header <title>
		'edit_item' => __('Редактировать данные сотрудника', 'tsn'),
		'new_item' => __('Новый сотрудник', 'tsn'),
		'all_items' => __('Все сотрудники', 'tsn'),
		'view_item' => __('Просмотр сотрудника на сайте', 'tsn'),
		'search_items' => __('Искать сотрудника', 'tsn'),
		'not_found' => __('Такого сотрудника не существует!', 'tsn'),
		'not_found_in_trash' => __('Не выбран сотрудник.', 'tsn'),
		'menu_name' => __('Cотрудники', 'tsn') // link of the menu in the admin panel
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // show the interface in the admin area
		'has_archive' => true,
		'menu_icon' => 'dashicons-businessman', // menu icon
		'menu_position' => 10, // order in the menu
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
	);

	register_post_type('employee', $args);
}

add_action( 'init', 'news_register_post_type_init' );
// Use the function only inside the init hook
function news_register_post_type_init()
{
	$labels = array(
		'name' => __('Новости', 'tsn'),
		'singular_name' => __('Новость', 'tsn'), // admin panel Add-> Function
		'add_new' => __('Добавить новость', 'tsn'),
		'add_new_item' => __('Добавить новую новость', 'tsn'), // tag header <title>
		'edit_item' => __('Редактировать новость', 'tsn'),
		'new_item' => __('Новая новость', 'tsn'),
		'all_items' => __('Все новости', 'tsn'),
		'view_item' => __('Просмотр новостей на сайте', 'tsn'),
		'search_items' => __('Искать новости', 'tsn'),
		'not_found' =>  __('Новостей не найдено !!!!!', 'tsn'),
		'not_found_in_trash' => __('В корзине нет новостей.', 'tsn'),
		'menu_name' => __('Новости', 'tsn') // link in the menu in the admin panel
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // show the interface in the admin area
		'has_archive' => true,
		'menu_icon' => 'dashicons-format-aside', // menu icon
		'menu_position' => 20, // order in the menu
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
	);

	register_post_type('news', $args);

	register_taxonomy('category_news', array('news'), array(
		'hierarchical'  => true,
		'labels'        => array(
			'name'              => __('Категория новостей', 'tsn'),
			'singular_name'     => __('Категория новостей', 'tsn'),
			'search_items'      => __('Найти новости', 'tsn'),
			'all_items'         => __('Все новости', 'tsn'),
			'view_item '        => __('Смотреть новости', 'tsn'),
			'parent_item'       => __('Родительская новость', 'tsn'),
			'parent_item_colon' => __('Родительская новость:', 'tsn'),
			'edit_item'         => __('Изменить новость', 'tsn'),
			'update_item'       => __('Обновить новость', 'tsn'),
			'add_new_item'      => __('Добавить новость', 'tsn'),
			'new_item_name'     => __('Новое имя новости', 'tsn'),
			'menu_name'         => __('Категория новостей', 'tsn')

		),
		'show_ui'       => true,
		'query_var'     => true,
	));

}

//Contact page
//Adding 6 fields to the right of the feedback form on the Contacts page, filled in the admin part
add_action('admin_menu', function() {
	add_menu_page( __('Контакты', 'tsn'), __('Контакты', 'tsn'),'manage_options', 'contact_page', 'get_contact_page' );
}
);

function get_contact_page() {
	//Saving settings
	if ($_POST) {
		update_option('tsn_address', stripslashes($_POST['address']));
		update_option('tsn_post_address', stripslashes($_POST['post_address']));
		update_option('tsn_phone', stripslashes($_POST['phone']));
		update_option('tsn_time_job', stripslashes($_POST['time_job']));
		update_option('tsn_email', stripslashes($_POST['email']));
		update_option('tsn_text', stripslashes($_POST['text']));
		echo '<div id="message" class="updated fade"><p><strong>'._e('Успешно сохраненно', 'tsn');'.</strong></p></div>';
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
				<input type="submit" class="button button-primary button-large" value="<?php _e('Сохранить', 'tsn'); ?>" />
			</p>

		</form>
	</div>
<?php }
//Contact page end
