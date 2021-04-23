<?php get_header(); ?>

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1><?php single_post_title(); ?> ( page )</h1>
                    <nav class="d-flex align-items-center">
                        <?php $test = 12; ?>
                        <?php set_query_var('test', $test); ?>
                        <?php get_template_part('breadcrums'); ?>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <?php if (have_posts()): ?>
                            <?php while(have_posts()): ?>
                                <?php the_post(); ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class('row blog_item'); ?>>
                                    <div class="col-md-3">
                                        <div class="blog_info text-right">
                                            <div class="post_tag">
                                                <?php
                                                foreach( get_the_category() as $category ) {
                                                    echo '<a href="' . get_category_link($category->term_id ) . '">' . $category->name . '</a>&nbsp;';
                                                }
                                                ?>
                                            </div>
                                            <ul class="blog_meta list">
                                                <?php do_action('block_meta'); ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="blog_post">
                                            <?php if(get_the_post_thumbnail_url()): ?>
                                                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'post_preview' );?>" alt="<?php the_title(); ?>">
                                            <?php else: ?>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svg" alt="<?php the_title(); ?>">
                                            <?php endif; ?>

                                            <div class="blog_details">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title('<h2>', '</h2>'); ?>
                                                </a>
                                                <p><?php the_content(); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <hr><?php _e('Ничего не найденно.', 'artjoker')?><hr>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

<?php get_footer(); ?>