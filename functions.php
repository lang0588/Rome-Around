<?php 
function rome_style(){
    wp_enqueue_style(
        'rome_primary_stylesheet', //slug
        get_stylesheet_uri(), //gets the URL of the stylesheets
        array(), //depedencies, none here
        wp_get_theme()-> get('version'), //version, used for caches busting
        'all' //media type
    );
}
add_action('wp_enqueue_scripts', 'rome_style');
?>





// //add_action('hookName', 'functionName')

// function loading_bootstrap(){
//     wp_enqueue_style(
//         'bootstrap-css',
//         get_theme_file_uri('assets\bootstrap-4.1.3-dist\css\bootstrap.min.css'),
//         array(),
//         '',
//         'all'
//     );
//     wp_enqueue_script(
//         'bootstrap-js',
//         get_theme_file_uri('assets\bootstrap-4.1.3-dist\js\bootstrap.min.js'),
//         array('jquery'),
//         '',
//         true
//     );
// }

// add_action('wp_enqueue_scripts', 'loading_bootstrap');