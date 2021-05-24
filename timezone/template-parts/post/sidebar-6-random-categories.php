<aside class="single_sidebar_widget post_category_widget">
	<h4 class="widget_title"><?php esc_html_e('Cлучайные 6 категорий блога', 'tsn');  ?></h4>
	<ul class="list cat-list">
		<?php
		// display 6 random categories
		$cats ='';
		$categories=get_categories();
		$rand_keys = array_rand($categories, 6);
		foreach ($rand_keys as $key) {
			$cats .= $categories[$key]->term_id .',';
		}
		wp_list_categories('title_li=0&hierarchical=0&hide_empty=0&show_count=1&include='.$cats);
		?>
	</ul>
</aside>
