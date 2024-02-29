<?php

// flush permalinks after adding

// custom post type (CPT)
function fwd_register_custom_post_types()
{

    // Register Work CPT
    $labels = array(
        'name'               => _x('Works', 'post type general name'),
        'singular_name'      => _x('Work', 'post type singular name'),
        'menu_name'          => _x('Works', 'admin menu'),
        'name_admin_bar'     => _x('Work', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'work'),
        'add_new_item'       => __('Add New Work'),
        'new_item'           => __('New Work'),
        'edit_item'          => __('Edit Work'),
        'view_item'          => __('View Work'),
        'all_items'          => __('All Works'),
        'search_items'       => __('Search Works'),
        'parent_item_colon'  => __('Parent Works:'),
        'not_found'          => __('No works found.'),
        'not_found_in_trash' => __('No works found in Trash.'),
        'archives'           => __('Work Archives'),
        'insert_into_item'   => __('Insert into work'),
        'uploaded_to_this_item' => __('Uploaded to this work'),
        'filter_item_list'   => __('Filter works list'),
        'items_list_navigation' => __('Works list navigation'),
        'items_list'         => __('Works list'),
        'featured_image'     => __('Work featured image'),
        'set_featured_image' => __('Set work featured image'),
        'remove_featured_image' => __('Remove work featured image'),
        'use_featured_image' => __('Use as featured image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'works'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array('title', 'thumbnail', 'editor'),
    );
    register_post_type('fwd-work', $args);


    // Register Testimonial CPT
    $labels = array(
        'name'               => _x('Testimonials', 'post type general name'),
        'singular_name'      => _x('Testimonial', 'post type singular name'),
        'menu_name'          => _x('Testimonials', 'admin menu'),
        'name_admin_bar'     => _x('Testimonial', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'testimonial'),
        'add_new_item'       => __('Add New Testimonial'),
        'new_item'           => __('New Testimonial'),
        'edit_item'          => __('Edit Testimonial'),
        'view_item'          => __('View Testimonial'),
        'all_items'          => __('All Testimonials'),
        'search_items'       => __('Search Testimonials'),
        'parent_item_colon'  => __('Parent Testimonials:'),
        'not_found'          => __('No testimonials found.'),
        'not_found_in_trash' => __('No testimonials found in Trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'testimonials'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-heart',
        'supports'           => array('title', 'editor'),
        'template'           => array(array('core/pullquote')),
        'template_lock'      => 'all'
    );

    register_post_type('fwd-testimonial', $args);



    // Register Service CPT
    $labels = array(
        'name'               => _x('Services', 'post type general name'),
        'singular_name'      => _x('Service', 'post type singular name'),
        'menu_name'          => _x('Services', 'admin menu'),
        'name_admin_bar'     => _x('Service', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'service'),
        'add_new_item'       => __('Add New Service'),
        'new_item'           => __('New Service'),
        'edit_item'          => __('Edit Service'),
        'view_item'          => __('View Service'),
        'all_items'          => __('All Services'),
        'search_items'       => __('Search Services'),
        'parent_item_colon'  => __('Parent Services:'),
        'not_found'          => __('No services found.'),
        'not_found_in_trash' => __('No services found in Trash.'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'services'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-forms',
        'supports'           => array('title')
    );

    register_post_type('fwd-service', $args);
}
add_action('init', 'fwd_register_custom_post_types');



//  creating taxonomy
function fwd_register_taxonomies()
{
    // Add Work Category taxonomy
    $labels = array(
        'name'              => _x('Work Categories', 'taxonomy general name'),
        'singular_name'     => _x('Work Category', 'taxonomy singular name'),
        'search_items'      => __('Search Work Categories'),
        'all_items'         => __('All Work Category'),
        'parent_item'       => __('Parent Work Category'),
        'parent_item_colon' => __('Parent Work Category:'),
        'edit_item'         => __('Edit Work Category'),
        'view_item'         => __('Vview Work Category'),
        'update_item'       => __('Update Work Category'),
        'add_new_item'      => __('Add New Work Category'),
        'new_item_name'     => __('New Work Category Name'),
        'menu_name'         => __('Work Category'),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'work-categories'),
    );
    register_taxonomy('fwd-work-category', array('fwd-work'), $args);


    // registered featured taxonomy
    $labels = array(
        'name'              => _x('Featured', 'taxonomy general name'),
        'singular_name'     => _x('Featured', 'taxonomy singular name'),
        'search_items'      => __('Search Featured'),
        'all_items'         => __('All Featured'),
        'parent_item'       => __('Parent Featured'),
        'parent_item_colon' => __('Parent Featured:'),
        'edit_item'         => __('Edit Featured'),
        'update_item'       => __('Update Featured'),
        'add_new_item'      => __('Add New Featured'),
        'new_item_name'     => __('New Work Featured'),
        'menu_name'         => __('Featured'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'featured'),
    );

    register_taxonomy('fwd-featured', array('fwd-work'), $args);



        // registered service taxonomy
        $labels = array(
            'name'              => _x('Service Type', 'taxonomy general name'),
            'singular_name'     => _x('Service Type', 'taxonomy singular name'),
            'search_items'      => __('Search Service Type'),
            'all_items'         => __('All Service Type'),
            'parent_item'       => __('Parent Service Type'),
            'parent_item_colon' => __('Parent Service Type:'),
            'edit_item'         => __('Edit Service Type'),
            'update_item'       => __('Update Service Type'),
            'add_new_item'      => __('Add New Service Type'),
            'new_item_name'     => __('New Work Service Type'),
            'menu_name'         => __('Service Type'),
        );
    
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'service-type'),
        );
    
        register_taxonomy('fwd-service-type', array('fwd-service'), $args);

}
add_action('init', 'fwd_register_taxonomies');







// fixes front end urls.. for when user changes themes
function fwd_rewrite_flush()
{
    fwd_register_custom_post_types();
    fwd_register_taxonomies();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'fwd_rewrite_flush');
