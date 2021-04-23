<?php get_header(); ?>

<h1>search.php</h1>
<?php if (have_posts()): ?>
    <?php while(have_posts()): ?>
        <?php the_post(); ?>

        <?php the_title(); ?>
        <?php the_excerpt(); ?>
        <br><br>
    <?php endwhile; ?>
<?php else : ?>
    <hr><?php _e('Ничего не найденно.', 'tsn')?><hr>
<?php endif; ?>

<?php get_footer(); ?>
