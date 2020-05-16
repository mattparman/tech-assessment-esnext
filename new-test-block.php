<?php
/**
 * Plugin Name: Matt Parman Tech Assessment
 * Description: Creating a new block for my Automattic technical assessment
 * Version: 1.0.1
 * Author: Matt Parman
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


function parmanguten_testblock_register_block() {

    $asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

    wp_register_script(
        'parmanguten-esnext',
        plugins_url( 'build/index.js', __FILE__ ),
        $asset_file['dependencies'],
        $asset_file['version']
    );

    wp_register_style(
        'parmanguten-esnext-editor',
        plugins_url( 'src/editor.css', __FILE__ ),
        array( 'wp-edit-blocks' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'src/editor.css' )
    );

    wp_register_style(
        'parmanguten-esnext-frontend',
        plugins_url( 'src/style.css', __FILE__ ),
        array( ),
        filemtime( plugin_dir_path( __FILE__ ) . 'src/style.css' )
    );

    register_block_type( 'parmanguten/new-test-block', array(
        'style' => 'parmanguten-esnext-frontend',
        'editor_style' => 'parmanguten-esnext-editor',
        'editor_script' => 'parmanguten-esnext',
    ) );
}
add_action( 'init', 'parmanguten_testblock_register_block' );
