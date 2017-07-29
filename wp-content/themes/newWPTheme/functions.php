<?php
// Our custom post type function
function create_articles_custom_posttype()
{

    register_post_type('articles',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Articles'),
                'singular_name' => __('Articles')
            ),
            'supports' => array('title', 'editor', 'excerpt',
                'author', 'thumbnail', 'revisions', 'custom-fields',),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'articles'),
            'taxonomies' => array('category'),
            'show_in_menu' => true,
            'show_in_nav_menus' => true,


        )
    );
}

// Hooking up our function to theme setup
add_action('init', 'create_articles_custom_posttype');
