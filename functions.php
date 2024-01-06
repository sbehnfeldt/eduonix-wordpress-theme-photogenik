<?php


// Theme support

add_action( 'after_setup_theme', function () {
    // featured image support
    add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 900, 600 );

    // Post format support
    add_theme_support( 'post-formats', [ 'gallery' ] );
} );
