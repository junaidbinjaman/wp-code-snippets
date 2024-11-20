<?php
/**
 * Disable Automatic Trash Emptying
 *
 * Prevents WordPress from automatically emptying the trash after the default 30 days.
 * This gives administrators full control over when posts, pages, or other items in the trash
 * are permanently deleted.
 *
 * @package WP Code Snippets
 * @version 1.0.0
 * @author Junaid Bin Jaman
 * @link
 */

add_action(
	'init',
	function () {
		remove_action( 'wp_scheduled_delete', 'wp_scheduled_delete' );
	}
);
