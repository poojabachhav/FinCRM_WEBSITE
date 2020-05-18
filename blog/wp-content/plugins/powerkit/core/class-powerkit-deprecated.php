<?php
/**
 * Deprecated features and migration functions
 *
 * @package    Powerkit
 * @subpackage Core
 */

/**
 * Migration
 *
 * @param string $current Current version.
 * @param string $new     New version.
 */
add_action( 'powerkit_plugin_upgrade', function ( $current, $new ) {
	/* Migration to 2.0.7 */
	if ( version_compare( $current, '2.0.7', '<' ) ) {
		require_once POWERKIT_PATH . 'modules/post-views/helpers/db-powerkit-post-views.php';

		$post_views_db = new Powerkit_Post_Views_DB();

		$post_views_db->activate_single();
	}
}, 10, 2 );
