<?php get_header(); ?>
    <main>
        <!--? Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php the_archive_title(); ?></h2>
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

                                <!-- Pagination -->
	                            <?php the_posts_pagination(); ?>

                            <?php else : ?>
                                <hr><?php _e('Ничего не найдено.', 'tsn')?><hr>
                            <?php endif; ?>
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