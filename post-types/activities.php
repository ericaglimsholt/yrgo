<?php
add_action('init', function () {
    register_post_type('Activities', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Lägg till aktivitet'),
            'edit_item' => __('Editera aktivitet'),
            'add_new' => __( 'Lägg till aktivitet'),
            'name' => __('Aktiviteter'),
            'search_items' => __('Sök i aktiviteter'),
            'singular_name' => __('Aktivitet'),
        ],
        'menu_icon' => 'dashicons-album',
        'menu_position' => 16,
        'public' => true,
    ]);
});
