<!-- Single Slider Area -->

<div class="slider-area ">
    <div class="slider-active">
        <!-- Single Slider Area -->
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
                                    <span class="btn hero-btn"><?php esc_html_e('Влево/вправо', 'tsn'); ?></span>
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
