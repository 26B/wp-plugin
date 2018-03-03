<?php

namespace [namespace];

/**
 * Taxonomy handler.
 *
 * @package [vendor_name]
 * @since   [initial_version]
 */
abstract class Taxonomy {

	/**
	 * The plugin's instance.
	 *
	 * @since  [initial_version]
	 * @access protected
	 * @var    Plugin
	 */
	protected $plugin;

	/**
	 * The taxonomy slug.
	 *
	 * @since  [initial_version]
	 * @access protected
	 * @var    string
	 */
	protected $slug;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since [initial_version]
	 * @param Plugin $plugin This plugin's instance.
	 * @param string $slug   The taxonomy slug.
	 */
	public function __construct( Plugin $plugin, $slug ) {
		$this->plugin = $plugin;
		$this->slug   = $slug;
	}

	/**
	 * Register custom taxonomy.
	 *
	 * @since [initial_version]
	 */
	abstract public function register();
}
