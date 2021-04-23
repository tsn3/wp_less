<?php

add_action('init', function() {
    remove_action('block_meta', 'my_get_date');
    wp_deregister_style('main');
});

//die();