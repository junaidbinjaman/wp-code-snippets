<?php
/**
 * Disable Admin Bar for Specific User Roles (e.g., Subscribers and Authors)
 *
 * Modify the snippet below to include the roles for which you want to disable the admin bar.
 *
 * @package WP Code Snippets
 * @version 1.0.0
 * @author Junaid Bin Jaman <junaid@allnextver.com>
 * @link
 */

add_action(
	'init',
	function () {
		$current_user = wp_get_current_user();

		if ( empty( $current_user->roles ) ) {
			return;
		}

		if ( 'subscriber' === $current_user->roles[0] || 'author' === $current_user->roles[0] ) {
				add_filter( 'show_admin_bar', '__return_false' );
		}
	}
);
