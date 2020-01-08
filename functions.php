<?php

// load template functions
require_once('dist/php/functions/template_functions.php' );

/**
 * Enqueues scripts and styles.
 */
function fci_assets() {
    // Theme stylesheet.
    wp_enqueue_style( 'fci-fonts', get_stylesheet_directory_uri() . '/fonts/fonts.css' );
    wp_enqueue_style( 'fci-stylesheet', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'fci-scripts', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'fci_assets' );
?>