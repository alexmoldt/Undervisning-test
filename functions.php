<?php 

function bil_post_types() {
    register_post_type('bil', array(
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,  // 
        'labels' => array(
            'name' => 'Biler',
            'add_new_item' => 'Add New Bil',
            'edit_item' => 'Edit Bil',
            'all_items' => 'All Biler',
            'singular_name' => 'Bil',  
            'add_new' => 'Add New Bil',
            'search_items' => 'Search Biler',
        ),  
        'menu_icon' => 'dashicons-car'
    ));
}

add_action('init', 'dashicons-schedule');