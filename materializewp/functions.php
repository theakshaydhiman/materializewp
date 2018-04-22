<?php

// Enqueue Scripts and Stylesheets

function material_enqueue_script() {
    wp_enqueue_style( 'materialize', get_theme_file_uri() . '/css/materialize.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'custom_css', get_theme_file_uri() . '/css/custom.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'materialize-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', '1.0.0', 'all' );
    wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto', '1.0.0', 'all' );
    wp_enqueue_script( 'materialize', get_theme_file_uri() . '/js/materialize.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'custom_js', get_theme_file_uri() . '/js/custom.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'material_enqueue_script' );

// Theme Support

function adm_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', "Primary Header Navigation");
    register_nav_menu('secondary', "Footer Navigation");
    register_nav_menu('social', "Social Links");

}

add_action('init','adm_theme_setup');

add_theme_support('custom-background');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));
add_theme_support('html5',array('comment-list', 'comment-form', 'search-form'));

// Widget locations
function adm_init_widgets($id){
    register_sidebar(array(
        'name'  =>  'Right Hand Sidebar',
        'id'    =>  'sidebar',
        'class' =>  'custom',
        'before_widget' =>  '<aside id="%1$s" class="sidebar-module col s12 m12 l3 offset-l1">',
        'after_widget'  =>  '</aside>',
        'before_title'  =>  '<h3>',
        'after_title'   =>  '</h3>'
    ));
}

add_action('widgets_init','adm_init_widgets');

// Excerpt length control
function set_excerpt_length(){
    return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Head function, remove wp version
function adm_remove_version() {
    return '';
}
add_filter('the_generator','adm_remove_version');

// Includes

require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/function-walker.php';


// Add class 'responsive-img' to all post images
function add_image_class($class){
    $class .= ' responsive-img';
    return $class;
}
add_filter('get_image_tag_class','add_image_class');