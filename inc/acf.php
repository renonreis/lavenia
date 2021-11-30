<?php

add_action( 'init', 'acf_options');
function acf_options(){
	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title'    => 'Config. Site',
			'menu_title'    => 'Config. Site',
			'menu_slug'     => 'opcoes_template',
			'capability'    => 'edit_posts',
			'icon_url'      => 'dashicons-admin-generic',
			'position'      => 25,
		));

			acf_add_options_sub_page(array(
				'page_title'    => 'Rodapé',
				'menu_title'    => 'Rodapé',
				'menu_slug'     => 'rodape_template',
				'parent_slug'   => 'opcoes_template',
			));

			acf_add_options_sub_page(array(
				'page_title'    => 'Scripts',
				'menu_title'    => 'Scripts',
				'menu_slug'     => 'scripts_template',
				'parent_slug'   => 'opcoes_template',
			));
		
	}
}