<?php
// Register Custom Post Type Aboutus
function create_aboutus_cpt() {

	$labels = array(
		'name' => _x( 'Aboutus', 'Post Type General Name', 'TWC' ),
		'singular_name' => _x( 'Aboutus', 'Post Type Singular Name', 'TWC' ),
		'menu_name' => _x( 'Aboutus', 'Admin Menu text', 'TWC' ),
		'name_admin_bar' => _x( 'Aboutus', 'Add New on Toolbar', 'TWC' ),
		'archives' => __( 'Aboutus Archives', 'TWC' ),
		'attributes' => __( 'Aboutus Attributes', 'TWC' ),
		'parent_item_colon' => __( 'Parent Aboutus:', 'TWC' ),
		'all_items' => __( 'All Aboutus', 'TWC' ),
		'add_new_item' => __( 'Add New Aboutus', 'TWC' ),
		'add_new' => __( 'Add New', 'TWC' ),
		'new_item' => __( 'New Aboutus', 'TWC' ),
		'edit_item' => __( 'Edit Aboutus', 'TWC' ),
		'update_item' => __( 'Update Aboutus', 'TWC' ),
		'view_item' => __( 'View Aboutus', 'TWC' ),
		'view_items' => __( 'View Aboutus', 'TWC' ),
		'search_items' => __( 'Search Aboutus', 'TWC' ),
		'not_found' => __( 'Not found', 'TWC' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'TWC' ),
		'featured_image' => __( 'Featured Image', 'TWC' ),
		'set_featured_image' => __( 'Set featured image', 'TWC' ),
		'remove_featured_image' => __( 'Remove featured image', 'TWC' ),
		'use_featured_image' => __( 'Use as featured image', 'TWC' ),
		'insert_into_item' => __( 'Insert into Aboutus', 'TWC' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Aboutus', 'TWC' ),
		'items_list' => __( 'Aboutus list', 'TWC' ),
		'items_list_navigation' => __( 'Aboutus list navigation', 'TWC' ),
		'filter_items_list' => __( 'Filter Aboutus list', 'TWC' ),
	);
	$args = array(
		'label' => __( 'Aboutus', 'TWC' ),
		'description' => __( '', 'TWC' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-arrow-down',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'aboutus', $args );

}
add_action( 'init', 'create_aboutus_cpt', 0 );
