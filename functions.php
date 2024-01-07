<?php

require_once 'widgets/class-wp-widget-categories.php';

// Theme support
add_action( 'after_setup_theme', function () {
    // featured image support
    add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 900, 600 );

    // Post format support
    add_theme_support( 'post-formats', [ 'gallery' ] );
} );

// Register Widget
add_action( 'widgets_init', function ( $id ) {
    register_sidebar( [
        'name' => 'Sidebar',
        'id'   => 'sidebar'
    ] );

    register_widget('WP_Widget_Categories_Custom');
});

