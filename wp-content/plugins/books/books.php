<?php
/**
 * Plugin Name: Books plugin
 * Description: Plugin that will add a custom post type called books
 * Version: 1.0.0
 * License: MIT
 */
function book_test_plugin_register_books_cpt()
{
    $args = [
        'label' => esc_html__('Books', 'test-plugin'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'book'],
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-book',
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt'],
    ];
    register_post_type('book', $args);
}
add_action('init', 'book_test_plugin_register_books_cpt');