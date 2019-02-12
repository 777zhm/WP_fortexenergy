<?php

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        // register blocks
        acf_register_block(array(
            'name'              => 'calltoaction',
            'title'             => __('Calltoaction fortex'),
            'description'       => __('A custom calltoaction block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'editor-contract',
            'keywords'          => array( 'calltoaction' ),
        ));

        acf_register_block(array(
            'name'              => 'mainscreen',
            'title'             => __('Mainscreen fortex'),
            'description'       => __('A custom mainscreen block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-home',
            'keywords'          => array( 'mainscreen' ),
        ));

        acf_register_block(array(
            'name'              => 'partners',
            'title'             => __('Partners fortex'),
            'description'       => __('A custom technologies block.'),
            'render_callback'   => 'custom_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-site',
            'keywords'          => array( 'partners', 'logo' ),
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