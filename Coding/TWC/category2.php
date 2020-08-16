<?php // Register Custom Post Type Category2
function create_category2_cpt() {

	$labels = array(
		'name' => _x( 'Categories2', 'Post Type General Name', 'TWC' ),
		'singular_name' => _x( 'Category2', 'Post Type Singular Name', 'TWC' ),
		'menu_name' => _x( 'Categories2', 'Admin Menu text', 'TWC' ),
		'name_admin_bar' => _x( 'Category2', 'Add New on Toolbar', 'TWC' ),
		'archives' => __( 'Category2 Archives', 'TWC' ),
		'attributes' => __( 'Category2 Attributes', 'TWC' ),
		'parent_item_colon' => __( 'Parent Category2:', 'TWC' ),
		'all_items' => __( 'All Categories2', 'TWC' ),
		'add_new_item' => __( 'Add New Category2', 'TWC' ),
		'add_new' => __( 'Add New', 'TWC' ),
		'new_item' => __( 'New Category2', 'TWC' ),
		'edit_item' => __( 'Edit Category2', 'TWC' ),
		'update_item' => __( 'Update Category2', 'TWC' ),
		'view_item' => __( 'View Category2', 'TWC' ),
		'view_items' => __( 'View Categories2', 'TWC' ),
		'search_items' => __( 'Search Category2', 'TWC' ),
		'not_found' => __( 'Not found', 'TWC' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'TWC' ),
		'featured_image' => __( 'Featured Image', 'TWC' ),
		'set_featured_image' => __( 'Set featured image', 'TWC' ),
		'remove_featured_image' => __( 'Remove featured image', 'TWC' ),
		'use_featured_image' => __( 'Use as featured image', 'TWC' ),
		'insert_into_item' => __( 'Insert into Category2', 'TWC' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Category2', 'TWC' ),
		'items_list' => __( 'Categories2 list', 'TWC' ),
		'items_list_navigation' => __( 'Categories2 list navigation', 'TWC' ),
		'filter_items_list' => __( 'Filter Categories2 list', 'TWC' ),
	);
	$args = array(
		'label' => __( 'Category2', 'TWC' ),
		'description' => __( '', 'TWC' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-art',
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
	register_post_type( 'category2', $args );

}
add_action( 'init', 'create_category2_cpt', 0 );
