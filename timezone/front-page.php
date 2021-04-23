<?php get_header(); ?>
<main>
    <!--? slider Area Start -->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center slide-bg">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms"><?php echo $slide['title'];?></h1>
                                <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms"><?php echo $slide['content'];?></p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                    <a href="industries.html" class="btn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
<!--                                <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/hero/watch.png" alt="" class=" heartbeat">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            <div class="single-slider slider-height d-flex align-items-center slide-bg">-->
<!--                <div class="container">-->
<!--                    <div class="row justify-content-between align-items-center">-->
<!--                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">-->
<!--                            <div class="hero__caption">-->
<!--                                <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Select Your New Perfect Style</h1>-->
<!--                                <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat is aute irure.</p>-->
<!--                                 Hero-btn -->
<!--                                <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">-->
<!--                                    <a href="industries.html" class="btn hero-btn">Shop Now</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">-->
<!--                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">-->
<!--                                <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/hero/watch.png" alt="" class=" heartbeat">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center slide-bg">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms"><?php echo $slide['title'];?></h1>
                                <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms"><?php echo $slide['content'];?></p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                    <a href="industries.html" class="btn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img class="img-fluid" src="<?php echo $slide['image'];?>" alt="<?php echo esc_attr($slide['title']);?>">

                                <!--                                <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/hero/watch.png" alt="" class=" heartbeat">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- ? New Product Start -->
    <section class="new-product-area section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle mb-70">
                        <h2>Наши сотрудники</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/new_product1.png" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <?php

                            $arg = array(
                                'post_type' => array('employee'),
                                'posts_per_page' => -1
                            );

                            $employee = new WP_Query($arg);

                            ?>
<!---->
<!--                            --><?php //if ($employee->have_posts()): ?>
<!--                                --><?php //while($employee->have_posts()): ?>
<!--                                    --><?php //$employee->the_post(); ?>
<!--                                    --><?php //the_title(); ?>
<!--                                    --><?php //the_excerpt(); ?>
<!--                                --><?php //endwhile; ?>
<!--                            --><?php //else : ?>
<!--                                <hr>--><?php //_e('Ничего не найденно.', 'tsn')?><!--<hr>-->
<!--                            --><?php //endif; ?>
<!---->
<!--                            --><?php //wp_reset_postdata(); ?>
<!--                            <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/gallery/new_product2.png" alt="">-->
                        </div>
                        <div class="product-caption">
                            <?php get_gallery(4); ?>

                            <h3><a href="product_details.html"><?php if ($employee->have_posts()): ?>
                                        <?php while($employee->have_posts()): ?>
                                            <?php $employee->the_post(); ?>
                                            <?php the_title(); ?>
                                            <?php the_excerpt(); ?>
                                        <?php endwhile; ?>
                                    <?php else : ?>
                                        <hr><?php _e('Ничего не найденно.', 'tsn')?><hr>
                                    <?php endif; ?>

                                    <?php wp_reset_postdata(); ?></a></h3>
<!--                            <span>$ 45,743</span>-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/new_product3.png" alt="">
                        </div>
                        <div class="product-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  New Product End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area">
        <div class="container-fluid p-0 fix">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery1.png);"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>assets/img/gallery/gallery2.png);"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>assets/img/gallery/gallery3.png);"></div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>assets/img/gallery/gallery4.png);"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
    <!--? Popular Items Start -->
    <div class="popular-items section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-70 text-center">
                        <h2><?php _e('Популярное', 'tsn')?></h2>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/popular1.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/popular2.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/popular3.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/popular4.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/popular5.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/popular6.png" alt="">
                            <div class="img-cap">
                                <span>Add to cart</span>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>
                            <span>$ 45,743</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="row justify-content-center">
                <div class="room-btn pt-70">
                    <a href="catagori.html" class="btn view-btn1">View More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Items End -->

    <!--? Shop Method Start-->
    <div class="shop-method-area">
        <div class="container">
            <div class="method-wrapper">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6><?php _e('Free Shipping Method', 'tsn')?></h6>
                            <p><?php _e('aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.', 'tsn')?></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6><?php _e('Secure Payment System', 'tsn')?></h6>
                            <p><?php _e('aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.', 'tsn')?></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6><?php _e('Secure Payment System', 'tsn')?></h6>
                            <p><?php _e('aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.', 'tsn')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Method End-->
</main>
<?php get_footer(); ?>
