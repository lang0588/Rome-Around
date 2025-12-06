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

// Header widget area
function rome_register_header_widget() {
    register_sidebar(array(
        'name'          => 'Header',
        'id'            => 'header-widget',
        'description'   => 'This widget displays above the entire header area.',
        'before_widget' => '<div class="header-widget-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="header-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'rome_register_header_widget');


// Footer widget area
function register_footer_widget() {
    register_sidebar(array(
        'name'          => 'Footer',
        'id'            => 'footer-widget',
        'description'   => 'widget that displays above the existing footer area.',
        'before_widget' => '<div class="footer-widget-area">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'register_footer_widget');



function contact_us($atts, $content){
    $name_atts = shortcode_atts(
        array(
            'link' => 'ww.thisisawebsite.com',
            'button_label' => 'Contact us',
            'class' => ''
        ),
        $atts,
        'contact_shortcode'
    );


    $content = '<a target="_blank" href="'.$name_atts['link'].'" class="'.$name_atts['class'].'">'.$name_atts['button_label'].'</a>';//conatins what should be outputted once the shortcode is called


    return $content;
}
add_shortcode('contact_shortcode', 'contact_us');//('shortcode tag', 'function with the definition of the shortcode')


// custom settings page

function mytheme_add_settings_page() {
    add_menu_page(
        'Theme Settings',          
        'Theme Settings',          
        'manage_options',          
        'mytheme-settings',        
        'dashicons-admin-generic', 
        61                         
    );
}
add_action('admin_menu', 'mytheme_add_settings_page');


// register settings

function mytheme_register_settings() {
    register_setting('mytheme_settings_group', 'mytheme_phone_number');
}
add_action('admin_init', 'mytheme_register_settings');


//settings page html

function mytheme_settings_page() { ?>
    <div class="wrap">
        <h1>Theme Settings</h1>

        <form method="post" action="options.php">
            <?php settings_fields('mytheme_settings_group'); ?>
            <?php do_settings_sections('mytheme_settings_group'); ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Header Telephone Number</th>
                    <td>
                        <input type="text" 
                               name="mytheme_phone_number" 
                               value="<?php echo esc_attr(get_option('mytheme_phone_number')); ?>" 
                               style="width:300px;" />
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
<?php }


