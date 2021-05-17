<?php
$popular_posts_args = array(
	'posts_per_page' => 4,
	'meta_key' => 'my_post_viewed',
	'orderby' => 'meta_value_num',
	'order'=> 'DESC'
);

$popular_posts_loop = new WP_Query( $popular_posts_args );?>
<aside class="single_sidebar_widget popular_post_widget">
	<h3 class="widget_title"><?php _e('Популярные статьи', 'tsn');  ?></h3>

	<div class="media post_item">
		<?php while( $popular_posts_loop->have_posts() ):
			$popular_posts_loop->the_post();?>
			<?php if(get_the_post_thumbnail_url()): ?>
			<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'sidebar-image' );?>" alt="<?php the_title(); ?>">
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri() ?>/assets/img/nothing-abandoned-1.jpg" alt="<?php the_title(); ?>">
		<?php endif; ?>

			<div class="media-body">

				<a href="<?php the_permalink(); ?>">
					<?php the_title('<h3>', '</h3>'); ?>
				</a>
				<p><?php the_time('F jS, Y'); ?></p>
			</div>
			<div class="mail"><?php the_post_thumbnail(); ?></div>
			<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php endwhile;
		wp_reset_query();
		?>
	</div>
</aside>