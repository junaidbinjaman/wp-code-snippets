<?php
/**
 * Disable Site Admin Email Verification
 *
 * Disables the periodic email verification prompt shown to site administrators
 * when logging into WordPress. Useful for reducing interruptions in workflows
 * on managed or frequently maintained sites.
 *
 * @package WP Code Snippets
 * @version 1.0.0
 * @author Junaid Bin Jaman
 * @link
 */

add_filter( 'admin_email_check_interval', '__return_false' );
