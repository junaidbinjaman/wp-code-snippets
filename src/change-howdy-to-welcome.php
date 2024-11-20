<?php
/**
 * Change 'Howdy, Admin' in the Admin Bar
 *
 * Customizes the greeting message in the WordPress admin bar, replacing
 * the default "Howdy, [username]" text with a personalized or alternative message.
 * Enhances the admin interface for a tailored user experience.
 *
 * @package WP Code Snippets
 * @version 1.0.0
 * @author Junaid Bin Jaman <junaid@allnextver.com>
 * @link
 */

add_filter(
	'gettext',
	function ( $translated_text, $text, $domain ) {

		if ( 'Howdy, %s' === $text ) {
			// translators: %s is replaced with the username in the admin greeting message.
			$translated_text = __( 'Welcome %s', 'wpcs' );
		}

		return $translated_text;
	},
	10,
	3
);
