<?php
/*
 * Plugin Name: Rob's Plugin
 * Plugin URI: http://robertbarnette.com
 * Description: a plugin to parse rackspace raw logs
 * Version: 1.0
 * Author: Rob
 * Author URI: http://robertbarnette.com
 * License: GPL2
*/
 
/* 
 * Add link to plugin in the admin menu
 * 
*/
function robsplugin_menu() {
    
/*  Use the add_options_page function
 *  add_options_page ( $page_title, $menu_title, $capability, $menu-slug, $function )
 * 
*/
    


	add_menu_page(
    	'Robs Plugin',
    	'Robs Plugin',
    	'manage_options',
    	'robsplugin',
    	'robsplugin_options_page'
	);

}
add_action( 'admin_menu', 'robsplugin_menu' );

function robsplugin_options_page() {

	if( !current_user_can( 'manage_options' ) ) {
    wp_die( 'You do not have sufficient permissions to access this page.' );


  }

	require ( 'inc/options-page-wrapper.php' );

  

}
    

?>
