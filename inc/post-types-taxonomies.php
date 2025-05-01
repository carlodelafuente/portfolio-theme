<?php

function register_project_post_type() {
    $labels = array(
        'name'               => 'Projects',
        'singular_name'      => 'Project',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Project',
        'edit_item'          => 'Edit Project',
        'new_item'           => 'New Project',
        'view_item'          => 'View Project',
        'view_items'         => 'View Projects',
        'search_items'       => 'Search Projects',
        'not_found'          => 'No projects found',
        'menu_name'          => 'Projects',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'rewrite'            => array('slug' => 'projects'),
        'show_in_rest'       => true, // Enables block editor
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
    );

    register_post_type('project', $args);
}
add_action('init', 'register_project_post_type');