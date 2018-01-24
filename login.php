<?php
/**
 * Plugin Name: Register Login
 * Description: Use this plugin for Register and Login.
 * Plugin URI:
 * Author: Mohammad Imran
 * Author URI: http://imran71.ga/
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: x_speed
 */

if ( !defined('ABSPATH') ) die( 'Sorry! This is not your place!' );


//----------------------------------------------------------------------
// Core constant defination
//----------------------------------------------------------------------
if (!defined('X_SPEED_PLUGIN_VERSION')) define( 'X_SPEED_PLUGIN_VERSION', '1.0.0' );
if (!defined('X_SPEED_PLUGIN_BASENAME')) define( 'X_SPEED_PLUGIN_BASENAME', plugin_basename(__FILE__) );
if (!defined('X_SPEED_MINIMUM_WP_VERSION')) define( 'X_SPEED_MINIMUM_WP_VERSION', '3.5' );
if (!defined('X_SPEED_PLUGIN_DIR')) define( 'X_SPEED_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
if (!defined('X_SPEED_PLUGIN_URI')) define( 'X_SPEED_PLUGIN_URI', plugins_url('', __FILE__) );
if (!defined('X_SPEED_PLUGIN_TEXTDOMAIN')) define( 'X_SPEED_PLUGIN_TEXTDOMAIN', 'x_speed' );


//----------------------------------------------------------------------
// Including Files
//----------------------------------------------------------------------


//add option page
require_once X_SPEED_PLUGIN_DIR . '/inc/register_shortcode.php';

//register front end script & style
function x_speed_enqueue_styles(){

    //register bootstrap
    wp_register_style('weather-bootstrap',X_SPEED_PLUGIN_URI .'/asset/css/bootstrap.min.css',true,X_SPEED_PLUGIN_VERSION);
    wp_enqueue_style ('weather-bootstrap');

    //register style sheet
    wp_register_style('reg-log-style',X_SPEED_PLUGIN_URI .'/asset/css/reg-log-style.css',true,X_SPEED_PLUGIN_VERSION);
    wp_enqueue_style ('reg-log-style');

    //js file for admin
    wp_register_script('js-reg-log-style',X_SPEED_PLUGIN_URI .'/asset/js/reg-log-style.js',array('jquery'),X_SPEED_PLUGIN_VERSION,true);
    wp_enqueue_script ('js-reg-log-style');

}
add_action('wp_enqueue_scripts','x_speed_enqueue_styles');
