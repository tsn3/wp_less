<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @subpackage Tsn
 * @since Tsn 1.0
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="error-404 not-found">
                <header class="page-header">
                    <h1>404.php</h1>
                    <h1 class="page-title"><?php _e( 'Ой! Страница не найдена.', 'tsn' ); ?></h1>
                </header><!-- .page-header -->

            </div><!-- .error-404 -->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
