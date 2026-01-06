<?php

function enqueue_assets() {
    wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/script.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'enqueue_assets');

add_filter('mwform_content_wpautop_mw-wp-form-6', '__return_false');
