<?php
/**
 * Redirect a user to a specific URL after successful login through wp login form.
 *
 * PLEASE NOTE: It doesn't work when users login using wc login form.
 * So Please use the wc login redirect snippets.
 *
 * @package WP Code Snippets
 * @version 1.0.1
 * @author Junaid Bin Jaman <junaid@allnextver.com>
 * @link
 */

/**
 * Redirect user after successful wp login.
 *
 * Duplicate one of the if condition and modify as your need.
 *
 * @param string $redirect_to_url URL to redirect to.
 * @param string $request_url URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
function sofi_wpcs_callback( $redirect_to_url, $request_url, $user ) {

	if ( ! isset( $user->roles ) || ! is_array( $user->roles ) ) {
		// Return default URL if user roles are not set or not an array.
		return $redirect_to_url;
	}

	// Redirect to admin dashboard.
	if ( in_array( 'administrator', $user->roles, true ) ) {
		return admin_url();
	}

	// Redirect editors to the editor dashboard.
	if ( in_array( 'editor', $user->roles, true ) ) {
		return home_url( '/editor-dashboard' );
	}

	// Redirect authors to the author dashboard.
	if ( in_array( 'author', $user->roles, true ) ) {
		return home_url( '/author-dashboard' );
	}

	// Redirect subscribers to the welcome page.
	if ( in_array( 'subscriber', $user->roles, true ) ) {
		return home_url( '/welcome' );
	}

	// Return default URL if no role matches.
	return home_url();
}

add_filter( 'login_redirect', 'sofi_wpcs_callback', 10, 3 );
