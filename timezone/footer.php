<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <!-- logo and tagline-->
	                    <?php get_template_part( 'template-parts/footer/site-branding' ); ?>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-1 col-md-1 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <!-- Footer-menu -->
	                    <?php get_template_part( 'template-parts/footer/site-nav' ); ?>
                    </div>
                </div>
            </div>
            <!-- Footer bottom -->
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-8 col-md-7">
                    <div class="footer-copy-right">
                        <p><?php _e('Авторские права', 'tsn');?>
                             &copy;<script>document.write(new Date().getFullYear());</script>
                            <?php _e('Все права защищены | Этот шаблон сделан с ', 'tsn');?>
                            <i class="fa fa-heart" aria-hidden="true"></i><a href="#" target="_blank">TSN</a>
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 col-md-5">
                    <div class="footer-copy-right f-right">
                        <!-- social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->
<?php wp_footer(); ?>
</body>
</html>