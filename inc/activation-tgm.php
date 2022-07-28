<?php

require_once(get_template_directory().'/inc/class-tgm-plugin-activation.php');

function tgm_plugin_function(){

	$plugins = array(
		array(
			'name'               => 'Kirki Customizer Framework',
			'slug'               => 'kirki', 
			'required'           => true, 
			'force_activation'   => true, 
			'force_deactivation' => true, 
		),
	);

	$config = array(
		'id'           => 'tgmpa',
		'default_path' => '', 
		'menu'         => 'tgmpa-install-plugins', 
		'parent_slug'  => 'themes.php',            
		'capability'   => 'edit_theme_options',   
		'has_notices'  => true,                    
		'dismissable'  => true,                   
		'dismiss_msg'  => '',                      
		'is_automatic' => false,              
		'message'      => '',       
	);

	tgmpa( $plugins, $config );

}
add_action('tgmpa_register','tgm_plugin_function');