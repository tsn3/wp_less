<?php get_header(); ?>

<?php get_template_part( 'breadcrumbs' ); ?>

<div class="blog_wrap all_wrap">
    <div class="blog all_wrap">
        <div class="blog_title"><?php single_post_title(); ?></div>
        <div class="blog_items">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <p>Записей не найдено.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>