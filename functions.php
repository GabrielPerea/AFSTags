<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

function afs4kids_scripts() {
	wp_enqueue_style( 'afs4kids-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_script( 'afs4kids-scripts', get_stylesheet_directory_uri() . '/js/afs4kids.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'afs4kids_scripts' );

function custom_dequeue() {
    wp_dequeue_style('font-awesome');
    wp_deregister_style('font-awesome');

}

add_action( 'wp_enqueue_scripts', 'custom_dequeue', 9999 );
add_action( 'wp_head', 'custom_dequeue', 9999 );

register_nav_menus( array(
	'quick_menu' => 'Footer Quick Menu',
	'afs_menu' => 'Footer AFS Menu',
));


