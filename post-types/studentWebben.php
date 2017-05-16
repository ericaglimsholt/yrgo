<?php
add_action('init', function () {
    register_post_type('StudentWebben', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Lägg till ny sida'),
            'edit_item' => __('Editera sidor'),
            'add_new' => __( 'Lägg till ny sida'),
            'name' => __('StudentWebben'),
            'search_items' => __('Sök sidor'),
            'singular_name' => __('StudentWebben'),
        ],
        'menu_icon' => 'dashicons-smiley',
        'menu_position' => 3,
        'public' => true,
    ]);
});
