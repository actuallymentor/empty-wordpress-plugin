<?php
/**
 * Plugin Name: Empty Plugin
 * Plugin URI: https://github.com/actuallymentor/empty-wordpress-plugin
 * Description: Empty plugin template.
 * Version: 0.0.0
 * Author: Mentor Palokaj
 * Author URI: https://www.skillcollector.com
 * License: MIT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Add styles and script

add_action( 'wp_enqueue_scripts', 'add_stylesheet_script' );
    function add_stylesheet_script() {
        wp_enqueue_style( 'prefix-style', plugins_url('styles.css', __FILE__) );
        wp_enqueue_style( 'prefix-style', plugins_url('actions.js', __FILE__) );
    }
?>