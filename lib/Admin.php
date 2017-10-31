<?php

namespace [namespace];

/**
 * The dashboard-specific functionality of the plugin
 *
 * @package [vendor_name]
 * @since   [initial_version]
 */
class Admin {

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
		\add_action( 'admin_init', [ $this, 'action_callback' ] );
	}

	/**
	 * My action callback.
	 *
	 * @since  [initial_version]
	 * @return void
	 */
	public function action_callback() {}
}
