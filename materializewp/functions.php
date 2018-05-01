<?php
/*
 * MaterializeWP functions and definitions
 * 
 */

// Enqueue Scripts and Stylesheets
function materializewp_scripts() {
	wp_enqueue_style( 'materialize', get_theme_file_uri() . '/assets/css/materialize.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'custom_css', get_theme_file_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'materialize-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', '1.0.0', 'all' );
	wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto', '1.0.0', 'all' );
	wp_enqueue_script( 'materialize', get_theme_file_uri() . '/assets/js/materialize.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'init_js', get_theme_file_uri() . '/assets/js/init.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'materializewp_scripts' );

// Includes
require get_template_directory() . '/inc/functions/theme-support.php';
require get_template_directory() . '/inc/functions/admin.php';
require get_template_directory() . '/inc/functions/walker.php';
require get_template_directory() . '/inc/functions/widgets.php';
require get_template_directory() . '/inc/functions/pagination.php';