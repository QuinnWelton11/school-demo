<?php

function school_demo_enqueue_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');

    wp_enqueue_style('main', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'school_demo_enqueue_styles');

function school_demo_editor_styles() {
    add_editor_style('style.css');
}

add_action('after_setup_theme', 'school_demo_editor_styles');

