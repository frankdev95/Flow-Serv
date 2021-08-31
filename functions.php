<?php 

function load_scripts() {
    wp_enqueue_style('adobe-fonts', 'https://use.typekit.net/yui3qfa.css');
    wp_enqueue_style('main_styles', get_theme_file_uri('build/index.css'));
    wp_enqueue_script('main-js', get_theme_file_uri('build/index.js'));
}

add_action('wp_enqueue_scripts', 'load_scripts');

function load_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'load_features');