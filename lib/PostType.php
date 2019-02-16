<?php

namespace [namespace];

/**
 * Post type handler.
 *
 * @since [initial_version]
 */
abstract class PostType {

	/**
	 * The plugin's instance.
	 *
	 * @since  [initial_version]
	 * @access protected
	 * @var    Plugin
	 */
	protected $plugin;

	/**
	 * The custom post type slug.
	 *
	 * @since  [initial_version]
	 * @access protected
	 * @var    string
	 */
	protected $slug;

	/**
	 * A list of taxonomies associated with the custom post type.
	 *
	 * @since  [initial_version]
	 * @access protected
	 * @var    array
	 */
	protected $taxonomies = [];

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since [initial_version]
	 * @param Plugin $plugin     This plugin's instance.
	 * @param string $slug       The post type slug.
	 * @param array  $taxonomies A list of taxonomies associated with the post type.
	 */
	public function __construct( Plugin $plugin, $slug, $taxonomies = [] ) {
		$this->plugin     = $plugin;
		$this->slug       = $slug;
		$this->taxonomies = $taxonomies;
	}

	/**
	 * Register custom post type.
	 *
	 * @since [initial_version]
	 */
	abstract public function register();
}
