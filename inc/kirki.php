<?php
Kirki::add_config( 'm2sys_config_id', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


// Header area customizer  
Kirki::add_section( 'm2sys_header_id', array(
    'title'          => esc_html__( 'Header', 'm2sys' ),
    'description'    => esc_html__( 'Change header area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'm2sys_logo_setting_id',
	'label'       => esc_html__( 'Logo', 'm2sys' ),
	'description' => esc_html__( 'Change logo here.', 'm2sys' ),
	'section'     => 'm2sys_header_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],	
] );