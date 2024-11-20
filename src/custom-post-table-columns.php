<?php
/**
 * Add Custom Post ID Column in Admin Post Table
 *
 * Adds a custom column to the admin post table to display post IDs.
 *
 * @package WP Code Snippets
 * @version 1.0.0
 * @author Junaid Bin Jaman <junaid@allnextver.com>
 * @link
 */

add_filter(
	'manage_post_posts_columns',
	function ( $columns ) {

		$new_column_order = array();

		foreach ( $columns as $key => $column ) {
			$new_column_order[ $key ] = $column;

			if ( 'title' === $key ) {
				$new_column_order['post-id'] = __( 'The post ID', 'phpcs' );
			}
		}

		$columns['post-id'] = __( 'The post ID', 'phpcs' );

		return $new_column_order;
	}
);

add_action(
	'manage_post_posts_custom_column',
	function ( $column_name, $post_id ) {
		if ( 'post-id' === $column_name ) {
			echo '#' . esc_html( $post_id );
		}
	},
	10,
	2
);
