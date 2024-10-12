<?php

function lp_register_theme_support() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'lp_register_theme_support');

function lp_register_image_sizes() {
	add_image_size('max_width', 1920, 0, false);
	add_image_size('container_width', 1200, 0, false);
	add_image_size('xs_width', 768, 0, false);
}
add_action('after_setup_theme', 'lp_register_image_sizes');

function lp_register_menus() {
	register_nav_menus(array(
		'header-menu' => 'Header menu',
	));
}
add_action('init', 'lp_register_menus');

function lp_register_sidebars() {
	/*register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'description' => '',
		'before_widget' => '<div id="%1$s" class="sidebar %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));*/
}
add_action('widgets_init', 'lp_register_sidebars');


function lp_register_query_vars($vars) {
	//$vars[] = 'barrister_status';

	return $vars;
}
add_action('query_vars', 'lp_register_query_vars');


function lp_register_post_types()
{
	register_post_type('service', array(
		'labels'		=> array(
			'name'			   => __('Services'),
			'singular_name'	  => __('Service'),
			'add_new'			=> __('Add New'),
			'add_new_item'	   => __('Add New Service'),
			'edit_item'		  => __('Edit Service'),
			'new_item'		   => __('New Service'),
			'all_items'		  => __('All Services'),
			'view_item'		  => __('View Service'),
			'search_items'	   => __('Search Service'),
			'not_found'		  => __('No Services found'),
			'not_found_in_trash' => __('No Services found in the Trash'),
			'parent_item_colon'  => '',
			'menu_name'		  => 'Services'
		),
		'public'		=> true,
		'supports'	  => array('title', 'thumbnail','excerpt'),
		'has_archive'   => 'services',
		'menu_icon'	 => 'dashicons-hammer',
		'rewrite'	   => array('slug' => 'service', 'with_front' => true),
	));
}
add_action('init', 'lp_register_post_types');


add_shortcode( 'learnmore', 'learn_more_func' );
function learn_more_func( $atts ) {
    return "<div class=\"learn__more\">
	Learn More
  </div>";
}