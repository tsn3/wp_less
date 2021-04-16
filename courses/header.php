<!DOCTYPE html>
<html class="wide wow-animation" <?php language_attributes(); ?>>
<head>
    <base href="<?php echo home_url(); ?>" />
<!--    <title>Home</title>-->
<!--    <meta charset="utf-8">-->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>-->
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="page">
    <header class="section page-header page-header-main">


        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-sidebar" data-xl-device-layout="rd-navbar-sidebar" data-xxl-layout="rd-navbar-sidebar" data-xxl-device-layout="rd-navbar-sidebar" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="1x" data-xxl-stick-up-offset="1px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!--RD Navbar Panel-->
                        <div class="rd-navbar-panel">

                            <!--RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                            <!--RD Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <!--Brand-->

                                <span class="brand" href="<?php bloginfo('url'); ?>">
                                    <?php
                                    $theme_dir = get_template_directory_uri().'/';
                                    $image_id = get_theme_mod( 'custom_logo' );
                                    if ($image_id) {
	                                    $image_logo = wp_get_attachment_image_src($image_id, 'full');
	                                    $image_logo = array_shift($image_logo);
                                    } else {
	                                    $image_logo = $theme_dir . 'assets/images/logo-default-300x86.png';
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
                                </span>
                            </div>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="online-lectures.html">Online Lectures</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="courses.html">Courses</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="news.html">News</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-post.html">Single Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="typography.html">Typography</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="buttons.html">Buttons</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="forms.html">Forms</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="tabs-and-accordions.html">Tabs and accordions</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="progress-bars.html">Progress bars</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="tables.html">Tables</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="grid-system.html">Grid system</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="privacy-policy.html">Privacy policy</a>
                                            </li>
                                            <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="under-construction.html">Under Construction</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>