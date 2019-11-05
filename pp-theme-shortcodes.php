<?php
/*
Plugin Name: PP Theme Shortcodes
Description: A backup of the shortcodes for the WA website
Version: 1.0
Author: Tobi
License: GPL2
*/

//enqueueing scripts and styles
function plugin_scripts(){
    wp_enqueue_style( 'stylesheet', plugins_url( 'inc/style.css' , __FILE__ ), false, '1.0', 'all' );
}
add_action( "wp_enqueue_scripts", "plugin_scripts" );

include( plugin_dir_path( __FILE__ ) . 'inc/shortcodes.php');
