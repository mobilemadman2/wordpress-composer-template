<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

// Define custom wp-content dir
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
// Define custom wp-content URL
define('WP_CONTENT_URL', 'http://127.0.0.1:8000/wp-content');

// Define Plugin DIR
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/wp-content/plugins');
// Define Plugin URL
define('WP_PLUGIN_URL', 'http://127.0.0.1:8000/wp-content/plugins');
// Define this constant to solve possible compatability issues
define('PLUGINDIR', WP_PLUGIN_URL);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
