<?php 


// function allowing bootstrap in css/js
function loading_bootstrap(){
    wp_enqueue_style(
        'bootstrap-css',
        get_theme_file_uri('assets\bootstrap-4.1.3-dist\css\bootstrap.min.css'),
        array(),
        '',
        'all'
    );
    wp_enqueue_script(
        'bootstrap-js',
        get_theme_file_uri('assets\bootstrap-4.1.3-dist\js\bootstrap.min.js'),
        array('jquery'),
        '',
        true
    );
}
// below is our google fonts
function rome_travel_fonts() {
    // Preconnect for performance
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    
    // Google Font: Lora
    wp_enqueue_style(
        'rome-travel-lora', 
        'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap', 
        array(), 
        null
    );
}
add_action('wp_head', 'rome_travel_fonts');

// our theme stylesheet
function rome_style(){
    wp_enqueue_style(
        'rome_primary_stylesheet', //slug
        get_stylesheet_uri(), //gets the URL of the stylesheets
        array(), //depedencies, none here
        wp_get_theme()-> get('version'), //version, used for caches busting
        'all' //media type
    );
}
function mytheme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');
add_action('wp_enqueue_scripts', 'rome_style');

// 
function rome_travel_menus() {

    // Footer Menus
    register_nav_menu('footer-menu-1', __('Footer Menu 1', 'rome-travel'));
    register_nav_menu('footer-menu-2', __('Footer Menu 2', 'rome-travel'));
    register_nav_menu('footer-menu-3', __('Footer Menu 3', 'rome-travel'));
}
add_action('after_setup_theme', 'rome_travel_menus');



function registering_sidebars(){
    register_sidebar(array(
        'id' => 'my_sidebar',
        'name' => 'New Sidebar',
        'description' => 'This is my first sidebar',
        'before_widget' => '<div id="%1$s" class="widget-%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    )); //repeat as many sidebars as you need
}
add_action('widgets_init', 'registering_sidebars');


function mytheme_enqueue_assets() {
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css'
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');





