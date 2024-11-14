<?php
/**
 * Disable admin bar for all users except administrator
 *
 * Hides the admin bar for all the users except administrators.
 *
 * @package WP Code Snippets
 * @version 1.0.0
 * @author Junaid Bin Jaman <junaid@allnextver.com>
 * @link
 */

add_action(
	'after_setup_theme',
	function () {
		$current_user = wp_get_current_user();

		if ( empty( $current_user->roles ) ) {
			return false;
		}

		if ( 'administrator' !== $current_user->roles[0] ) {
				add_filter( 'show_admin_bar', '__return_false' );
		}
	}
);
