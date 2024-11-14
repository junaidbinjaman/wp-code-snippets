<?php
/**
 * Trim wp post title
 *
 * Trip the wp post title on archive post box into 4 words.
 * Change the number 4 into whatever suits your need.
 *
 * @package WP Code Snippets
 * @version 1.0.0
 * @author Junaid Bin Jaman <junaid@allnextver.com>
 * @link
 */

add_filter(
	'the_title',
	function ( $title ) {
		if ( 'post' === get_post_type() && ! is_single() ) {
			$title = wp_trim_words( $title, 4 );
		}

		return $title;
	}
);
