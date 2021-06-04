<?php

add_action('wp_enqueue_scripts', function(){
    //enqueue styles
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/theme_style.css', true, '1.0' ,'all');
    
    // enqueue scripts
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js');
});