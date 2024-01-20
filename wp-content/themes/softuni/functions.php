<?php 
    
    /**
 * Never worry about cache again!
 */
function softuni_js($hook) {

	// // create my own version codes
	// $my_js_ver  = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'js/custom.js' ));
	// $my_css_ver = date("ymd-Gis", filemtime( plugin_dir_path( __FILE__ ) . 'style.css' ));

    $args = array( 
        'in_footer' => true,
        'strategy' => 'defer',
    );

    // if (! defined( 'SOFTUNI_ASSETS_VER' ) ) {
    //     DEFINE( 'SOFTUNI_ASSETS_VER', filetime( get_template_directory_uri() . '/sass/libs/_settings.scss'));
    // }
	 
	wp_enqueue_script( 'html5', get_template_directory_uri() . '/js/ie-support/html5.js', array(),'1.0.0' );
    wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/ie-support/respond.js', array(),'1.0.0' );
    wp_enqueue_script( 'jquery-1-11-1-min', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', array(),'1.0.0' );
    wp_enqueue_script( 'app-min', get_template_directory_uri() . '/js/min/app-min.js', array(),'1.0.0' );
    wp_enqueue_script( 'plugins-min', get_template_directory_uri() . '/js/min/plugins-min.js', array(),'1.0.0' );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(),'1.0.0', $args );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array(),'1.0.0', $args );

    wp_enqueue_style( 'style.scss', 	get_template_directory_uri() . '/sass/style.scss', false,   '1.0.0' );
	wp_enqueue_style( 'content.scss', 	get_template_directory_uri() . '/sass/layout/_content.scss', false,   '1.0.0' );
    wp_enqueue_style( 'footer.scss', 	get_template_directory_uri() . '/sass/layout/_footer.scss', false,   '1.0.0' );
    wp_enqueue_style( 'header.scss', 	get_template_directory_uri() . '/sass/layout/_header.scss', false,   '1.0.0' );
    wp_enqueue_style( 'grid.scss', 	get_template_directory_uri() . '/sass/libs/bootstrap-grid/_grid.scss', false,   '1.0.0' );
    wp_enqueue_style( 'mixins.scss', 	get_template_directory_uri() . '/sass/libs/bootstrap-grid/_mixins.scss', false,   '1.0.0' );
    wp_enqueue_style( 'settings.scss', 	get_template_directory_uri() . '/sass/libs/bootstrap-grid/_settings.scss', false,   '1.0.0' );
    wp_enqueue_style( 'components.scss', 	get_template_directory_uri() . '/sass/libs/_components.scss', false,   '1.0.0' );
    wp_enqueue_style( 'global.scss', 	get_template_directory_uri() . '/sass/libs/_global.scss', false,   '1.0.0' );
    wp_enqueue_style( 'mixins.scss', 	get_template_directory_uri() . '/sass/libs/_mixins.scss', false,   '1.0.0' );
    wp_enqueue_style( 'normalize.scss', 	get_template_directory_uri() . '/sass/libs/_normalize.scss', false,   '1.0.0' );
    wp_enqueue_style( 'main-settings.scss', 	get_template_directory_uri() . '/sass/libs/_settings.scss', false, '1.0.0' );
    
	//wp_enqueue_style ( 'my_css' );

}
add_action('wp_enqueue_scripts', 'softuni_js');

/**
 * Register our navigation menus
 * 
 * @return void
 */

function softuni_register_nav_menus() {
    register_nav_menus(
        array(
            'primary_menu'          => __( 'Primary Menu', 'softuni' ),
            'footer_menu_site_info' => __( 'Footer Menu Site Info', 'softuni' ),
        )
    );
    }

    add_action( 'after_setup_theme', 'softuni_register_nav_menus' );

    /**
     * Our sidebars here
     * 
     * @return void
     */

function softuni_sidebars() {
    register_sidebar(
        array(
            'id' => 'footer-1',
            'name' => __( 'Footer 01' ),
            'description' => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
/* Repeat register_sidebar() code for additional sidebars. */
}

add_action( 'widgets_init', 'softuni_sidebars' );


?>