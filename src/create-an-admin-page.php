<?php
/**
 * Create a WP admin page which support html design
 *
 * Design an admin page to display admin screen.
 * Add your html inside the div and style the elements as you wish.
 * You can use inside css or add your css in css box of WordPress customer
 *
 * @package WP Code Snippets
 * @version 1.0.1
 * @author Junaid Bin Jaman <junaid@allnextver.com>
 * @link
 */

add_action(
	'admin_menu',
	function () {
		add_menu_page(
			'Sofi Custom Admin Page',
			__( 'Sofi Custom Admin Page', 'sofi_wpcs' ),
			'manage_options',
			'sofi-custom-admin-page',
			'sofi_wpcs_callback',
			'dashicons-admin-media',
			20
		);
	}
);

/**
 * The function displays the content inside the "Sofi Custom Admin Page".
 *
 * @return void
 */
function sofi_wpcs_callback() {
	?>
	<div>
		<h1>The section title</h1>
		<hr>
		<p>
			Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem eos unde velit nostrum 
			aperiam quidem vel, sunt, quod quisquam neque cupiditate rerum accusamus maiores ratione dolor 
			pariatur tempore, consectetur delectus possimus? Eum provident consectetur, voluptas nam 
			adipisci rem voluptates sunt eos reprehenderit id, alias, temporibus voluptatibus 
			recusandae dolorum tempore totam quod quae repellat facilis deserunt nesciunt assumenda. Ratione, 
			hic. Perferendis consectetur omnis aut unde illum neque aliquam autem architecto, pariatur ut impedit 
			eum magnam. Reiciendis, quae quas sapiente id, provident pariatur facere nam fugit sit officiis ratione 
			laboriosam! Voluptatem ipsum soluta, deserunt nemo officiis architecto exercitationem perferendis 
			quibusdam laboriosam temporibus ipsam perspiciatis voluptas! Commodi cum quisquam et cupiditate, vero, 
			cumque minima error quam id excepturi nam accusamus numquam expedita totam aperiam sunt consequuntur 
			ipsa odit quasi neque. Beatae autem sed voluptate. Cumque ab exercitationem similique tenetur repudiandae 
			modi maiores veniam, culpa magni, hic fugiat fugit placeat possimus. Iusto quam reprehenderit amet 
			perspiciatis architecto earum maxime alias quasi veniam quo doloremque nulla nemo ullam exercitationem 
			error rerum in id sed, sequi reiciendis ipsum inventore numquam obcaecati! Iure omnis commodi, 
			debitis sequi, eveniet tempore blanditiis neque optio earum voluptatum voluptates! Cupiditate 
			repudiandae temporibus voluptates dolores nobis nam placeat accusamus laboriosam inventore! Veniam consequuntur 
			quis aperiam velit ducimus cum dolore suscipit, similique reiciendis exercitationem! Veniam nesciunt quidem, eveniet, 
			assumenda fugiat aspernatur eius non neque tempora rem explicabo temporibus voluptatem ab, beatae perspiciatis velit 
			commodi ratione quaerat consectetur id molestiae earum nisi est optio! Dolores voluptatum, quam laborum quae corporis 
			reprehenderit? Itaque hic maxime incidunt, velit impedit praesentium sequi optio perspiciatis recusandae aliquid id magnam. 
			Quia, amet tenetur ipsa ipsum sequi aut facere culpa! Ipsa sapiente libero accusantium tempore reprehenderit repellat aliquid! 
			Eveniet laborum eligendi perferendis praesentium, placeat repellat ducimus fugit minus quo natus odit. Cum mollitia error harum 
			numquam consectetur, aliquam dolor quia!</p>
	</div>
	<?php
}
