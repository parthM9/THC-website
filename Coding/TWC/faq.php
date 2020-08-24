<?php // Register Custom Post Type faq
function create_faq_cpt() {

	$labels = array(
		'name' => _x( 'faqs', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'faq', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'faqs', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'faq', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'faq Archives', 'textdomain' ),
		'attributes' => __( 'faq Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent faq:', 'textdomain' ),
		'all_items' => __( 'All faqs', 'textdomain' ),
		'add_new_item' => __( 'Add New faq', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New faq', 'textdomain' ),
		'edit_item' => __( 'Edit faq', 'textdomain' ),
		'update_item' => __( 'Update faq', 'textdomain' ),
		'view_item' => __( 'View faq', 'textdomain' ),
		'view_items' => __( 'View faqs', 'textdomain' ),
		'search_items' => __( 'Search faq', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into faq', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this faq', 'textdomain' ),
		'items_list' => __( 'faqs list', 'textdomain' ),
		'items_list_navigation' => __( 'faqs list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter faqs list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'faq', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-clipboard',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments'),
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
	register_post_type( 'faq', $args );

}
add_action( 'init', 'create_faq_cpt', 0 );
