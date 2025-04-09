<?php

function bobbi_files() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Gidugu&family=Signika+Negative:wght@300..700&display=swap', [], null);
    wp_enqueue_style('bobbi_styles', get_theme_file_uri('/css/bobbi-style.css'));
    wp_enqueue_style('adobe_fonts', '//use.typekit.net/lxj4hjt.css');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   // wp_enqueue_script('university_main_js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'bobbi_files');

function bobbi_post_types() {
    register_post_type('announcement', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Announcements',
            'add_new_item' => 'Add New Announcement',
            'edit_item' => 'Edit Announcement',
            'all_items' => 'All Announcements',
            'singular_name' => 'Announcement'
        ),
        'menu-icon' => 'dashicons-megaphone'
    ));
}

add_action('init', 'bobbi_post_types');

function bobbi_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('welcomeSquare', 600, 600, true);
}

add_action('after_setup_theme', 'bobbi_features');

?>