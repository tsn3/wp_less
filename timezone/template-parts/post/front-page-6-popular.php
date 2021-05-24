<!--? Popular Items Start -->
<div class="popular-items section-padding30">
    <div class="container">
        <!-- Section tittle -->
        <div class="row justify-content-center">

            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-70 text-center">
                    <h2><?php esc_html_e('Популярное', 'tsn'); ?></h2>
                </div>
            </div>
        </div>
		<?php get_template_part('template-parts/post/front-page-3-popular-news');?>
		<?php get_template_part('template-parts/post/front-page-3-popular-post');?>
    </div>
    <!-- Button -->
    <div class="row justify-content-center">
        <div class="room-btn pt-70">
            <a href=<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn view-btn1">
			<?php esc_html_e('Посмотреть больше сообщений' , 'tsn'); ?>
            </a>
        </div>
    </div>
</div>
<!-- Popular Items End -->