<?php
/**
 * Remove WordPress Version Number
 *
 * Improves security by preventing the WordPress version number
 * from being exposed in the site's HTML source and RSS feeds.
 * This reduces the risk of targeted attacks based on known vulnerabilities.
 *
 * @package WP Code Snippets
 * @version 1.0.0
 * @author Junaid Bin Jaman <junaid@allnextver.com>
 * @link
 */

add_filter( 'the_generator', '__return_empty_string' );
