<?php
/**
 * Update WC cart qty wihout page reload
 *
 * This snippets will date the cart qty along with total and subtotal realtime
 * wihout requiring page reload or any extra btn click.
 *
 * @package WP Code Snippets
 * @version 1.0.0
 * @author Junaid Bin Jaman <junaid@allnextver.com>
 * @link
 */

add_filter( 'wc_add_to_cart_message_html', '__return_false' );

// Remove the update cart btn on the cart page.
add_action( 'wp_footer', 'codedocx_update_cart_button' );
