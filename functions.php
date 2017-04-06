<?php

// Register Nav Walker class_alias

require_once ('wp_bootstrap_navwalker.php');

// Theme Support 
function wpb_theme_setup (){
	add_theme_support('post-thumbnails');

	// Post Formats
	add_theme_support('post-formats', array('aside', 'gallery'));
}



add_action('after_setup_theme', 'wpb_theme_setup');

function register_header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_header_menu' );

function bootstrap_nav()
{
  wp_nav_menu( array(
                'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
       'container_id'      => 'bs-example-navbar-collapse-1',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
    );
}



// Excerpt Length Control

function set_excerpt_length() {
	return 40;
}

add_filter('excerpt_length', 'set_excerpt_length');


// Widget Locations
function wpb_init_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar',
		'id'   => 'sidebar',
		'before_widget' => '<div class="sidebar-module">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));

	register_sidebar(array(
    'name'  => 'Box1',
    'id'    => 'box1',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'  => 'Box2',
    'id'    => 'box2',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
  
  register_sidebar(array(
    'name'  => 'Box3',
    'id'    => 'box3',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
}


add_action('widgets_init', 'wpb_init_widgets');

// Add Custom Logo

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

add_theme_support( 'custom-logo' );



// Customizer File
require get_template_directory(). '/inc/showcase.php';