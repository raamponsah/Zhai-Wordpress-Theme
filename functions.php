<?php

// Add theme support

add_theme_support('title_tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('post-format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
add_theme_support('automatic-feed-links');
add_theme_support('custom-background', ['default-color' => 'fff']);
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');

// Load in our CSS
function zhai_enqueue_styles(){
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
}

add_action('wp_enqueue_scripts', 'zhai_enqueue_styles');


// Register Menu locations
register_nav_menus([
    'main-menu' => esc_html__('Main Menu', 'zhai'),
    'footer-menu' => esc_html__('Footer Menu', 'zhai'),
]);

//Widgets setup

function zhai_home_widgets_init(){
    register_sidebar([
        "name"=> esc_html__('Featured Project', 'zhai'),
        "id"=> 'featured-project',
        "description"=> esc_html__('Add widgets for home sidebar here', 'zhai'),
        "before_widget"=> '<section id="featured-story" class="widget %2$s featured-story">',
        "after_widget"=> '</section>',
        "before_title"=> '<h3 class="featured-title">',
        "after_title"=> '</h3>',
        
    ]);

    register_sidebar([
        "name"=> esc_html__('Page Callout', 'zhai'),
        "id"=> 'callout-widget',
        "description"=> esc_html__('Add widgets for page callout', 'zhai'),
        "before_widget"=> '<section id="page-callout" class="widget %2$s callout">',
        "after_widget"=> '</section>',
        "before_title"=> '<h3 class="callout-title">',
        "after_title"=> '</h3>',
        
    ]);
};
add_action('widgets_init', 'zhai_home_widgets_init');