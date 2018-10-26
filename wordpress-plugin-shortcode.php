<?php
/*
Plugin Name: Cloeve Tech WordPress Plugin Shortcode
description: A simple project for a custom WordPress plugin with a shortcode.
Version: 1.0
Author: Cloeve Tech
Author URI: https://cloeve.com/tech
*/

// prevent direct access
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// require upgrade
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );


class CloeveTech_WordPress_Plugin_Shortcode {

    // class instance
    static $instance;

    // class constructor
    public function __construct() {
        // TODO: add plugin filters, actions, shortcodes, etc

        // add shortcode name & function handler
        add_shortcode( 'my_custom_plugin_shortcode_name', [__CLASS__, 'shortcode_handler'] );
    }


    /**
     * shortcode_handler
     * @param $attributes
     * @param $content
     * @param $tag
     * @return string
     */
    public static function shortcode_handler( $attributes, $content, $tag ){

        // normalize attribute keys, lowercase
        $attributes = array_change_key_case((array)$attributes, CASE_LOWER);

        // check for key
        $name = key_exists('name', $attributes) ? (string)$attributes['name'] : 'Bob';

        // TODO: add more validation based on expected inputs
        $name = sanitize_text_field($name);

        // start ob to return
        ob_start();?>

        <!-- this is our visible shortcode output -->
        <h1>Hello World</h1>
        <p>My name is <?php echo esc_html($name);?></p>

        <?php

        // return the html
        return ob_get_clean();
    }


    /** Singleton instance */
    public static function get_instance() {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}


// load plugin
add_action( 'plugins_loaded', function () {
    CloeveTech_WordPress_Plugin_Shortcode::get_instance();
} );