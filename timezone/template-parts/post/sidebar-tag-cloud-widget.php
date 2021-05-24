<aside class="single_sidebar_widget tag_cloud_widget">
	<h4 class="widget_title"><?php esc_html_e('Облако популярных тегов', 'tsn');?></h4>
	<ul class="list">
		<li>
			<?php wp_tag_cloud('smallest=15&largest=40&number=20&orderby=count'); ?>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	</ul>
</aside>
