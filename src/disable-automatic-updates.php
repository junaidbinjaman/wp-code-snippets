<?php
/**
 * Disable Automatic Updates
 *
 * Completely disables automatic updates for WordPress core, plugins, themes, and translations.
 * Useful for administrators who prefer full control over updates and rely on manual processes.
 *
 * @package WP Code Snippets
 * @version 1.0.0
 * @author Junaid Bin Jaman
 * @link
 */

// Disable the wp core auto update.
add_filter( 'auto_update_core', '__return_false' );

// Disable the wp plugin auto update.
add_filter( 'auto_update_plugin', '__return_false' );

// Disable auto-updates for themes.
add_filter( 'auto_update_theme', '__return_false' );
