<?php
/**
 * REQUIRED FILES
 * Include required files.
 */
// CSS and JS
require get_template_directory() . '/inc/functions-scripts.php';

// Admin Menu
require get_template_directory() . '/inc/functions-admin-menu.php';

add_action( 'after_setup_theme', function() {
    add_theme_support('title-tag');
	add_theme_support( 'post-thumbnails', array( 'post' ) );
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
		return '<a href="'. get_permalink($post) . '">'._e('Читать далее','tsn').'</a>';
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
function count_post_visits() {
	if( is_single() ) {
		global $post;
		$views = get_post_meta( $post->ID, 'my_post_viewed', true );
		if( $views == '' ) {
			update_post_meta( $post->ID, 'my_post_viewed', '1' );
		} else {
			$views_no = intval( $views );
			update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
		}
	}
}
add_action( 'wp_head', 'count_post_visits' );

add_action('block_meta', function() { ?>
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
	echo _e(' Просмотров', 'tsn');'<i class="lnr lnr-eye"></i></a></li>';
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


// AJAX
add_action( 'wp_ajax_contact', 'magicAjax' );
add_action( 'wp_ajax_nopriv_contact', 'magicAjax' );
//add_action( 'wp_ajax_{action}', 'magicAjax' );

function magicAjax() {
	$status = wp_mail(get_option('admin_email'), __('Контакты'), print_r($_POST, 1));
//    $status = wp_mail('tsn3ps@gmail.com', __('Контакты'), print_r($_POST, 1));

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
			<?php get_template_part('template-parts/content/post', get_post_type());?>
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