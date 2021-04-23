<h1>index.php</h1>
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
<?php
function dump() {
echo '<pre>';

    foreach (func_get_args() as $v) {
        print_r($v);
        echo PHP_EOL;
        echo PHP_EOL;
    }

    echo '</pre>';
}
?>
