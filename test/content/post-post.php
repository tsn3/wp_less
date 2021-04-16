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
                <p><?php the_excerpt(); ?></p>
                <!--                                                <p>--><?php //the_content(); ?><!--</p>-->
                <a href="<?php the_permalink(); ?>" class="white_bg_btn">
                    <?php _e('Подробней', 'artjoker')?>
                </a>
            </div>
        </div>
    </div>
</article>