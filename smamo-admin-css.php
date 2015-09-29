<?php
/*
Plugin name: Jeppes Admin Stylesheet
Description: Tilføjer et stylesheet til dit administratorpanel
Version: 1.0
Author: Jeppe Sigaard
*/

add_action( 'admin_enqueue_scripts', 'prfx_admin_script' );
function prfx_admin_script(){

	wp_enqueue_style('smamo-admin-style',plugins_url( '/admin.css', __FILE__ ),false,'1.0','all');

}
