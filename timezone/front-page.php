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
                                        <span class="btn hero-btn"><?php _e('Влево/вправо', 'tsn'); ?></span>
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
                            <h2><?php _e('Наши сотрудники', 'tsn');?></h2>
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
                                    <h3><a href="product_details.html"><?php the_title(); ?></a></h3>
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

    <!--? Gallery Area Start -->
    <div class="gallery-area">
        <div class="container-fluid p-0 fix">
            <div class="row">
                <?php
                $gallery_images = CFS()->get('gallery_images');
                foreach ($gallery_images as $image) {
	                echo '<img src="'.$image["image"].'"/>';
                }?>
            </div>
        </div>
    </div>

    <!--? Popular Items Start -->
    <div class="popular-items section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">

                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-70 text-center">
                        <h2><?php _e('Популярное', 'tsn'); ?></h2>
                    </div>
                </div>
            </div>
            <?php get_template_part('content/front-page-popular-news');?>
            <?php get_template_part('content/front-page-popular-post');?>
        </div>
        <!-- Button -->
        <div class="row justify-content-center">
            <div class="room-btn pt-70">
                <a href=<?php echo get_home_url( '', 'blog', 'http' ); ?>" class="btn view-btn1">
			    <?php _e('Посмотреть больше сообщений' , 'tsn'); ?>
                </a>
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