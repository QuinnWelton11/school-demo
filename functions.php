<?php

function school_demo_enqueue_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('wp-block-library');
    wp_enqueue_style('main', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'school_demo_enqueue_styles');

function school_demo_editor_styles() {
    add_editor_style('style.css');
}

add_action('after_setup_theme', 'school_demo_editor_styles');


function register_student_cpt() {
    register_post_type('students', [
        'label' => 'Students',
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'template' => [
            ['core/paragraph', ['placeholder' => 'Short biography']],
            ['core/button', ['text' => 'View Portfolio']],
        ],
        'template_lock' => 'all',
        'labels' => [
            'add_new_item' => 'Add student name'
        ],
    ]);
}
add_action('init', 'register_student_cpt');

function register_student_taxonomy() {
    register_taxonomy('student-type', 'students', [
        'label' => 'Student Type',
        'public' => true,
        'hierarchical' => true,
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_student_taxonomy');

function register_staff_cpt() {
    register_post_type('staff', [
        'label' => 'Staff',
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'staff'],
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'template' => [
            ['core/paragraph', ['placeholder' => 'Job Title']],
            ['core/paragraph', ['placeholder' => 'Email Address']],
        ],
        'template_lock' => 'all',
        'labels' => [
            'add_new_item' => 'Add staff name',
        ]
    ]);
}
add_action('init', 'register_staff_cpt');

function register_staff_taxonomy() {
    register_taxonomy('staff-type', ['staff'], [
        'label' => 'Staff Type',
        'public' => true,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'staff-type'],
    ]);
}
add_action('init', 'register_staff_taxonomy');


add_image_size('student-small', 300, 200, true);
add_image_size('student-large', 600, 400, true);

add_filter('image_size_names_choose', function($sizes) {
    return array_merge($sizes, [
        'student-small' => 'Student Small',
        'student-large' => 'Student Large',
    ]);
});



