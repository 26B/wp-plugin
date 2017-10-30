<?php

namespace [namespace];

/**
 * Fired during plugin deactivation
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @package [vendor_name]
 * @since   [initial_version]
 */
class Deactivator {

	/**
	 * Deactivation handler.
	 *
	 * @since [initial_version]
	 * @param bool network_wide True if WPMU superadmin uses "Network Deactivate" action,
	 *                          false if WPMU is disabled or plugin is deactivated on an
	 *                          individual blog.
	 */
	public static function deactivate( $network_wide = false ) {
		if ( $network_wide && \is_multisite() ) {

			$sites = \get_sites( array(
				'number' => false,
			) );

			foreach ( $sites as $site ) {
				\switch_to_blog( $site['blog_id'] );
				static::single_deactivate( $network_wide );
			}

			\restore_current_blog();
			return;
		}

		static::single_deactivate( $network_wide );
	}

	/**
	 * Single deactivation handler.
	 *
	 * @since [initial_version]
	 * @param bool $network_wide True if WPMU superadmin uses "Network Deactivate" action,
	 *                           false if WPMU is disabled or plugin is deactivated on an
	 *                           individual blog.
	 */
	public static function single_deactivate( $network_wide ) {}
}
