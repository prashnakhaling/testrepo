<?php

/*
Plugin Name: CPM Invest Profile
Description: A plugin to create a custom post type for Invests.
Version: 1.0
Author: Ranju and Prasna
License: GPL2
*/
// Function to register the custom post type
function cpm_invest_register_post_type() {

    $labels = array(
        'name'                  => _x( 'Invest', 'Post Type General Name', 'cpm_invest' ),
        'singular_name'         => _x( 'Invest', 'Post Type Singular Name', 'cpm_invest' ),
        'menu_name'             => __( 'Invests', 'cpm_invest' ),
        'name_admin_bar'        => __( 'Invest', 'cpm_invest' ),
        'archives'              => __( 'Invest Archives', 'cpm_invest' ),
        'attributes'            => __( 'Invest Attributes', 'cpm_invest' ),
        'parent_item_colon'     => __( 'Parent Invest:', 'cpm_invest' ),
        'all_items'             => __( 'All Invests', 'cpm_invest' ),
        'add_new_item'          => __( 'Add New Invest', 'cpm_invest' ),
        'add_new'               => __( 'Add New', 'cpm_invest' ),
        'new_item'              => __( 'New Invest', 'cpm_invest' ),
        'edit_item'             => __( 'Edit Invest', 'cpm_invest' ),
        'update_item'           => __( 'Update Invest', 'cpm_invest' ),
        'view_item'             => __( 'View Invest', 'cpm_invest' ),
        'view_items'            => __( 'View Invests', 'cpm_invest' ),
        'search_items'          => __( 'Search Invest', 'cpm_invest' ),
        'not_found'             => __( 'Not found', 'cpm_invest' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'cpm_invest' ),
        'featured_image'        => __( 'Featured Image', 'cpm_invest' ),
        'set_featured_image'    => __( 'Set featured image', 'cpm_invest' ),
        'remove_featured_image' => __( 'Remove featured image', 'cpm_invest' ),
        'use_featured_image'    => __( 'Use as featured image', 'cpm_invest' ),
        'insert_into_item'      => __( 'Insert into Invest', 'cpm_invest' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Invest', 'cpm_invest' ),
        'items_list'            => __( 'Invests list', 'cpm_invest' ),
        'items_list_navigation' => __( 'Invests list navigation', 'cpm_invest' ),
        'filter_items_list'     => __( 'Filter Invests list', 'cpm_invest' ),
    );
    $args = array(
        'label'                 => __( 'Invests', 'cpm_invest' ),
        'description'           => __( 'Post Type for Invests', 'cpm_invest' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'cpm_invest', $args );

}

// Hook into the 'init' action
add_action( 'init', 'cpm_invest_register_post_type', 0 );