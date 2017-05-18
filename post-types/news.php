<?php
add_action('init', function () {
    register_post_type('News', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Lägg till nyhet'),
            'edit_item' => __('Editera nyhet'),
            'add_new' => __( 'Lägg till nyhet'),
            'name' => __('Nyheter'),
            'search_items' => __('Sök i nyheter'),
            'singular_name' => __('Nyhet'),
        ],
        'menu_icon' => 'dashicons-megaphone',
        'menu_position' => 15,
        'public' => true,
    ]);
});
