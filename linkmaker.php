<?php
/*
Plugin Name: LinkMaker
Plugin URI: https://fishdan.com/linkmaker
Description: Transforms specified hyperlinks into interactive elements for Wikipedia searches.
Version: 0.1.5
Author: Dan Fishman
Author URI: https://fishdan.com
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: linkmaker
Requires PHP: 7.4
Requires at least: 5.8
*/

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('linkmaker_fs')) {
    function linkmaker_fs() {
        global $linkmaker_fs;

        if (!isset($linkmaker_fs)) {
            require_once __DIR__ . '/vendor/freemius/start.php';
            $linkmaker_fs = fs_dynamic_init(array(
                'id'             => '21046',
                'slug'           => 'linkmaker',
                'type'           => 'plugin',
                'public_key'     => 'pk_32b32da022dddab87b1a7ae31ac67',
                'is_premium'     => false,
                'has_addons'     => false,
                'has_paid_plans' => false,
                'menu'           => array(
                    'slug'    => 'linkmaker',
                    'support' => false,
                ),
            ));
        }

        return $linkmaker_fs;
    }

    linkmaker_fs();
    do_action('linkmaker_fs_loaded');
}

if (!defined('LINKMAKER_VERSION')) {
    define('LINKMAKER_VERSION', '0.1.5');
}

// Enqueue the JavaScript and CSS files
function linkmaker_enqueue_scripts() {
    wp_enqueue_script('linkmaker-js', plugin_dir_url(__FILE__) . 'linkmaker.js', array(), LINKMAKER_VERSION, true);
    wp_enqueue_style('linkmaker-css', plugin_dir_url(__FILE__) . 'linkmaker.css', array(), LINKMAKER_VERSION);
}

add_action('wp_enqueue_scripts', 'linkmaker_enqueue_scripts');
?>
