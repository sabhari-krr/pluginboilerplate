<?php

/**
 * Plugin Name: CodeGround
 * Plugin URI: https://localhost:7000/wp-admin/plugins.php
 * Description: This plugin registers a top level menu, and within that we can run php codes for learning purpose. All the learning purpose snippets are written using this plugin to keep track of the leaning & for future reference.
 * Version: 1.0.0
 * Author: Naruto Uzumaki
 * Slug: codeground
 * Text Domain: codeground
 * Requires at least: 4.9.0
 * Requires PHP: 7.0.1
 * Author URI: https://www.github.com/sabhari-krr
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Contributors: Sabhari Ayyappan
 */

defined('ABSPATH') or die();
defined('CG_PLUGIN_PATH') or define('CG_PLUGIN_PATH', __DIR__ . '/');


//Autoload the vendor
require_once __DIR__.'/vendor/autoload.php';

//echo '<script>console.log("CodeGround : Plugin activated successfully!!");</script>';
if(class_exists(\App\Router::class)){
    $router_instance = new \App\Router();
    $router_instance->init();
}


