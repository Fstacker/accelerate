<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/


// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
			wp_enqueue_style('accelerate-child-fonts', '//fonts.googleapis.com/css?family=Heebo:400,500,700|Open+Sans:400,600|Roboto:400,500,700&display=swap');
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// Function for post types
function create_custom_post_types() {
//	create a case study custom post type
		register_post_type('case_studies',
			array(
				'labels' => array(
						'name' => __( 'Case Studies' ),
						'singular_name' => __( 'Case Study' )
					),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array( 
					'slug' => 'case-studies'
				),
			)
		);
	}
//	Hook this custom post type function into the theme
add_action( 'init', 'create_custom_post_types' );


//  Function for services described in the About page
function create_custom_post_services() {
	// create a services offered custom post type
	register_post_type('services',
		array(
			'labels'	=> array(
				'name'	=> __( 'Services' ),
				'singular_name'	=> __( 'Service' )
				),
			'public'	=> true,
			'has_archive'	=> false,
			'rewrite'	=> array(
				'slug'	=> 'services'
			),
		)
	);
}
//  hook function into the theme
add_action( 'init', 'create_custom_post_services');