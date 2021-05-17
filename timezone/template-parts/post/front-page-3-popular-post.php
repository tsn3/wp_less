<?php
$popular = new WP_Query ('post_type=(post)&posts_per_page=3&orderby=rand');
?>
<?php if ($popular) { ?>
	<div class="row">
		<?php while( $popular->have_posts() ){ $popular->the_post(); ?>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
				<div class="single-popular-items mb-50 text-center <?php echo $post->post_type; ?>">
					<div class="popular-img">
						<?php if (get_the_post_thumbnail()) { the_post_thumbnail('popular-image');
						} else { ?>
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/Anonymous.svg" alt="image not added">
							<?php
						} ?>
						<div class="img-cap">
							<a href="<?php the_permalink(); ?>"><?php _e('Подробнее', 'tsn'); ?></a>
						</div>
					</div>
					<div class="popular-caption">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					</div>
				</div>
			</div>
			<?php
		} wp_reset_postdata();
		?>
		<!-- while END -->
	</div>

	<?php
}
?>
<!-- if END -->