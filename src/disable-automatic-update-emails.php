<?php
/**
 * Disable Automatic Update Emails
 *
 * Disables email notifications sent by WordPress for automatic updates,
 * including core, plugin, and theme updates. This helps reduce inbox clutter
 * for site administrators while relying on other monitoring methods.
 *
 * @package WP Code Snippets
 * @version 1.0.0
 * @author Junaid Bin Jaman <junaid@allnextver.com>
 * @link
 */

add_filter( 'auto_core_update_send_email', '__return_false' );

add_filter( 'auto_plugin_update_send_email', '__return_false' );

add_filter( 'auto_theme_update_send_email', '__return_false' );
