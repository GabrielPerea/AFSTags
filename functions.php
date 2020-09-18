<?php

// Defines
define('FL_CHILD_THEME_DIR', get_stylesheet_directory());
define('FL_CHILD_THEME_URL', get_stylesheet_directory_uri());

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action('wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000);

function afs4kids_scripts()
{
	wp_enqueue_style('afs4kids-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
	wp_enqueue_script('afs4kids-scripts', get_stylesheet_directory_uri() . '/js/afs4kids.js', array('jquery'), '1.0.0', true);

	// Load page specific CSS & JS for tagtree page only if we're actually on a tagtree page
	if (is_page_template('tagtree.php')) {
		wp_enqueue_style('tagtree-css', get_stylesheet_directory_uri() . '/css/tagtree.css');
		wp_enqueue_script('tagtree-js', get_stylesheet_directory_uri() . '/js/tagtree.js');
	};
}

add_action('wp_enqueue_scripts', 'afs4kids_scripts');

function custom_dequeue()
{
	wp_dequeue_style('font-awesome');
	wp_deregister_style('font-awesome');
}

add_action('wp_enqueue_scripts', 'custom_dequeue', 9999);
add_action('wp_head', 'custom_dequeue', 9999);

register_nav_menus(array(
	'quick_menu' => 'Footer Quick Menu',
	'afs_menu' => 'Footer AFS Menu',
));

if (is_category('cats')) {
	wp_enqueue_style('stylesheet-name', get_template_directory_uri() . '/mycss/category1.css', array(), '1.1', 'all');
}
