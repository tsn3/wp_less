<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

        <?php the_title(); ?>
        <?php the_excerpt(); ?>
        <br><br>
    <?php endwhile; ?>
<?php else : ?>
    <hr><?php _e('Ничего не найденно.', 'artjoker')?><hr>
<?php endif; ?>

<?php get_footer(); ?>