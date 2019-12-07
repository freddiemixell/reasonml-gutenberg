<?php
/**
 * Plugin Name: ReasonML Blocks
 */

add_shortcode( 'reasonml-blocks', 'reasonml_blocks_render' );

function reasonml_blocks_render() {
    wp_enqueue_script( 'reasonml-blocks-bundle' );
    wp_enqueue_style( 'reasonml-blocks-css' );
    return '<div id="root"></div>';
}

add_action( 'wp_enqueue_scripts', function() {
    wp_register_script(
        'reasonml-blocks-bundle',
        plugin_dir_url( __FILE__ ) . '/public/bundle.js',
        [],
        '1.0.0',
        true
    );
    wp_register_style(
        'reasonml-blocks-css',
        plugin_dir_url( __FILE__ ) . '/public/styles.css',
        [],
        '1.0.0',
        'all'
    );
} );
