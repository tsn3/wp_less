<!-- ? Employee Start -->
<?php
$employes = new WP_Query ('post_type=employee&posts_per_page=3&orderby=rand');
?>
<?php if ($employes->have_posts() ){ ?>
	<section class="new-product-area section-padding30">
		<div class="container">
			<!-- Section tittle -->
			<div class="row">
				<div class="col-xl-12">
					<div class="section-tittle mb-70">
						<h2><?php esc_html_e('Наши сотрудники', 'tsn');?></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<?php while ($employes->have_posts() ) {
					$employes->the_post(); ?>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="single-new-pro mb-30 text-center">
							<div class="product-img">
								<?php if (get_the_post_thumbnail()) { the_post_thumbnail('employee_image');
								} else { ?>
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/Anonymous.svg" alt="image not added">
								<?php } ?>
							</div>
							<div class="product-caption">
								<h3><?php the_title(); ?></h3>
							</div>
						</div>
					</div>
				<?php } wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
	<?php
} ?>
<!--  Employee End -->