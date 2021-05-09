<article <?php post_class('blog_item'); ?> id="post-<?php the_ID(); ?>">
    <div class="blog_item_img">
		<?php if (get_the_post_thumbnail()) { ?>
            <img class="card-img rounded-0" src="<?php the_post_thumbnail_url('post_image'); ?>" alt="<?php the_title(); ?>">
			<?php
		} else { ?>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/Anonymous.svg" alt="image not added">
			<?php
		} ?>

        <a href="<?php the_permalink(); ?>" class="blog_item_date" id="news_post">
            <h3><?php the_time('F'); ?></h3>
            <p><?php the_time('jS'); ?></p>
        </a>
    </div>

    <div class="blog_details">
        <a class="d-inline-block" href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>
        <p><?php the_excerpt(); ?></p>
        <ul class="blog-info-link mt-3 mb-4"">
		<?php do_action('block_meta'); ?>
        </ul>
    </div>
</article>
