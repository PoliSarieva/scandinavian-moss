<?php
//Simple file for Moss Custom post type

if (! function_exists( 'su_moss_cpt' )) {

    /**
     * REgister our Moss Custom Post Type
     * 
     * @return void
     */
    function su_moss_cpt() {
        $labels = array(
            'name'                  => _x( 'Mosses', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Moss', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Mosses', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Moss', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Moss', 'textdomain' ),
		'new_item'              => __( 'New Moss', 'textdomain' ),
		'edit_item'             => __( 'Edit Moss', 'textdomain' ),
		'view_item'             => __( 'View Moss', 'textdomain' ),
		'all_items'             => __( 'All Mosses', 'textdomain' ),
		// 'search_items'          => __( 'Search Mosses', 'textdomain' ),
		// 'parent_item_colon'     => __( 'Parent Mosses:', 'textdomain' ),
		// 'not_found'             => __( 'No books found.', 'textdomain' ),
		// 'not_found_in_trash'    => __( 'No books found in Trash.', 'textdomain' ),
		// 'featured_image'        => _x( 'Moss Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
		// 'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		// 'remove_featured_image' => _x( 'Remove cover image', 'Override  s the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		// 'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
		// 'archives'              => _x( 'Moss archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
		// 'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
		// 'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
		// 'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
		// 'items_list_navigation' => _x( 'Mosses list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
		// 'items_list'            => _x( 'Mosses list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
	    
    );
        

    $args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 
                                        'editor', 
                                        'author', 
                                        'thumbnail',
                                        'revisions', 
                                    ),
        'show_in_rest'      => true,
	);

        register_post_type( 'moss', $args );
    }
}
add_action( 'init', 'su_moss_cpt' );

/**
 * Register our Category for our Moss CPT
 * 
 * @return void
 */
function su_moss_category_taxonomy () {
    $labels = array (
        'name'          => 'Categories',
        'singular_name' => 'Category',
    );

    $args = array (
        'labels'       => $labels,
        'show_in_rest' => true,
        'hierarchical' => true,
    );

    register_taxonomy( 'moss-category', 'moss', $args );
}
add_action( 'init', 'su_moss_category_taxonomy' );