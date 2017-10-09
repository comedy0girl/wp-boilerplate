<?php
   function register_my_menus() {
	  register_nav_menus(
	    array(
	    	'header-menu' => __( 'Header Menu' ),
	      	'header-left-menu' => __( 'Header Left Menu' ),
	      	'header-right-menu' => __( 'Header Right Menu' ),
	      	'footer-menu' => __( 'Footer Menu' ),
	      	'social-menu'  => __( 'Social Media Menu' )
	    )
	  );
	}
	add_action( 'init', 'register_my_menus' );

	add_theme_support( 'custom-logo' );
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	function theme_prefix_the_custom_logo() {
	
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	}

	add_filter( 'image_size_names_choose', 'my_custom_sizes' );
 
	function my_custom_sizes( $sizes ) {
	    return array_merge( $sizes, array(
	        'front-page-img' => __( 'Front Page Boxes' ),
	    ) );
	}


// function masonry_scripts() {
// 	wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('images-loaded'), '1.0.0', true );
//     wp_enqueue_script( 'images-loaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '1.0.0', true );
// }
// add_action( 'wp_enqueue_scripts', 'masonry_scripts' );




	add_filter( 'use_default_gallery_style', '__return_false' );

		function adjust_image_sizes_attr( $sizes, $size ) {
	   $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
	   return $sizes;
	}
	add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );   
	add_image_size( 'front-page-img', 250, 250, array( 'center', 'center' ) );
	add_image_size('large-img', 1000, 702);      
	add_image_size('small-img', 200, 200);


?>