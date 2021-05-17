<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @package WordPress
 * @subpackage Tsn
 * @since Tsn 1.0
 */

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <base href="<?php echo home_url(); ?>" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<!-- Preloader End-->
<!-- Header  -->
<?php get_template_part( 'template-parts/header/site-header' ); ?>
