<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link [plugin_url]
 *
 * @package [vendor_name]
 * @since   [plugin_initial_version]
 */

namespace [namespace];

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since [plugin_initial_version]
 */
class I18n {

	/**
	 * The domain specified for this plugin.
	 *
	 * @since  [plugin_initial_version]
	 * @access private
	 * @var    string $domain The domain identifier for this plugin.
	 */
	private $domain;

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since [plugin_initial_version]
	 */
	public function load_plugin_textdomain() {
		\load_plugin_textdomain(
			$this->domain,
			false,
			dirname( dirname( \plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}

	/**
	 * Set the domain equal to that of the specified domain.
	 *
	 * @since [plugin_initial_version]
	 *
	 * @param string $domain The domain that represents the locale of this plugin.
	 */
	public function set_domain( $domain ) {
		$this->domain = $domain;
	}
}