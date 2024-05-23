<?php
function my_enqueue_styles()
{
    wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), null, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), null, 'all');
}

function my_enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('imgSlider', get_template_directory_uri() . '/src/js/imgSlider.js', array('jquery'), null, true);
    wp_enqueue_script('accordion-js', get_template_directory_uri() . '/src/js/accordion.js', array('jquery'), null, true);
    wp_enqueue_script('hamburger', get_template_directory_uri() . '/src/js/hamburger.js', array('jquery'), null, true);
    wp_enqueue_script('loopSlider', get_template_directory_uri() . '/src/js/loopSlider.js', array('jquery'), null, true);
}

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
add_action('wp_enqueue_scripts', 'my_enqueue_styles');
