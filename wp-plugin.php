<?php
/**
 * @wordpress-plugin
 * Plugin Name: [plugin_name]
 * Plugin URI:  [plugin_url]
 * Description: [plugin_description]
 * Version:     [initial_version]
 * Author:      [author_name]
 * Author URI:  [author_url]
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: [text_domain]
 * Domain Path: /languages
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in lib/Activator.php
 */
\register_activation_hook( __FILE__, '\[namespace]\Activator::activate' );

/**
 * The code that runs during plugin deactivation.
 * This action is documented in lib/Deactivator.php
 */
\register_deactivation_hook( __FILE__, '\[namespace]\Deactivator::deactivate' );

/**
 * Begins execution of the plugin.
 *
 * @since [initial_version]
 */
\add_action( 'plugins_loaded', function () {
	$plugin = new [namespace]\Plugin( '[text_domain]', '[initial_version]' );
	$plugin->run();
} );
