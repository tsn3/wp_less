<?php get_header(); ?>

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1><?php single_post_title(); ?></h1>
                    <nav class="d-flex align-items-center">
                        <?php $test = 12; ?>
                        <?php set_query_var('test', $test); ?>
                        <?php get_template_part('breadcrums'); ?>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Social Life</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Politics</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Be a part of politics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="img/blog/cat-post/cat-post-1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5>Food</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>Let the food be finished</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <?php if (have_posts()): ?>
                            <?php while(have_posts()): ?>
                                <?php the_post(); ?>
                            <?php get_template_part('content/post', get_post_type());?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <hr><?php _e('Ничего не найденно.', 'artjoker')?><hr>
                        <?php endif; ?>

                        <?php the_posts_pagination(array('screen_reader_text' => ' ' )); ?>
<!--                        <nav class="blog-pagination justify-content-center d-flex">-->
<!--                            <ul class="pagination">-->
<!--                                <li class="page-item">-->
<!--                                    <a href="#" class="page-link" aria-label="Previous">-->
<!--                                        <span aria-hidden="true">-->
<!--                                            <span class="lnr lnr-chevron-left"></span>-->
<!--                                        </span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li class="page-item"><a href="#" class="page-link">01</a></li>-->
<!--                                <li class="page-item active"><a href="#" class="page-link">02</a></li>-->
<!--                                <li class="page-item"><a href="#" class="page-link">03</a></li>-->
<!--                                <li class="page-item"><a href="#" class="page-link">04</a></li>-->
<!--                                <li class="page-item"><a href="#" class="page-link">09</a></li>-->
<!--                                <li class="page-item">-->
<!--                                    <a href="#" class="page-link" aria-label="Next">-->
<!--                                        <span aria-hidden="true">-->
<!--                                            <span class="lnr lnr-chevron-right"></span>-->
<!--                                        </span>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </nav>-->
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

<?php get_footer(); ?>