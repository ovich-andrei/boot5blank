<?php


function create_post_type_boot5()
{
    register_taxonomy_for_object_type('category', 'boot5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'boot5-blank');
    register_post_type('boot5-blank', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('boot5 Blank Custom Post', 'boot5blank'), // Rename these to suit
                'singular_name' => __('boot5 Blank Custom Post', 'boot5blank'),
                'add_new' => __('Add New', 'boot5blank'),
                'add_new_item' => __('Add New boot5 Blank Custom Post', 'boot5blank'),
                'edit' => __('Edit', 'boot5blank'),
                'edit_item' => __('Edit boot5 Blank Custom Post', 'boot5blank'),
                'new_item' => __('New boot5 Blank Custom Post', 'boot5blank'),
                'view' => __('View boot5 Blank Custom Post', 'boot5blank'),
                'view_item' => __('View boot5 Blank Custom Post', 'boot5blank'),
                'search_items' => __('Search boot5 Blank Custom Post', 'boot5blank'),
                'not_found' => __('No boot5 Blank Custom Posts found', 'boot5blank'),
                'not_found_in_trash' => __('No boot5 Blank Custom Posts found in Trash', 'boot5blank')
            ),
            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            ), // Go to Dashboard Custom boot5 Blank post for supports
            'can_export' => true, // Allows export in Tools > Export
            'taxonomies' => array(
                'post_tag',
                'category'
            ) // Add Category and Post Tags support
        ));
}
