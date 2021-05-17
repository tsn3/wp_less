<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Tsn
 * @since Tsn 1.0
 */

?>

<div class="single-footer-caption mb-30">
    <!-- logo -->
    <div class="footer-logo">
		<?php
		if (get_custom_logo()) {
			the_custom_logo();
		} else {
			?>
            <div class="logo">
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo2_footer.png" alt=""></a>
            </div>
			<?php
		}
		?>
    </div>
    <div class="footer-tittle">
        <div class="footer-pera">
            <p><?php _e('Место для статического слогана', 'tsn');?></p>
        </div>
    </div>
</div>