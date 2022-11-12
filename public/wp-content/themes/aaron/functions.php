<?php

function load_styles_and_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');
add_theme_support('post-thumbnails');
