<?php 

// ADMIN PAGE

function adm_add_admin_page() {

	add_menu_page('Material Theme Options', 'Material Theme', 'manage_options', 'material', 'material_theme_create_page', 'dashicons-admin-customizer', 3 );

	add_submenu_page('material', 'Material Theme Options', 'General', 'manage_options',	'material', 'material_theme_create_page');
	add_submenu_page('material', 'Material CSS', 'Custom CSS', 'manage_options', 'material-css', 'material_theme_css_page');


}
add_action('admin_menu', 'adm_add_admin_page');

function material_theme_create_page() {
	require_once( get_template_directory() . '/inc/templates/material-admin.php');
}

function material_theme_css_page() {
	require_once( get_template_directory() . '/inc/templates/material-admin.php');
}