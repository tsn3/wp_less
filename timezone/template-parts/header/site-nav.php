<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Tsn
 * @since Tsn 1.0
 */

?>
<!-- Main-menu -->
<div class="main-menu d-none d-lg-block">
	<?php wp_nav_menu( array(
		'theme_location' => 'primary-menu',
		'container'       => 'div',
		'menu_id'         => 'navigation',
		'menu_class'      => 'main-menu d-none d-lg-block',
		'depth' => 1,
		'walker' => new my_menu_class()
	) ); ?>
</div>
