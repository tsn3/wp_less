<?php /* Template name: Contact */ ?>
<?php get_header(); the_post(); ?>
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
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title"><?php esc_html_e('Связаться', 'tsn'); ?></h2>
                        <h2 class="contact-title"><?php echo do_shortcode("[events-list]"); ?></h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="<?php bloginfo('template_url'); ?>/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30"
                                                  rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php esc_html_e('Введите сообщение', 'tsn');?>'"
                                                  placeholder="<?php esc_html_e('Введите сообщение', 'tsn');?>"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text"
                                               onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php esc_html_e('Введите имя', 'tsn');?>'"
                                               placeholder="<?php esc_html_e('Введите имя', 'tsn');?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email"
                                               onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php esc_html_e('Введите адрес электронной почты', 'tsn');?>'"
                                               placeholder="<?php esc_html_e('Электронная почта', 'tsn');?>">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text"
                                               onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php esc_html_e('Введите тему', 'tsn');?>'"
                                               placeholder="<?php esc_html_e('Введите тему', 'tsn');?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn"><?php esc_html_e('Отправить', 'tsn'); ?></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3><?php echo get_option('tsn_address'); ?></h3>
                                <p><?php echo get_option('tsn_post_address'); ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3><?php echo get_option('tsn_phone'); ?></h3>
                                <p><?php echo get_option('tsn_time_job'); ?></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><?php echo get_option('tsn_email'); ?></h3>
                                <p><?php echo get_option('tsn_text'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->
    </main>
<?php get_footer(); ?>