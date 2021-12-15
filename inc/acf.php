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
				'page_title'    => 'Cabeçalho/Rodapé',
				'menu_title'    => 'Cabeçalho/Rodapé',
				'menu_slug'     => 'rodape_template',
				'parent_slug'   => 'opcoes_template',
			));

			acf_add_options_sub_page(array(
				'page_title'    => 'Redes Sociais',
				'menu_title'    => 'Redes Sociais',
				'menu_slug'     => 'social_template',
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

// Save Json ACF Config
function my_acf_json_save_point( $path ) {
    return get_stylesheet_directory() . '/assets/acf-json/';
    return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {
	$paths[] = get_stylesheet_directory() . '/assets/acf-json';
	return $paths;
}