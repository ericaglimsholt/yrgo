<?php
add_action('init', function () {
    register_post_type('FAQ', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Lägg till ny fråga'),
            'edit_item' => __('Editera frågor'),
            'add_new' => __( 'Lägg till frågor'),
            'name' => __('FAQ'),
            'search_items' => __('Sök på frågor'),
            'singular_name' => __('Fråga'),
        ],
        'menu_icon' => 'dashicons-editor-help',
        'menu_position' => 10,
        'public' => true,
    ]);
});
