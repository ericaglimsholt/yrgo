<?php
add_action('init', function () {
    register_post_type('Yrgo', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Lägg till ny sida'),
            'edit_item' => __('Editera sidor'),
            'add_new' => __( 'Lägg till ny sida'),
            'name' => __('Yrgo'),
            'search_items' => __('Sök sidor'),
            'singular_name' => __('Yrgo'),
        ],
        'menu_icon' => 'dashicons-universal-access',
        'menu_position' => 2,
        'public' => true,
    ]);
});
