<?php

namespace [namespace];

/**
 * The public-facing functionality of the plugin.
 *
 * @package [vendor_name]
 * @since   [initial_version]
 */
class Frontend {

	/**
	 * The plugin's instance.
	 *
	 * @since  [initial_version]
	 * @access private
	 * @var    Plugin
	 */
	private $plugin;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since [initial_version]
	 * @param Plugin $plugin This plugin's instance.
	 */
	public function __construct( Plugin $plugin ) {
		$this->plugin = $plugin;
	}

	/**
	 * Register hooks.
	 *
	 * @since [initial_version]
	 */
	public function register() {
	}
}
