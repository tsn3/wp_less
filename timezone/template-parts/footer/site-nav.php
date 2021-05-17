<div class="footer-tittle">
	<?php wp_nav_menu( array(
		'theme_location' => 'footer-menu',
		'container'       => 'div',
		'menu_id'         => 'navigation',
		'menu_class'      => 'single-footer-caption mb-50',
		'depth' => 1,
		'walker' => new my_menu_class()
	) ); ?>
</div>
