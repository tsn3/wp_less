<?php get_header(); ?>
    <main>
        <!--? Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php the_title(); ?></h2>
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
		                    <?php if (have_posts() ){while (have_posts() ){ the_post(); ?>
                                    <article <?php post_class('blog_item'); ?> id="post-<?php the_ID(); ?>">
                                        <div class="blog_item_img">
						                    <?php if (get_the_post_thumbnail()) { ?>
                                                <img class="card-img rounded-0" src="<?php the_post_thumbnail_url('blog-size'); ?>" alt="<?php the_title(); ?>">
							                    <?php
						                    } else { ?>
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/Anonymous.svg" alt="image not added">
							                    <?php
						                    } ?>

                                            <a href="<?php the_permalink(); ?>" class="blog_item_date">
                                                <h3><?php the_time('F'); ?></h3>
                                                <p><?php the_time('jS'); ?></p>
                                            </a>
                                        </div>

                                        <div class="blog_details">
                                            <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                                <h2><?php the_title(); ?></h2>
                                            </a>
                                            <p><?php the_excerpt(); ?></p>

                                            <ul class="blog-info-link mt-3 mb-4"">
                                                <li>
                                                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                                                        <i class="fa fa-user">
                                                        </i><?php echo get_the_author(); ?>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-eye"></i>
                                                        <?php
                                                        do_action('get_views');
                                                        $post_id = get_the_ID();
                                                        $views = (int)get_post_meta($post_id, 'views', true);
                                                        echo $views . ' ' . _e('Количество просмотров', 'tsn'); ?>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-comments">
                                                        </i><?php echo get_comments_number_text(); ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
			                    <?php }  //конец while ?>

                                <!-- Pagination -->
			                    <?php the_posts_pagination(); ?>

			                <?php } //конец if
		                    else {
			                    echo "<h2><?php _e('Ничего не найденно.', 'tsn')?></h2>";
		                    }
		                    ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
	                        <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </main>
<?php get_footer(); ?>