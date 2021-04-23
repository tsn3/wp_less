<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <base href="<?php echo home_url(); ?>" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Site Title -->
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/linearicons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nouislider.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ion.rangeSlider.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ion.rangeSlider.skinFlat.css"/>
<!--    <link rel="stylesheet" href="--><?php //echo get_style_dir(); ?><!--/css/main.css">-->

    <?php wp_head(); ?>

    <script>
        let ajaxPath = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->

                <?php
                    $theme_dir = get_template_directory_uri().'/';
                    $image_id = get_theme_mod( 'custom_logo' );
                    if ($image_id) {
                        $image_logo = wp_get_attachment_image_src($image_id, 'full');
                        $image_logo = array_shift($image_logo);
                    } else {
                        $image_logo = $theme_dir . 'img/logo.png';
                    }
                ?>

                <?php if (is_front_page()): ?>
                    <span class="navbar-brand logo_h active">
                        <img src="<?php echo $image_logo; ?>" alt="<?php bloginfo('description'); ?>">
                    </span>
                <?php else: ?>
                    <a class="navbar-brand logo_h" href="<?php echo home_url();?>">
                        <img src="<?php echo $image_logo; ?>" alt="<?php bloginfo('description'); ?>">
                    </a>
                <?php endif; ?>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">

                    <?php wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'menu_class' => 'nav navbar-nav menu_nav ml-auto',
                            'depth' => 1,
//                            'container'       => 'div',
//                            'container_class' => 'collapse navbar-collapse offset',
//                            'container_id'    => 'navbarSupportedContent',
//                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'walker' => new my_menu_class()
                        ) ); ?>
<!--                </div>-->
<!--                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">-->
<!--                    <ul class="nav navbar-nav menu_nav ml-auto">-->
<!--                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>-->
<!--                        <li class="nav-item submenu dropdown">-->
<!--                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"-->
<!--                               aria-haspopup="true"-->
<!--                               aria-expanded="false">Shop</a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>-->
<!--                                <li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a>-->
<!--                                </li>-->
<!--                                <li class="nav-item"><a class="nav-link" href="checkout.html">Product Checkout</a></li>-->
<!--                                <li class="nav-item"><a class="nav-link" href="cart.html">Shopping Cart</a></li>-->
<!--                                <li class="nav-item"><a class="nav-link" href="confirmation.html">Confirmation</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="nav-item submenu dropdown active">-->
<!--                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"-->
<!--                               aria-haspopup="true"-->
<!--                               aria-expanded="false">Blog</a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li class="nav-item active"><a class="nav-link" href="blog.html">Blog</a></li>-->
<!--                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="nav-item submenu dropdown">-->
<!--                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"-->
<!--                               aria-haspopup="true"-->
<!--                               aria-expanded="false">Pages</a>-->
<!--                            <ul class="dropdown-menu">-->
<!--                                <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>-->
<!--                                <li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a></li>-->
<!--                                <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>-->
<!--                    </ul>-->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between" action="<?php echo home_url(); ?>" method="GET">
                <input type="text" name="s" class="form-control" id="search_input" placeholder="Search Here" value="<?php echo get_search_query() ?>">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div> <!-- // div.container from header -->
</header>
<!-- End Header Area -->