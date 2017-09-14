<?php
   function register_my_menus() {
	  register_nav_menus(
	    array(
	    	'header-menu' => __( 'Header Menu' ),
	      	'header-left-menu' => __( 'Header Left Menu' ),
	      	'header-right-menu' => __( 'Header Right Menu' ),
	      	'footer-menu' => __( 'Footer Menu' )
	    )
	  );
	}
	add_action( 'init', 'register_my_menus' );



add_filter( 'use_default_gallery_style', '__return_false' );




	function adjust_image_sizes_attr( $sizes, $size ) {
	   $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';
	   return $sizes;
	}
	add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 );


	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );   

	add_image_size( 'latest-port-size', 250, 250, array( 'center', 'center' ) );
	add_image_size('large-img', 1000, 702);      
	add_image_size('small-img', 200, 200);


@ini_set( 'upload_max_size' , '100M' );
@ini_set( 'post_max_size', '100M');
@ini_set( 'max_execution_time', '300' );


?>