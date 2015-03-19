<?php

# Prevent direct access to this file
if ( 1 == count( get_included_files() ) ) {
	header( 'HTTP/1.1 403 Forbidden' );
	die( 'Direct access of this file is prohibited. Thank you.' );
}

/**
 * Sets up necessary scripts and styles
 */
function flat_scripts_styles() {
    global $wp_version;

    # Get the current version of Flat, even if a child theme is being used
    $version = wp_get_theme( wp_get_theme()->template )->get( 'Version' );

    # When needed, enqueue comment-reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    # Minified versions of CSS & JS are used, unless a development constant is set
    if ( defined( 'WP_ENV' ) && 'development' === WP_ENV ) {
        $assets = array(
            'css' => '/assets/css/flat.css',
            'js'  => '/assets/js/flat.js',
        );
    } else {
        $assets = array(
            'css' => '/assets/css/flat.min.css',
            'js'  => '/assets/js/flat.min.js',
        );
    }

    wp_enqueue_style( 'flat-fonts', flat_fonts_url(), array(), null ); # Web fonts
    wp_enqueue_style( 'flat-theme', get_stylesheet_directory_uri() . $assets['css'], array(), $version ); # Flat's styling
    wp_enqueue_script( 'flat-js', get_template_directory_uri() . $assets['js'], array( 'jquery' ), $version, false ); # Flat's scripting
    wp_enqueue_style( 'flat-style', get_stylesheet_uri() ); # Load main stylesheet, for child theme supports


    # If the `script_loader_tag` filter is unavailable, this script will be added via the `wp_head` hook
    if ( version_compare( '4.1', $wp_version, '<=' ) ) {
        wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/assets/js/html5shiv.min.js', array(), '3.7.2', false );
    }
}