<?php get_header(); ?>
<main>
    <!--? slider Area Start -->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <?php
            $slider = CFS()->get('slider_loop');
            ?>
            <?php foreach ($slider as $slide) : ?>
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".8s" data-duration="20ms"><?php echo $slide['title'];?></h1>
                                    <p data-animation="fadeInLeft" data-delay=".8s" data-duration="20ms"><?php echo $slide['content'];?></p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="30ms">
                                        <span class="btn hero-btn">Кастомный слайдер</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".3s">
                                    <img class="img-fluid" src="<?php echo $slide['image'];?>" alt="<?php echo esc_attr($slide['title']);?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- Single Slider -->
        </div>
    </div>
    <!-- slider Area End-->
    <!-- ? New Product Start -->
    <section class="new-product-area section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">

<!--                <div class="col-lg-8">-->
<!--                    <div class="blog_left_sidebar">-->
<!--                        --><?php //if (have_posts()): ?>
<!--                            --><?php //while(have_posts()): ?>
<!--                                --><?php //the_post(); ?>
<!--                                <article id="post---><?php //the_ID(); ?><!--" --><?php //post_class('row blog_item'); ?><!-->-->
<!--                                    <div class="col-md-3">-->
<!--                                        <div class="blog_info text-right">-->
<!--                                            <div class="post_tag">-->
<!--                                                --><?php
//                                                foreach( get_the_category() as $employee ) {
//                                                    echo '<a href="' . get_category_link($employee->term_id ) . '">' . $employee->name . '</a>&nbsp;';
//                                                }
//                                                ?>
<!--                                            </div>-->
<!--                                            <ul class="blog_meta list">-->
<!--                                                --><?php //do_action('block_meta'); ?>
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--<!--                                    <div class="col-md-9">-->-->
<!--<!--                                        <div class="blog_post">-->-->
<!--<!--                                            -->--><?php ////if(get_the_post_thumbnail_url()): ?>
<!--<!--                                                <img src="-->--><?php ////echo get_the_post_thumbnail_url( get_the_ID(), 'post_preview' );?><!--<!--" alt="-->--><?php ////the_title(); ?><!--<!--">-->-->
<!--<!--                                            -->--><?php ////else: ?>
<!--<!--                                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="-->--><?php ////the_title(); ?><!--<!--">-->-->
<!--<!--                                            -->--><?php ////endif; ?>
<!--<!---->-->
<!--<!--                                            <div class="blog_details">-->-->
<!--<!--                                                <a href="-->--><?php ////the_permalink(); ?><!--<!--">-->-->
<!--<!--                                                    -->--><?php ////the_title('<h2>', '</h2>'); ?>
<!--<!--                                                </a>-->-->
<!--<!--                                                <p>-->--><?php ////the_content(); ?><!--<!--</p>-->-->
<!--<!--                                            </div>-->-->
<!--<!--                                        </div>-->-->
<!--<!--                                    </div>-->-->
<!--                                </article>-->
<!--                            --><?php //endwhile; ?>
<!--                        --><?php //else : ?>
<!--                            <hr>--><?php //_e('Ничего не найденно.', 'artjoker')?><!--<hr>-->
<!--                        --><?php //endif; ?>
<!--                    </div>-->
<!--                </div>-->

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
                                            <?php $employee->the_post_thumbnail_url(); ?>
<!--                                            $attachments = get_children(array('post_parent' => $post->ID,-->
<!--                                            'post_status' => 'inherit',-->
<!--                                            'post_type' => 'attachment',-->
<!--                                            'post_mime_type' => 'image',-->
<!--                                            'order' => 'ASC',-->
<!--                                            'orderby' => 'menu_order ID'));-->
<!---->
<!--                                            foreach($attachments as $att_id => $attachment) {-->
<!--                                            $full_img_url = wp_get_attachment_url($attachment->ID);-->
<!--                                            // Your Code here-->
<!--                                            }-->
                                            <?php if($employee->the_post_thumbnail_url()): ?>
                                                <img src="<?php echo $employee->get_the_post_thumbnail_url( get_the_ID(), 'post_preview' );?>" alt="<?php the_title(); ?>">
                                            <?php else: ?>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="<?php the_title(); ?>">
                                            <?php endif; ?>
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
<!--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">-->
<!--                    <div class="single-new-pro mb-30 text-center">-->
<!--                        <div class="product-img">-->
<!--                            <img src="--><?php //echo get_the_post_thumbnail_url( get_the_ID(), 'posts_per_page' );?><!--" alt="">-->
<!--                        </div>-->
<!--                        <div class="product-caption">-->
<!--                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>-->
<!--                            <span>$ 45,743</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">-->
<!--                    <div class="single-new-pro mb-30 text-center">-->
<!--                        <div class="product-img">-->
<!--                            <img src="--><?php //echo get_the_post_thumbnail_url( get_the_ID(), 'posts_per_page' );?><!--" alt="--><?php //the_title(); ?><!--">-->
<!--                        </div>-->
<!--                        <div class="product-caption">-->
<!--                            <h3><a href="product_details.html">Thermo Ball Etip Gloves</a></h3>-->
<!--                            <span>$ 45,743</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">-->
<!--                    <div class="single-new-pro mb-30 text-center">-->
<!--                        --><?php //if(get_the_post_thumbnail_url()): ?>
<!--                            <img src="--><?php //echo get_the_post_thumbnail_url( get_the_ID(), 'posts_per_page' );?><!--" alt="--><?php //the_title(); ?><!--">-->
<!--                        --><?php //else: ?>
<!--                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="--><?php //the_title(); ?><!--">-->
<!--                        --><?php //endif; ?>
<!---->
<!--                        <div class="blog_details">-->
<!--                            <a href="--><?php //the_permalink(); ?><!--">-->
<!--                                --><?php //the_title('<h2>', '</h2>'); ?>
<!--                            </a>-->
<!--                            <p>--><?php //the_excerpt(); ?><!--</p>-->
<!--                            <!--                                                <p>-->--><?php ////the_content(); ?><!--<!--</p>-->-->
<!--                            <a href="--><?php //the_permalink(); ?><!--" class="white_bg_btn">-->
<!--                                --><?php //_e('Подробней', 'artjoker')?>
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
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
                            <h6><?php _e('Бесплатная доставка', 'tsn')?></h6>
                            <p><?php _e('Передать дополнительный контекст в шаблоны полей.', 'tsn')?></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6><?php _e('Безопасная платежная система', 'tsn')?></h6>
                            <p><?php _e('Передать дополнительный контекст в шаблоны полей.', 'tsn')?></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6><?php _e('Безопасная платежная система', 'tsn')?></h6>
                            <p><?php _e('Передать дополнительный контекст в шаблоны полей.', 'tsn')?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Method End-->
</main>
<?php get_footer(); ?>