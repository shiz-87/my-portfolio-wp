<?php

function my_script_init()
{
    // CSSの読み込み
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/lib/swiper-bundle.min.css', array(), '12.0.3', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('/assets/css/style.css')), 'all');

    // JSの読み込み
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/lib/swiper-bundle.min.js', array(), '12.0.3', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array("jquery"), filemtime(get_theme_file_path('/assets/js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');
