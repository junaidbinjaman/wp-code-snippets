<?php
/**
 * Disable Admin Bar for All Users
 *
 * To disable the admin bar for all users, regardless of their role, use the code bellow.
 *
 * @package WP Code Snippets
 * @version 1.0.1
 * @author Junaid Bin Jaman <junaid@allnextver.com>
 * @link
 */

add_filter( 'show_admin_bar', '__return_false' );
