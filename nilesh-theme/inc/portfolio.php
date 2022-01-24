<?php
// Register Custom Post Type portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'portfolios', 'Post Type General Name', 'nilesh-theme' ),
		'singular_name' => _x( 'portfolio', 'Post Type Singular Name', 'nilesh-theme' ),
		'menu_name' => _x( 'portfolios', 'Admin Menu text', 'nilesh-theme' ),
		'name_admin_bar' => _x( 'portfolio', 'Add New on Toolbar', 'nilesh-theme' ),
		'archives' => __( 'portfolio Archives', 'nilesh-theme' ),
		'attributes' => __( 'portfolio Attributes', 'nilesh-theme' ),
		'parent_item_colon' => __( 'Parent portfolio:', 'nilesh-theme' ),
		'all_items' => __( 'All portfolios', 'nilesh-theme' ),
		'add_new_item' => __( 'Add New portfolio', 'nilesh-theme' ),
		'add_new' => __( 'Add New', 'nilesh-theme' ),
		'new_item' => __( 'New portfolio', 'nilesh-theme' ),
		'edit_item' => __( 'Edit portfolio', 'nilesh-theme' ),
		'update_item' => __( 'Update portfolio', 'nilesh-theme' ),
		'view_item' => __( 'View portfolio', 'nilesh-theme' ),
		'view_items' => __( 'View portfolios', 'nilesh-theme' ),
		'search_items' => __( 'Search portfolio', 'nilesh-theme' ),
		'not_found' => __( 'Not found', 'nilesh-theme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'nilesh-theme' ),
		'featured_image' => __( 'Featured Image', 'nilesh-theme' ),
		'set_featured_image' => __( 'Set featured image', 'nilesh-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'nilesh-theme' ),
		'use_featured_image' => __( 'Use as featured image', 'nilesh-theme' ),
		'insert_into_item' => __( 'Insert into portfolio', 'nilesh-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this portfolio', 'nilesh-theme' ),
		'items_list' => __( 'portfolios list', 'nilesh-theme' ),
		'items_list_navigation' => __( 'portfolios list navigation', 'nilesh-theme' ),
		'filter_items_list' => __( 'Filter portfolios list', 'nilesh-theme' ),
	);
	$args = array(
		'label' => __( 'portfolio', 'nilesh-theme' ),
		'description' => __( '', 'nilesh-theme' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
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
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );


?>