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
		'name' => 'Cотрудники',
		'singular_name' => 'Cотрудники', // admin panel Add-> Function
		'add_new' => 'Добавить cотрудника',
		'add_new_item' => 'Добавить нового cотрудника', // tag header <title>
		'edit_item' => 'Редактировать данные сотрудника',
		'new_item' => 'Новый сотрудник',
		'all_items' => 'Все сотрудник',
		'view_item' => 'Просмотр сотрудника на сайте',
		'search_items' => 'Искать сотрудника',
		'not_found' =>  'Такого сотрудника не существует!',
		'not_found_in_trash' => 'Не выбран сотрудник.',
		'menu_name' => 'Cотрудники' // link of the menu in the admin panel
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
		'name' => 'Новости',
		'singular_name' => 'Новость', // admin panel Add-> Function
		'add_new' => 'Добавить новость',
		'add_new_item' => 'Добавить новую новость', // tag header <title>
		'edit_item' => 'Редактировать новость',
		'new_item' => 'Новая новость',
		'all_items' => 'Все новости',
		'view_item' => 'Просмотр новостей на сайте',
		'search_items' => 'Искать новости',
		'not_found' =>  'Новостей не найдено !!!!!',
		'not_found_in_trash' => 'В корзине нет новостей.',
		'menu_name' => 'Новости' // link in the menu in the admin panel
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
			'name'              => 'Категория новостей',
			'singular_name'     => 'Категория новостей',
			'search_items'      => 'Найти новости',
			'all_items'         => 'Все новости',
			'view_item '        => 'Смотреть новости',
			'parent_item'       => 'Родительская новость',
			'parent_item_colon' => 'Родительский новость:',
			'edit_item'         => 'Изменить новость',
			'update_item'       => 'Обновить новость',
			'add_new_item'      => 'Добавить новость',
			'new_item_name'     => 'Новое имя новости',
			'menu_name'         => 'Категория новостей'

		),
		'show_ui'       => true,
		'query_var'     => true,
	));

}

//Contact page
//Adding 6 fields to the right of the feedback form on the Contacts page, filled in the admin part
add_action('admin_menu', function() {
	add_menu_page( 'Контакты', 'Контакты', 'manage_options', 'contact_page', 'get_contact_page' );
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
