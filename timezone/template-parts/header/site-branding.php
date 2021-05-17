<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Tsn
 * @since Tsn 1.0
 */

?>

<div class="logo">
	<?php
	$theme_dir = get_template_directory_uri().'/';
	$image_id = get_theme_mod( 'custom_logo' );
	if ($image_id) {
		$image_logo = wp_get_attachment_image_src($image_id, 'full');
		$image_logo = array_shift($image_logo);
	} else {
		$image_logo = $theme_dir . 'assets/img/logo/logo.png';
	}
	?>

	<?php if (is_front_page()): ?>
		<span class="navbar-brand logo_h active">
                        <img src="<?php echo $image_logo; ?>" alt="<?php bloginfo('description'); ?>">
                    </span>
	<?php else: ?>
		<a class="navbar-brand logo_h" href="<?php echo home_url();?>">
			<img src="<?php echo $image_logo; ?>" alt="<?php bloginfo('description'); ?>">
		</a>
	<?php endif; ?>
</div>
