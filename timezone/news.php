<?php /* Template name: News */ ?>
<?php get_header(); ?>

<!--? Hero Area Start-->
<div class="slider-area ">
	<div class="single-slider slider-height2 d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="hero-cap text-center">
						<h2><?php _e( 'Новости' , 'rus')?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--? Hero Area End-->
<!--================Blog Area =================-->
<section class="blog_area section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0">
				<div class="blog_left_sidebar">

					<?php if(have_posts()): ?>
						<?php while(have_posts()): ?>
							<?php the_post(); ?>
							<?php get_template_part('content/post', get_post_type());?>
						<?php endwhile; ?>
					<?php else : ?>
						<hr><?php _e('Ничего не найденно.', 'artjoker')?><hr>
					<?php endif; ?>


					<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Previous">
									<i class="ti-angle-left"></i>
								</a>
							</li>
							<li class="page-item">
								<a href="#" class="page-link">1</a>
							</li>
							<li class="page-item active">
								<a href="#" class="page-link">2</a>
							</li>
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Next">
									<i class="ti-angle-right"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-lg-4">
				<?php get_sidebar(); ?>

			</div>
		</div>
	</div>
</section>
<!--================Blog Area =================-->
</main>


<?php get_footer(); ?>