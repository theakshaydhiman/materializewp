<?php 

// ADMIN MENU

function mwp_admin_pages() {

	// Admin Page.
	add_menu_page('MaterializeWP Theme Options', 'MaterializeWP', 'manage_options', 'materializewp', 'mwp_general', 'dashicons-arrow-right-alt2', 3 );

	// Sub Pages.
	add_submenu_page('materializewp', 'MaterializeWP Theme Options', 'General', 'manage_options',	'materializewp', 'mwp_general');

}
add_action('admin_menu', 'mwp_admin_pages');

function mwp_general() {
	require_once( get_template_directory() . '/inc/templates/material-admin.php');
}