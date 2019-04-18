<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        // register blocks
        acf_register_block(array(
            'name'              => 'mainscreen',
            'title'             => __('Mainscreen'),
            'description'       => __('A custom mainscreen block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'format-image',
            'keywords'          => array( 'mainscreen, 777zhm' ),
        ));

        acf_register_block(array(
            'name'              => 'aboutus',
            'title'             => __('About us'),
            'description'       => __('A custom about us block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-page',
            'keywords'          => array( 'contactus, 777zhm' ),
        ));

        acf_register_block(array(
            'name'              => 'advantages',
            'title'             => __('Advantages'),
            'description'       => __('A custom advantages block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'screenoptions',
            'keywords'          => array( 'advantages, 777zhm' ),
        ));

        acf_register_block(array(
            'name'              => 'products',
            'title'             => __('Products'),
            'description'       => __('A custom products block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'grid-view',
            'keywords'          => array( 'products, 777zhm' ),
        ));

        acf_register_block(array(
            'name'              => 'partners',
            'title'             => __('Partners'),
            'description'       => __('A custom partners block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'list-view',
            'keywords'          => array( 'partners, 777zhm' ),
        ));

        acf_register_block(array(
            'name'              => 'contacts',
            'title'             => __('Contacts'),
            'description'       => __('A custom contacts block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-links',
            'keywords'          => array( 'contacts, 777zhm' ),
        ));

    }
}

function custom_block_render_callback( $block ) {
    // Remove "acf/" from name so we can use a path-friendly slug
    $slug = str_replace( 'acf/', '', $block['name'] );
    
    // include a template part from within the "template-parts/block" folder
    if( file_exists( STYLESHEETPATH . "/template-parts/block-{$slug}.php" ) ) {
        include( STYLESHEETPATH . "/template-parts/block-{$slug}.php" );
    }
}