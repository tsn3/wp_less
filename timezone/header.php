<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @package WordPress
 * @subpackage Timezone
 * @since Timezone 1.0
 */

?><!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <base href="<?php echo home_url(); ?>" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo">
                        <?php
                        $theme_dir = get_template_directory_uri().'/';
                        $image_id = get_theme_mod( 'custom_logo' );
                        if ($image_id) {
                            $image_logo = wp_get_attachment_image_src($image_id, 'full');
                            $image_logo = array_shift($image_logo);
                        } else {
                            $image_logo = $theme_dir . 'assets/img/logo/logo.png';
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
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'primary-menu',
                            'container'       => 'div',
                            'menu_id'         => 'navigation',
                            'menu_class'      => 'main-menu d-none d-lg-block',
                            'depth' => 1,
                            'walker' => new my_menu_class()
                        ) ); ?>
                    </div>
<!--                     Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>