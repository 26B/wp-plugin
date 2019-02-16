<?php

namespace [namespace];

/**
 * The public-facing functionality of the plugin.
 *
 * @since [initial_version]
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
		\add_action( 'init', [ $this, 'action_callback' ] );
	}

	/**
	 * My action callback.
	 *
	 * @since  [initial_version]
	 * @return void
	 */
	public function action_callback() {}
}
