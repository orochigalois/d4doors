<?php

function lp_register_theme_support()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'lp_register_theme_support');

function lp_register_image_sizes()
{
	add_image_size('max_width', 1920, 0, false);
	add_image_size('container_width', 1200, 0, false);
	add_image_size('xs_width', 768, 0, false);
}
add_action('after_setup_theme', 'lp_register_image_sizes');

function lp_register_menus()
{
	register_nav_menus(array(
		'header-menu' => 'Header menu',
		'footer-menu' => 'Footer menu'
	));
}
add_action('init', 'lp_register_menus');

function lp_add_default_menu_item($items, $args)
{
	// Check if it's the header menu
	if ($args->theme_location == 'header-menu') {
		// Append a new menu item to the end
		$items .= '<li class="menu-item"><a href="/contact-us">Contact</a></li>';
	}
	return $items;
}
add_filter('wp_nav_menu_items', 'lp_add_default_menu_item', 10, 2);

function lp_register_sidebars()
{
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


function lp_register_query_vars($vars)
{
	//$vars[] = 'barrister_status';

	return $vars;
}
add_action('query_vars', 'lp_register_query_vars');


function lp_register_post_types()
{
	register_post_type('product', array(
		'labels'		=> array(
			'name'			   => __('Products'),
			'singular_name'	  => __('Product'),
			'add_new'			=> __('Add New'),
			'add_new_item'	   => __('Add New Product'),
			'edit_item'		  => __('Edit Product'),
			'new_item'		   => __('New Product'),
			'all_items'		  => __('All Products'),
			'view_item'		  => __('View Product'),
			'search_items'	   => __('Search Product'),
			'not_found'		  => __('No Products found'),
			'not_found_in_trash' => __('No Products found in the Trash'),
			'parent_item_colon'  => '',
			'menu_name'		  => 'Products'
		),
		'public'		=> true,
		'supports'	  => array('title', 'thumbnail'),
		'has_archive'   => 'all-products',
		'menu_icon'	 => 'dashicons-cart',
		'rewrite'	   => array('slug' => 'product', 'with_front' => true),
	));
	register_post_type('project', array(
		'labels'		=> array(
			'name'			   => __('Projects'),
			'singular_name'	  => __('Project'),
			'add_new'			=> __('Add New'),
			'add_new_item'	   => __('Add New Project'),
			'edit_item'		  => __('Edit Project'),
			'new_item'		   => __('New Project'),
			'all_items'		  => __('All Projects'),
			'view_item'		  => __('View Project'),
			'search_items'	   => __('Search Project'),
			'not_found'		  => __('No Projects found'),
			'not_found_in_trash' => __('No Projects found in the Trash'),
			'parent_item_colon'  => '',
			'menu_name'		  => 'Projects'
		),
		'public'		=> true,
		'supports'	  => array('title', 'thumbnail'),
		'has_archive'   => 'all-projects',
		'menu_icon'	 => 'dashicons-hammer',
		'rewrite'	   => array('slug' => 'project', 'with_front' => true),
	));
	register_post_type('resource', array(
		'labels'		=> array(
			'name'			   => __('Resources'),
			'singular_name'	  => __('Resource'),
			'add_new'			=> __('Add New'),
			'add_new_item'	   => __('Add New Resource'),
			'edit_item'		  => __('Edit Resource'),
			'new_item'		   => __('New Resource'),
			'all_items'		  => __('All Resources'),
			'view_item'		  => __('View Resource'),
			'search_items'	   => __('Search Resource'),
			'not_found'		  => __('No Resources found'),
			'not_found_in_trash' => __('No Resources found in the Trash'),
			'parent_item_colon'  => '',
			'menu_name'		  => 'Resources'
		),
		'public'		=> true,
		'supports'	  => array('title'),
		'has_archive'   => 'all-resources',
		'menu_icon'	 => 'dashicons-book-alt',
		'rewrite'	   => array('slug' => 'resource', 'with_front' => true),
	));

	register_taxonomy('resource-type', array('resource'), array(
		'labels'			=> array(
			'name'			  => _x('Resource Type', 'taxonomy general name'),
			'singular_name'	 => _x('Resource Type', 'taxonomy singular name'),
			'search_items'	  => __('Search Resource Type'),
			'all_items'		 => __('All Resource Type'),
			'parent_item'	   => __('Parent Resource Type'),
			'parent_item_colon' => __('Parent Resource Type:'),
			'edit_item'		 => __('Edit Resource Type'),
			'update_item'	   => __('Update Resource Type'),
			'add_new_item'	  => __('Add New Resource Type'),
			'new_item_name'	 => __('New Resource Type Name'),
			'menu_name'		 => __('Resource Type'),
		),
		'hierarchical'	  => true,
		'show_ui'		   => true,
		'show_in_menu'	  => true,
	));
	register_post_type('blog', array(
		'labels'		=> array(
			'name'			   => __('Blogs'),
			'singular_name'	  => __('Blog'),
			'add_new'			=> __('Add New'),
			'add_new_item'	   => __('Add New Blog'),
			'edit_item'		  => __('Edit Blog'),
			'new_item'		   => __('New Blog'),
			'all_items'		  => __('All Blogs'),
			'view_item'		  => __('View Blog'),
			'search_items'	   => __('Search Blog'),
			'not_found'		  => __('No Blogs found'),
			'not_found_in_trash' => __('No Blogs found in the Trash'),
			'parent_item_colon'  => '',
			'menu_name'		  => 'Blogs'
		),
		'public'		=> true,
		'supports'	  => array('title', 'thumbnail', 'excerpt'),
		'has_archive'   => 'all-blogs',
		'menu_icon'	 => 'dashicons-welcome-write-blog',
		'rewrite'	   => array('slug' => 'blog', 'with_front' => true),
	));

	register_taxonomy('blog-type', array('blog'), array(
		'labels'			=> array(
			'name'			  => _x('Blog Type', 'taxonomy general name'),
			'singular_name'	 => _x('Blog Type', 'taxonomy singular name'),
			'search_items'	  => __('Search Blog Type'),
			'all_items'		 => __('All Blog Type'),
			'parent_item'	   => __('Parent Blog Type'),
			'parent_item_colon' => __('Parent Blog Type:'),
			'edit_item'		 => __('Edit Blog Type'),
			'update_item'	   => __('Update Blog Type'),
			'add_new_item'	  => __('Add New Blog Type'),
			'new_item_name'	 => __('New Blog Type Name'),
			'menu_name'		 => __('Blog Type'),
		),
		'hierarchical'	  => true,
		'show_ui'		   => true,
		'show_in_menu'	  => true,
	));

	register_post_type('company', array(
		'labels'		=> array(
			'name'			   => __('Companys'),
			'singular_name'	  => __('Company'),
			'add_new'			=> __('Add New'),
			'add_new_item'	   => __('Add New Company'),
			'edit_item'		  => __('Edit Company'),
			'new_item'		   => __('New Company'),
			'all_items'		  => __('All Companys'),
			'view_item'		  => __('View Company'),
			'search_items'	   => __('Search Company'),
			'not_found'		  => __('No Companys found'),
			'not_found_in_trash' => __('No Companys found in the Trash'),
			'parent_item_colon'  => '',
			'menu_name'		  => 'Companys'
		),
		'public'		=> true,
		// 'supports'	  => array('title', 'thumbnail','excerpt'),
		'supports'	  => array('title', 'thumbnail'),
		// 'has_archive'   => 'companys',
		'menu_icon'	 => 'dashicons-sticky',
		'rewrite'	   => array('slug' => 'company', 'with_front' => true),
	));

	register_taxonomy('company-state', array('company'), array(
		'labels'			=> array(
			'name'			  => _x('Company State', 'taxonomy general name'),
			'singular_name'	 => _x('Company State', 'taxonomy singular name'),
			'search_items'	  => __('Search Company State'),
			'all_items'		 => __('All Company State'),
			'parent_item'	   => __('Parent Company State'),
			'parent_item_colon' => __('Parent Company State:'),
			'edit_item'		 => __('Edit Company State'),
			'update_item'	   => __('Update Company State'),
			'add_new_item'	  => __('Add New Company State'),
			'new_item_name'	 => __('New Company State Name'),
			'menu_name'		 => __('Company State'),
		),
		'hierarchical'	  => true,
		'show_ui'		   => true,
		'show_in_menu'	  => true,
	));
}
add_action('init', 'lp_register_post_types');

function lp_register_taxonomies()
{
	// register_taxonomy('project-sector', array('project'), array(
	// 	'labels'			=> array(
	// 		'name'			  => _x('Project Sectors', 'taxonomy general name'),
	// 		'singular_name'	 => _x('Project Sector', 'taxonomy singular name'),
	// 		'search_items'	  => __('Search Project Sectors'),
	// 		'all_items'		 => __('All Project Sectors'),
	// 		'parent_item'	   => __('Parent Project Sector'),
	// 		'parent_item_colon' => __('Parent Project Sector:'),
	// 		'edit_item'		 => __('Edit Project Sector'),
	// 		'update_item'	   => __('Update Project Sector'),
	// 		'add_new_item'	  => __('Add New Project Sector'),
	// 		'new_item_name'	 => __('New Project Sector Name'),
	// 		'menu_name'		 => __('Project Sectors'),
	// 	),
	// 	'hierarchical'	  => true,
	// 	'show_ui'		   => true,
	// 	'show_in_menu'	  => true,
	// ));

	// register_taxonomy('project-type', array('project'), array(
	// 	'labels'			=> array(
	// 		'name'			  => _x('Project Types', 'taxonomy general name'),
	// 		'singular_name'	 => _x('Project Type', 'taxonomy singular name'),
	// 		'search_items'	  => __('Search Project Types'),
	// 		'all_items'		 => __('All Project Types'),
	// 		'parent_item'	   => __('Parent Project Type'),
	// 		'parent_item_colon' => __('Parent Project Type:'),
	// 		'edit_item'		 => __('Edit Project Type'),
	// 		'update_item'	   => __('Update Project Type'),
	// 		'add_new_item'	  => __('Add New Project Type'),
	// 		'new_item_name'	 => __('New Project Type Name'),
	// 		'menu_name'		 => __('Project Types'),
	// 	),
	// 	'hierarchical'	  => true,
	// 	'show_ui'		   => true,
	// 	'show_in_menu'	  => true,
	// ));
}
add_action('init', 'lp_register_taxonomies');

function lp_register_rewrite_rules()
{
	add_rewrite_rule('^projects/([^/]+)/?$', 'index.php?post_type=project&project-sector=$matches[1]]', 'top');
}
add_action('init', 'lp_register_rewrite_rules');


add_shortcode('learnmore', 'learn_more_func');
function learn_more_func($atts)
{
	return "<div class=\"learn__more\">
	Learn More
  </div>";
}
