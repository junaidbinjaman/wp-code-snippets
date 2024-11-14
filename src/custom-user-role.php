<?php
/**
 * Create custom user role
 *
 * This code will check whether the "wholesale_customer" role exists or not
 * If doesn't exists it will create one
 *
 * @package WP Code Snippets
 * @version 1.0.1
 * @author Bayazid Hasan <bayazid.freelancer@gmail.com>
 * @link
 */

add_action(
	'init',
	function () {
		if ( ! get_role( 'wholesale_customer' ) ) {
			$capabilities = get_role( 'customer' )->capabilities;

			add_role( 'wholesale_customer', 'Wholesale Customer', $capabilities );
		}
	}
);
