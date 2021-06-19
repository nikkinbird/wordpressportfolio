<?php
/**
* Twenty Twenty Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage twenty_twenty
* @since Twenty Twenty 2.0
*/

// Enqueue scripts and styles
function twentytwenty_child_scripts(){
	wp_enqueue_style( 'twentytwenty-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twentytwenty-style' ));
}
add_action( 'wp_enqueue_scripts', 'twentytwenty_child_scripts' );

// Register widget area
function twentytwenty_child_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'twentytwenty' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentytwenty' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentytwenty_child_widgets_init' );