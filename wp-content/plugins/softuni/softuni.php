<?php
/*
* Plugin Name: SoftUni plugin
* Plugin URI: https://softuni.bg
* Description: Our first plugin for the course
* Version: 1.0.0
* Requires at least: 5.0
* Requires PHP: 8.0
* Author: SoftUni
* Author URI: https://softuni.bg/
* License: GPL v2 or later
* License URI:
https://www.gnu.org/licenses/gpl-2.0.html
* Update URI: https://example.com/myplugin/
* Text Domain: softuni
* Domain Path: /languages
*/

include 'includes/cpt-moss.php';
include 'includes/functions.php';

/**
 * Enqueue all of the assets for my plugin
 * 
 * @return void
 */
function su_moss_enqueue() {

    wp_enqueue_script( 'moss-script', plugins_url( '/assets/js/script.js', __FILE__ ), array( 'jquery' ), 1.0 );

    wp_localize_script( 'moss-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action('wp_enqueue_scripts', 'su_moss_enqueue' );