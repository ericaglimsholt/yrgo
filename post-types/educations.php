<?php
add_action('init', function () {
    register_post_type('Education', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Lägg till ny utbildning'),
            'edit_item' => __('Editera utbildningen'),
            'add_new' => __( 'Lägg till utbildning'),
            'name' => __('Utbildningar'),
            'search_items' => __('Sök på utbildningar'),
            'singular_name' => __('Utbildning'),
        ],
        'menu_icon' => 'dashicons-welcome-learn-more',
        'menu_position' => 10,
        'public' => true,
    ]);
});
