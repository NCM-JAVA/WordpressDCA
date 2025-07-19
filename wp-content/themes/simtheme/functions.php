 <?php
 
function register_my_menus() {

register_nav_menus(


array(

'primary-menu' => __( 'Primary Menu' ),

'secondary-menu' => __( 'Secondary Menu' ),

'hindi-menu' => __( 'Hindi Menu' ),

// Add additional menu locations as needed

)
);
}

add_action( 'init', 'register_my_menus' );




/**
 * Including the widget area.
 */



function custom_font_resizer_script() {
    wp_enqueue_script('font-resizer', get_template_directory_uri() . '/js/font-resizer.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'custom_font_resizer_script');

/*total website views code*/
function getLocalIp()
{ return gethostbyname(trim(hostname)); }





