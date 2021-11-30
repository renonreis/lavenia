<?php

/**
 * Remove Admin Welcome
 */
remove_action('welcome_panel', 'wp_welcome_panel');

/**
 * Remove Admin Bar Front
 */
show_admin_bar(false);

/**
 * Remove Metaboxes
 */
function remove_metaboxes() {
  remove_meta_box( 'submitdiv','post','normal' ); // Publicação
  remove_meta_box( 'categorydiv','post','normal' ); // Categorias
  remove_meta_box( 'tagsdiv-post_tag','post','normal' ); // Tags
  remove_meta_box( 'formatdiv','post','normal' ); // Formatos

  remove_meta_box( 'authordiv','post','normal' ); // Autor
  remove_meta_box( 'postcustom','post','normal' ); // Campos Personalizados
  remove_meta_box( 'postexcerpt','post','normal' ); // Resumo
  remove_meta_box( 'revisionsdiv','post','normal' ); // Revisões
  remove_meta_box( 'commentsdiv','post','normal' ); // Comentários
  remove_meta_box( 'commentstatusdiv','post','normal' ); // Status dos comentários
  remove_meta_box( 'trackbacksdiv','post','normal' ); // Trackbacks
  remove_meta_box( 'slugdiv','post','normal' ); // Slug
  remove_meta_box( 'pageparentdiv','page','normal' );
}
add_action( 'admin_init', 'remove_metaboxes' );

/**
 * Remove Dashboard Metaboxes
 */
function remove_dashboard_metaboxes(){
  remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
  remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
  remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_metaboxes' );

/**
 * Remove Screen Options
 */
add_filter('screen_options_show_screen', '__return_false');

/**
 * Remove Help Tab
 */
function contextual_help_list_remove(){
  global $current_screen;
  $current_screen->remove_help_tabs();
}
add_filter('contextual_help_list','contextual_help_list_remove');

/**
 * Remove Comments
 */
function remove_admin_menus() {
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_admin_menus' );

/**
 * Remove Comments on Toolbar
 */
function remove_toolbar_items() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
}
add_action('admin_bar_menu', 'remove_toolbar_items', 999);

/**
 * Remove Comments From
 */
function remove_comment_support() {
  remove_post_type_support( 'post', 'comments' );
  remove_post_type_support( 'page', 'comments' );
}
add_action('init', 'remove_comment_support', 100);

/**
 * Change error Login menssage
 */
function no_wordpress_errors(){
  return 'Email e/ou senha inválidos!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

/**
 * Custom WP Admin Login 
 */
function my_login_stylesheet() {
  wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/admin/login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

/**
 * Rename images on upload
 */
function my_custom_file_name($filename){
	$info = pathinfo($filename);
	$ext = empty($info['extension']) ? '' : '.' . $info['extension'];
	$name = basename($filename, $ext);        

	$finalFileName = sanitize_title($name);

	return $finalFileName . $ext;
}
add_filter('sanitize_file_name', 'my_custom_file_name', 10);