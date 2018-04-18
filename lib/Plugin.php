<?php

namespace [namespace];

/**
 * The core plugin class.
 *
 * This is used to define internationalization, dashboard-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @package [vendor_name]
 * @since   [initial_version]
 */
class Plugin {

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since  [initial_version]
	 * @access protected
	 * @var    string $name
	 */
	protected $name;

	/**
	 * The current version of the plugin.
	 *
	 * @since  [initial_version]
	 * @access protected
	 * @var    string $version
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * @since [initial_version]
	 * @param string $name    The plugin identifier.
	 * @param string $version Current version of the plugin.
	 */
	public function __construct( $name, $version ) {
		$this->name    = $name;
		$this->version = $version;
	}

	/**
	 * Run the loader to execute all the hooks with WordPress.
	 *
	 * Load the dependencies, define the locale, and set the hooks for the
	 * Dashboard and the public-facing side of the site.
	 *
	 * @since [initial_version]
	 */
	public function run() {
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_frontend_hooks();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since  [initial_version]
	 * @return string The name of the plugin.
	 */
	public function get_name() {
		return $this->name;
	}

	/**
	 * Returns the version number of the plugin.
	 *
	 * @since  [initial_version]
	 * @return string The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the I18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since  [initial_version]
	 * @access private
	 */
	private function set_locale() {
		$i18n = new I18n();
		$i18n->set_domain( $this->get_name() );
		$i18n->load_plugin_textdomain();
	}

	/**
	 * Register all of the hooks related to the dashboard functionality
	 * of the plugin.
	 *
	 * @since  [initial_version]
	 * @access private
	 */
	private function define_admin_hooks() {

		$components = [
			'admin' => new Admin( $this ),
		];

		foreach ( $components as $component ) {
			$component->register();
		}
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since  [initial_version]
	 * @access private
	 */
	private function define_frontend_hooks() {

		$components = [
			'frontend' => new Frontend( $this ),
		];

		foreach ( $components as $component ) {
			$component->register();
		}
	}
}
