<?php

function lp_enqueue_frontend()
{
	// Dequeue existing scripts
	wp_dequeue_script('jquery');
	wp_deregister_script('jquery');

	// Third-party styles

	// Our styles
	wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');

	wp_enqueue_style('app-css', get_template_directory_uri() . '/dist/app.css');

	// Third-party scripts
	// if (defined('LP_GMAPS_KEY') && LP_GMAPS_KEY) {
	// 	wp_enqueue_script('gmaps_api', 'https://maps.googleapis.com/maps/api/js?key=' . LP_GMAPS_KEY, '', '', true);
	// }

	wp_enqueue_script('isotope-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array('jquery'), '', true);
	wp_enqueue_script('imagesloaded-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js', array('jquery'), '', true);

	// Our scripts
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', '', '', true);
	wp_enqueue_script('app-script',
		get_template_directory_uri() . '/dist/app.js',
		array('jquery', 'isotope-script', 'imagesloaded-script'),
		'',
		true
	);

	wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '', true);
	wp_enqueue_script('vanilla-infinite-marquee', 'https://cdn.jsdelivr.net/npm/vanilla-infinite-marquee@1.0.12/infinite-marquee.bundle.js', '', '', true);
	// wp_enqueue_script('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', '', '', true);
	// wp_enqueue_script('splide-extension', 'https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js', array('splide'), '', true);
	// wp_enqueue_script('background-video', 'https://rawgit.com/BGStock/jquery-background-video/master/jquery.background-video.js', array('jquery'), '', true);

	// wp_enqueue_style(
	// 	'splide-css',
	// 	'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css'
	// );
	wp_enqueue_style(
		'vanilla-infinite-marquee-style',
		'https://cdn.jsdelivr.net/npm/vanilla-infinite-marquee@1.0.12/infinite-marquee.min.css'
	);
	wp_enqueue_style(
		'lity-style',
		get_template_directory_uri() . '/css/lity.min.css'
	);
	wp_enqueue_script('lity-script', get_template_directory_uri() . '/js/lity.min.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'lp_enqueue_frontend');

function lp_enqueue_admin()
{
	add_editor_style(get_template_directory_uri() . '/css/editor-styles.css');
	wp_enqueue_style('lity-style', get_template_directory_uri() . '/css/lity.min.css');
	wp_enqueue_script('lity-script', get_template_directory_uri() . '/js/lity.min.js', array('jquery'), '', true);
	wp_enqueue_style('acf-tip-style', get_template_directory_uri() . '/css/acf-tip.css');
	wp_enqueue_script('acf-tip-script', get_template_directory_uri() . '/js/acf-tip.js', array('jquery'), '', true);
}
add_action('admin_init', 'lp_enqueue_admin');
