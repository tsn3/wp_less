<?php get_header(); ?>

    <main>
        <!--? Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Blog</h2>
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
                            <?php if (have_posts()): ?>
                                <?php while(have_posts()): ?>
                                    <?php the_post(); ?>
                                    <?php get_template_part('content/post', get_post_type());?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <hr><?php _e('Ничего не найденно.', 'tsn')?><hr>
                            <?php endif; ?>
                            <div id="my-custom-wrapper"></div>

                            <div id="my-custom-id">Тыц</div>

<!--                            <article class="blog_item">-->
<!--                                <div class="blog_item_img">-->
<!--                                    <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">-->
<!--                                    <a href="#" class="blog_item_date">-->
<!--                                        <h3>15</h3>-->
<!--                                        <p>Jan</p>-->
<!--                                    </a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="blog_details">-->
<!--                                    <a class="d-inline-block" href="single-blog.html">-->
<!--                                        <h2>Google inks pact for new 35-storey office</h2>-->
<!--                                    </a>-->
<!--                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is that-->
<!--                                        he earth it first without heaven in place seed it second morning saying.</p>-->
<!--                                    <ul class="blog-info-link">-->
<!--                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>-->
<!--                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </article>-->
<!---->
<!--                            <article class="blog_item">-->
<!--                                <div class="blog_item_img">-->
<!--                                    <img class="card-img rounded-0" src="assets/img/blog/single_blog_2.png" alt="">-->
<!--                                    <a href="#" class="blog_item_date">-->
<!--                                        <h3>15</h3>-->
<!--                                        <p>Jan</p>-->
<!--                                    </a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="blog_details">-->
<!--                                    <a class="d-inline-block" href="single-blog.html">-->
<!--                                        <h2>Google inks pact for new 35-storey office</h2>-->
<!--                                    </a>-->
<!--                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is that-->
<!--                                        he earth it first without heaven in place seed it second morning saying.</p>-->
<!--                                    <ul class="blog-info-link">-->
<!--                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>-->
<!--                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </article>-->
<!---->
<!--                            <article class="blog_item">-->
<!--                                <div class="blog_item_img">-->
<!--                                    <img class="card-img rounded-0" src="assets/img/blog/single_blog_3.png" alt="">-->
<!--                                    <a href="#" class="blog_item_date">-->
<!--                                        <h3>15</h3>-->
<!--                                        <p>Jan</p>-->
<!--                                    </a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="blog_details">-->
<!--                                    <a class="d-inline-block" href="single-blog.html">-->
<!--                                        <h2>Google inks pact for new 35-storey office</h2>-->
<!--                                    </a>-->
<!--                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is that-->
<!--                                        he earth it first without heaven in place seed it second morning saying.</p>-->
<!--                                    <ul class="blog-info-link">-->
<!--                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>-->
<!--                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </article>-->
<!---->
<!--                            <article class="blog_item">-->
<!--                                <div class="blog_item_img">-->
<!--                                    <img class="card-img rounded-0" src="assets/img/blog/single_blog_4.png" alt="">-->
<!--                                    <a href="#" class="blog_item_date">-->
<!--                                        <h3>15</h3>-->
<!--                                        <p>Jan</p>-->
<!--                                    </a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="blog_details">-->
<!--                                    <a class="d-inline-block" href="single-blog.html">-->
<!--                                        <h2>Google inks pact for new 35-storey office</h2>-->
<!--                                    </a>-->
<!--                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is that-->
<!--                                        he earth it first without heaven in place seed it second morning saying.</p>-->
<!--                                    <ul class="blog-info-link">-->
<!--                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>-->
<!--                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </article>-->
<!---->
<!--                            <article class="blog_item">-->
<!--                                <div class="blog_item_img">-->
<!--                                    <img class="card-img rounded-0" src="assets/img/blog/single_blog_5.png" alt="">-->
<!--                                    <a href="#" class="blog_item_date">-->
<!--                                        <h3>15</h3>-->
<!--                                        <p>Jan</p>-->
<!--                                    </a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="blog_details">-->
<!--                                    <a class="d-inline-block" href="single-blog.html">-->
<!--                                        <h2>Google inks pact for new 35-storey office</h2>-->
<!--                                    </a>-->
<!--                                    <p>That dominion stars lights dominion divide years for fourth have don't stars is that-->
<!--                                        he earth it first without heaven in place seed it second morning saying.</p>-->
<!--                                    <ul class="blog-info-link">-->
<!--                                        <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>-->
<!--                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </article>-->

                            <?php the_posts_pagination(array('screen_reader_text' => ' ' )); ?>
<!---->
<!---->
<!--                            <nav class="blog-pagination justify-content-center d-flex">-->
<!--                                <ul class="pagination">-->
<!--                                    <li class="page-item">-->
<!--                                        <a href="#" class="page-link" aria-label="Previous">-->
<!--                                            <i class="ti-angle-left"></i>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                    <li class="page-item">-->
<!--                                        <a href="#" class="page-link">1</a>-->
<!--                                    </li>-->
<!--                                    <li class="page-item active">-->
<!--                                        <a href="#" class="page-link">2</a>-->
<!--                                    </li>-->
<!--                                    <li class="page-item">-->
<!--                                        <a href="#" class="page-link" aria-label="Next">-->
<!--                                            <i class="ti-angle-right"></i>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </nav>-->
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