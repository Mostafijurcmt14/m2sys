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



// Hero section customizer 
Kirki::add_section( 'm2sys_sldier_id', array(
    'title'          => esc_html__( 'Slider Section', 'm2sys' ),
    'description'    => esc_html__( 'Change slider section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'slider_subheading_setting',
	'label'    => esc_html__( 'Sub heading', 'm2sys' ),
	'section'  => 'm2sys_sldier_id',
	'default'  => esc_html__( 'WELCOME TO', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'slider_subheading_color_text_setting',
	'label'    => esc_html__( 'Sub-heading color text', 'm2sys' ),
	'section'  => 'm2sys_sldier_id',
	'default'  => esc_html__( 'M2SYS', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'slider_heading_setting',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'm2sys_sldier_id',
	'default'  => esc_html__( 'Law Enforcement Management System', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'textarea',
	'settings' => 'slider_textarea_setting',
	'label'    => esc_html__( 'Content', 'm2sys' ),
	'section'  => 'm2sys_sldier_id',
	'default'  => esc_html__( 'A highly configurable platform that allows law enforcement officers and agencies to manage all aspects of the law enforcement operational process from a single system. ', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'slider_image_setting_array',
	'label'       => esc_html__( 'Image', 'm2sys' ),
	'description' => esc_html__( 'Change slider section image.', 'm2sys' ),
	'section'     => 'm2sys_sldier_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
] );

Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'slider_button_one_text_setting',
	'label'    => esc_html__( 'Button 1', 'm2sys' ),
	'section'  => 'm2sys_sldier_id',
	'default'  => esc_html__( 'Learn More', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'link',
	'settings' => 'slider_button1_link_setting',
	'section'  => 'm2sys_sldier_id',
	'default'  => 'https://www.m2sys.com/',
	'priority' => 10,
] );


Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'slider_button_two_text_setting',
	'label'    => esc_html__( 'Button 2', 'm2sys' ),
	'section'  => 'm2sys_sldier_id',
	'default'  => esc_html__( 'Download Brochure', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'link',
	'settings' => 'slider_button2_link_setting',
	'section'  => 'm2sys_sldier_id',
	'default'  => 'https://www.m2sys.com/',
	'priority' => 10,
] );




// Law Enforcement customizer 
Kirki::add_section( 'm2sys_law_enforcement_id', array(
    'title'          => esc_html__( 'Law Enforcement Section', 'm2sys' ),
    'description'    => esc_html__( 'Change law enforcement section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'law_enforcement_image1_setting',
	'label'       => esc_html__( 'Law Enforcement Images', 'm2sys' ),
	'description' => esc_html__( 'Image one', 'm2sys' ),
	'section'     => 'm2sys_law_enforcement_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'law_enforcement_image2_setting',
	'section'     => 'm2sys_law_enforcement_id',
	'description' => esc_html__( 'Image two', 'm2sys' ),
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'law_enforcement_image3_setting',
	'section'     => 'm2sys_law_enforcement_id',
	'description' => esc_html__( 'Image three', 'm2sys' ),
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
] );


Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'law_enforcement_subheading_setting',
	'label'    => esc_html__( 'Sub heading', 'm2sys' ),
	'section'  => 'm2sys_law_enforcement_id',
	'default'  => esc_html__( 'Law Enforcement', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'law_enforcement_heading_setting',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'm2sys_law_enforcement_id',
	'default'  => esc_html__( 'Law Enforcement Agencies Face Several Challenges', 'm2sys' ),
	'priority' => 10,
] );


Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Content list items', 'm2sys' ),
	'section'     => 'm2sys_law_enforcement_id',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Content list item', 'm2sys' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'm2sys' ),
	'settings'     => 'law_enforcement_repeater_setting',
	'default'      => [
		[
			'list_text' => esc_html__( 'Officers face a hard time in evidence management while dealing with vast amounts of data', 'm2sys' ),
		],
		[
			'list_text' => esc_html__( 'Manual effort to re-enter incident data repeatedly creates chances for making errors.', 'm2sys' ),
		],
		[
			'list_text' => esc_html__( 'Finding solutions to simplify workflow barriers to accelerate the investigation process.', 'm2sys' ),
		],
	],
	'fields' => [
		'list_text' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Text', 'm2sys' ),
			'default'     => '',
		],
		
	]
] );

Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'textarea',
	'settings' => 'law_enforcement_content_text_setting',
	'label'    => esc_html__( 'Content below text', 'm2sys' ),
	'section'  => 'm2sys_law_enforcement_id',
	'default'  => esc_html__( 'Law enforcement agencies today are frustrated by data silos, outdated systems, and inefficient application integration, forcing them to enter data many times, in multiple places, using platforms that don’t perform efficiently.', 'm2sys' ),
	'priority' => 10,
] );



// M2SYS eGov Law Automate customizer 
Kirki::add_section( 'm2sys_egov_law_automate_id', array(
    'title'          => esc_html__( 'eGov law automate section', 'm2sys' ),
    'description'    => esc_html__( 'Change M2SYS eGov law automate section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'm2sys_egov_lawautomate_subheading',
	'label'    => esc_html__( 'Sub heading', 'm2sys' ),
	'section'  => 'm2sys_egov_law_automate_id',
	'default'  => esc_html__( 'M2SYS EGOV LAW', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'm2sys_egov_lawautomate_heading',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'm2sys_egov_law_automate_id',
	'default'  => esc_html__( 'M2SYS eGov Law Automate Helps Processes and Streamline Workflow With Seamless Integration With Existing System', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'textarea',
	'settings' => 'm2sys_egov_lawautomate_content',
	'label'    => esc_html__( 'Content', 'm2sys' ),
	'section'  => 'm2sys_egov_law_automate_id',
	'default'  => esc_html__( 'Our Law Enforcement Management System is a comprehensive digital solution that significantly deals with the challenges of system integrators when it comes to development, implementation, and maintenance. A major roadblock for system integrators in building custom-made solutions is the time it takes to develop and implement the software. With our highly customizable platform, system integrators can quickly implement new development or update existing systems and configure biometric modalities- eliminating development complexities.', 'm2sys' ),
	'priority' => 10,
] );


Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'lawautomate_button_one_text_setting',
	'label'    => esc_html__( 'Button 1', 'm2sys' ),
	'section'  => 'm2sys_egov_law_automate_id',
	'default'  => esc_html__( 'Request Demo', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'link',
	'settings' => 'lawautomate_button1_link_setting',
	'section'  => 'm2sys_egov_law_automate_id',
	'default'  => 'https://www.m2sys.com/',
	'priority' => 10,
] );


Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'lawautomate_button_two_text_setting',
	'label'    => esc_html__( 'Button 2', 'm2sys' ),
	'section'  => 'm2sys_egov_law_automate_id',
	'default'  => esc_html__( 'Download Brochure', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'link',
	'settings' => 'lawautomate_button2_link_setting',
	'section'  => 'm2sys_egov_law_automate_id',
	'default'  => 'https://www.m2sys.com/',
	'priority' => 10,
] );



Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'egov_law_automate_image',
	'label'       => esc_html__( 'Image', 'm2sys' ),
	'description' => esc_html__( 'M2SYS eGov law automate image', 'm2sys' ),
	'section'     => 'm2sys_egov_law_automate_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
] );





// M2SYS eGov Law Automate customizer 
Kirki::add_section( 'm2sys_services_id', array(
    'title'          => esc_html__( 'Services section', 'm2sys' ),
    'description'    => esc_html__( 'Change services section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Content list items', 'm2sys' ),
	'section'     => 'm2sys_services_id',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Content list item', 'm2sys' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'm2sys' ),
	'settings'     => 'm2sys_services_repeater_setting',
	'default'      => [
		[
			'list_heading' => esc_html__( 'Faster Deployment', 'm2sys' ),
			'list_content' => esc_html__( 'Our ready-to-use all-inclusive solution offers faster deployment for agencies of any size. Thus enabling system integrators, ABIS providers, and biometric sensor providers to quickly generate professional proposals to win more projects and improve client satisfaction.', 'm2sys' ),
			'list_image' => '',
		],
		[
			'list_heading' => esc_html__( 'Configurable Workflow', 'm2sys' ),
			'list_content' => esc_html__( 'With a limitless opportunity for workflow customization, we offer an individualized supervisory dashboard to oversee tasks. Our configurable solution minimizes silo-based inefficiencies and improves workflow.', 'm2sys' ),
			'list_image' => '',
		],
		[
			'list_heading' => esc_html__( 'Integrates Seamlessly', 'm2sys' ),
			'list_content' => esc_html__( 'Our Law Enforcement Management solution is an end-to-end solution that users can integrate seamlessly with third-party systems, including biometric capture tools and biometric matching services for suspect identification.', 'm2sys' ),
			'list_image' => '',
		],
		[
			'list_heading' => esc_html__( 'Centralized Database', 'm2sys' ),
			'list_content' => esc_html__( 'All case-related information is stored in a centralized location, which can be accessed from the field or anywhere using any computer or mobile device. Documents can be accessed and updated in real-time which leads to faster and more efficient handling of the case.', 'm2sys' ),
			'list_image' => '',
		],
	],
	'fields' => [
		'list_heading' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Text', 'm2sys' ),
			'default'     => '',
		],
		'list_content' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Content', 'm2sys' ),
			'default'     => '',
		],
		'list_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Icon', 'm2sys' ),
			'default'     => '',
		],
		
	]
] );




// M2SYS eGov Law Management customizer 
Kirki::add_section( 'egov_law_management_id', array(
    'title'          => esc_html__( 'eGov management section', 'm2sys' ),
    'description'    => esc_html__( 'Change eGov management section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'egov_law_management_heading',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'egov_law_management_id',
	'default'  => esc_html__( 'How eGov Law Enforcement Management System Works', 'm2sys' ),
	'priority' => 9,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'egov_law_management_icon',
	'label'       => esc_html__( 'Icon', 'm2sys' ),
	'section'     => 'egov_law_management_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
	'priority' => 9,
] );


Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Content list items', 'm2sys' ),
	'section'     => 'egov_law_management_id',
	'priority'    => 9,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Content list item', 'm2sys' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'm2sys' ),
	'settings'     => 'egov_law_management_repeater',
	'default'      => [
		[
			'list_heading' => esc_html__( 'Citizens file a case', 'm2sys' ),
			'list_image' => '',
		],
		[
			'list_heading' => esc_html__( 'The case is recorded in the system', 'm2sys' ),
			'list_image' => '',
		],
		[
			'list_heading' => esc_html__( 'The case is assigned to an officer for investigation', 'm2sys' ),
			'list_image' => '',
		],
		[
			'list_heading' => esc_html__( 'Conducts Investigation', 'm2sys' ),
			'list_image' => '',
		],
		[
			'list_heading' => esc_html__( 'Record Case Diaries and Reports under each investigation', 'm2sys' ),
			'list_image' => '',
		],
		[
			'list_heading' => esc_html__( 'Biometric Enrolment of Individuals Involved In Specific case', 'm2sys' ),
			'list_image' => '',
		],
	],
	'fields' => [
		'list_heading' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Text', 'm2sys' ),
			'default'     => '',
		],
		'list_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Icon', 'm2sys' ),
			'default'     => '',
		],
		
	]
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'egov_law_management_image',
	'label'       => esc_html__( 'Image', 'm2sys' ),
	'section'     => 'egov_law_management_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
	'priority' => 10,
] );


Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'management_button_one_text_setting',
	'label'    => esc_html__( 'Button 1', 'm2sys' ),
	'section'  => 'egov_law_management_id',
	'default'  => esc_html__( 'Request Demo', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'link',
	'settings' => 'management_button1_link_setting',
	'section'  => 'egov_law_management_id',
	'default'  => 'https://www.m2sys.com/',
	'priority' => 10,
] );


Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'management_button_two_text_setting',
	'label'    => esc_html__( 'Button 2', 'm2sys' ),
	'section'  => 'egov_law_management_id',
	'default'  => esc_html__( 'Download Brochure', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'link',
	'settings' => 'management_button2_link_setting',
	'section'  => 'egov_law_management_id',
	'default'  => 'https://www.m2sys.com/',
	'priority' => 10,
] );



// Why Use Our eGov Law Enforcement customizer 
Kirki::add_section( 'why_egov_id', array(
    'title'          => esc_html__( 'Why egov section', 'm2sys' ),
    'description'    => esc_html__( 'Change why use our eGov law enforcement section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'why_egov_heading',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'why_egov_id',
	'default'  => esc_html__( 'Why Use Our eGov Law Enforcement Management System?', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'textarea',
	'settings' => 'why_egov_heading_below',
	'label'    => esc_html__( 'Heading below text', 'm2sys' ),
	'section'  => 'why_egov_id',
	'default'  => esc_html__( 'Our Law Enforcement Management Solution and eGov platform bring benefits for:', 'm2sys' ),
	'priority' => 10,
] );


Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'why_egov_management_image1',
	'label'       => esc_html__( 'Grid items-1', 'm2sys' ),
	'description' => 'Icon',
	'section'     => 'why_egov_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'why_egov_grid_heading1',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'why_egov_id',
	'default'  => esc_html__( 'System Integrators', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'textarea',
	'settings' => 'why_egov_grid_content1',
	'label'    => esc_html__( 'Content', 'm2sys' ),
	'section'  => 'why_egov_id',
	'default'  => esc_html__( 'Finish government projects on time by connecting our solution with your existing systems, including biometrics.', 'm2sys' ),
	'priority' => 10,
] );



Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'why_egov_management_image2',
	'label'       => esc_html__( 'Grid items-2', 'm2sys' ),
	'description' => 'Icon',
	'section'     => 'why_egov_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'why_egov_grid_heading2',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'why_egov_id',
	'default'  => esc_html__( 'Biometric Sensor Providers', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'textarea',
	'settings' => 'why_egov_grid_content2',
	'label'    => esc_html__( 'Content', 'm2sys' ),
	'section'  => 'why_egov_id',
	'default'  => esc_html__( 'Scanner integration is not easy for most - unless it is us. Our platform easily integrates your scanners into government projects!', 'm2sys' ),
	'priority' => 10,
] );



Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'why_egov_management_image3',
	'label'       => esc_html__( 'Grid items-3', 'm2sys' ),
	'description' => 'Icon',
	'section'     => 'why_egov_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'why_egov_grid_heading3',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'why_egov_id',
	'default'  => esc_html__( 'Biometric ABIS Providers', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'textarea',
	'settings' => 'why_egov_grid_content3',
	'label'    => esc_html__( 'Content', 'm2sys' ),
	'section'  => 'why_egov_id',
	'default'  => esc_html__( 'Our platform connects any ABIS solution seamlessly and without any learning curve, reducing delays in government contracts.', 'm2sys' ),
	'priority' => 10,
] );




// Our eGov solution customizer 
Kirki::add_section( 'our_egov_solution_id', array(
    'title'          => esc_html__( 'Our eGov section', 'm2sys' ),
    'description'    => esc_html__( 'Change our eGov solution section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'our_egov_solution_heading',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'our_egov_solution_id',
	'default'  => esc_html__( 'Why Use Our eGov Law Enforcement Management System?', 'm2sys' ),
	'priority' => 10,
] );


Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'our_egov_button_one_text_setting',
	'label'    => esc_html__( 'Button 1', 'm2sys' ),
	'section'  => 'our_egov_solution_id',
	'default'  => esc_html__( 'Request Demo', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'link',
	'settings' => 'our_egov_button1_link_setting',
	'section'  => 'our_egov_solution_id',
	'default'  => 'https://www.m2sys.com/',
	'priority' => 10,
] );

Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'our_egov_button_two_text_setting',
	'label'    => esc_html__( 'Button 2', 'm2sys' ),
	'section'  => 'our_egov_solution_id',
	'default'  => esc_html__( 'Download Brochure', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'link',
	'settings' => 'our_egov_button2_link_setting',
	'section'  => 'our_egov_solution_id',
	'default'  => 'https://www.m2sys.com/',
	'priority' => 10,
] );



// Law Enforcement Management Solution Use Cases customizer 
Kirki::add_section( 'solution_cases_id', array(
    'title'          => esc_html__( 'Law Enforcement section', 'm2sys' ),
    'description'    => esc_html__( 'Change Law Enforcement section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'solution_cases_heading',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'solution_cases_id',
	'default'  => esc_html__( 'Law Enforcement Management Solution Use Cases', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Content list items', 'm2sys' ),
	'section'     => 'solution_cases_id',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Content list item', 'm2sys' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'm2sys' ),
	'settings'     => 'solution_cases_repeater',
	'default'      => [
		[
			'list_heading' => esc_html__( 'Citizens file a case', 'm2sys' ),
			'list_image' => '',
		],
		[
			'list_heading' => esc_html__( 'The case is recorded in the system', 'm2sys' ),
			'list_image' => '',
		],
		[
			'list_heading' => esc_html__( 'The case is assigned to an officer for investigation', 'm2sys' ),
			'list_image' => '',
		],
	],
	'fields' => [
		'list_heading' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Text', 'm2sys' ),
			'default'     => '',
		],
		'list_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Icon', 'm2sys' ),
			'default'     => '',
		],
		
	]
] );


// Success Stories customizer 
Kirki::add_section( 'success_stories_id', array(
    'title'          => esc_html__( 'Success Stories section', 'm2sys' ),
    'description'    => esc_html__( 'Change success stories section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'success_stories_heading',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'success_stories_id',
	'default'  => esc_html__( 'Success Stories', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'success_stories_icon',
	'label'       => esc_html__( 'Icon', 'm2sys' ),
	'section'     => 'success_stories_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Content list items', 'm2sys' ),
	'section'     => 'success_stories_id',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Content list item', 'm2sys' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'm2sys' ),
	'settings'     => 'success_stories_repeater',
	'default'      => [
		[
			'image' => '',
			'client' => esc_html__( 'Egyptian Military Academy', 'm2sys' ),
			'industry' => esc_html__( 'Law Enforcement', 'm2sys' ),
			'country' => esc_html__( 'Egypt', 'm2sys' ),
			'use' => esc_html__( 'Biometric Database of Army Personnel', 'm2sys' ),
		],
		[
			'image' => '',
			'client' => esc_html__( 'Salt Lake County, UT Sheriff’s Office', 'm2sys' ),
			'industry' => esc_html__( 'Law Enforcement', 'm2sys' ),
			'country' => esc_html__( 'USA', 'm2sys' ),
			'use' => esc_html__( 'Prisoner Identification', 'm2sys' ),
		],
		[
			'image' => '',
			'client' => esc_html__( 'Salt Lake County, UT Sheriff’s Office', 'm2sys' ),
			'industry' => esc_html__( 'Law Enforcement', 'm2sys' ),
			'country' => esc_html__( 'USA', 'm2sys' ),
			'use' => esc_html__( 'Prisoner Identification', 'm2sys' ),
		],
		[
			'image' => '',
			'client' => esc_html__( 'Salt Lake County, UT Sheriff’s Office', 'm2sys' ),
			'industry' => esc_html__( 'Law Enforcement', 'm2sys' ),
			'country' => esc_html__( 'USA', 'm2sys' ),
			'use' => esc_html__( 'Prisoner Identification', 'm2sys' ),
		],
	],
	'fields' => [
		'image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Image', 'm2sys' ),
			'default'     => '',
		],
		'client' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Client', 'm2sys' ),
			'default'     => '',
		],
		'industry' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Industry', 'm2sys' ),
			'default'     => '',
		],
		'country' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Country', 'm2sys' ),
			'default'     => '',
		],
		'use' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Use', 'm2sys' ),
			'default'     => '',
		],
	]
] );


// Perfect law customizer 
Kirki::add_section( 'perfect_law_id', array(
    'title'          => esc_html__( 'Perfect law section', 'm2sys' ),
    'description'    => esc_html__( 'Change Perfect law section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'perfect_law_icon',
	'label'       => esc_html__( 'Icon', 'm2sys' ),
	'section'     => 'perfect_law_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'perfect_law_heading',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'perfect_law_id',
	'default'  => esc_html__( 'Find the Perfect Law Enforcement Management System with M2SYS', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Content list items', 'm2sys' ),
	'section'     => 'perfect_law_id',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Content list item', 'm2sys' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'm2sys' ),
	'settings'     => 'perfect_law_repeater',
	'default'      => [
		[
			'list_image' => '',
			'list_heading' => esc_html__( 'Advanced Reporting', 'm2sys' ),
			'list_content' => esc_html__( 'Transform data into intelligence that helps law enforcement agencies to uncover actionable insights, optimize resource planning and close more cases.', 'm2sys' ),
		],
		[
			'list_image' => '',
			'list_heading' => esc_html__( 'Record Management', 'm2sys' ),
			'list_content' => esc_html__( 'A unified platform that centralizes data that can be searched anytime, from any location. Officers can use the information in the investigation to make better decisions.', 'm2sys' ),
		],
		[
			'list_image' => '',
			'list_heading' => esc_html__( 'Workflow Automation', 'm2sys' ),
			'list_content' => esc_html__( 'Access to information across departments strengthens collaboration, saves time, and helps establish operation consistency and efficiency.', 'm2sys' ),
		],
		[
			'list_image' => '',
			'list_heading' => esc_html__( 'Offender database', 'm2sys' ),
			'list_content' => esc_html__( 'Maintain a database of complainants, suspects, victims, and witnesses to check records and increase efficiency.', 'm2sys' ),
		],
		[
			'list_image' => '',
			'list_heading' => esc_html__( 'Photo Capture', 'm2sys' ),
			'list_content' => esc_html__( 'Investigation officers can collect pictures of case evidence using a smartphone and upload any type of files in the system for future use.', 'm2sys' ),
		],
		[
			'list_image' => '',
			'list_heading' => esc_html__( 'Customizable Access Control', 'm2sys' ),
			'list_content' => esc_html__( 'With a customizable per-user access control feature, our platform enables agencies to limit who can access what information within the database, helping agencies keep valuable data out of the hands of unauthorized persons.', 'm2sys' ),
		],

	],
	'fields' => [
		'list_image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Image', 'm2sys' ),
			'default'     => '',
		],
		'list_heading' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Heading', 'm2sys' ),
			'default'     => '',
		],
		'list_content' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Content', 'm2sys' ),
			'default'     => '',
		],
		
	]
] );




// Looking section customizer 
Kirki::add_section( 'm2sys_looking_id', array(
    'title'          => esc_html__( 'Looking law section', 'm2sys' ),
    'description'    => esc_html__( 'Change looking law section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'image',
	'settings'    => 'm2sys_looking_image',
	'label'       => esc_html__( 'Image', 'm2sys' ),
	'section'     => 'm2sys_looking_id',
	'default'     => '',
	'choices'     => [
		'save_as' => 'array',
	],
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'm2sys_looking_heading',
	'label'    => esc_html__( 'Heading', 'm2sys' ),
	'section'  => 'm2sys_looking_id',
	'default'  => esc_html__( 'Looking for More Than a Law Enforcement Management System?', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'textarea',
	'settings' => 'm2sys_looking_content',
	'label'    => esc_html__( 'Content', 'm2sys' ),
	'section'  => 'm2sys_looking_id',
	'default'  => esc_html__( 'M2SYS eGov Also Provides End-to-End Solutions for Government ID Projects', 'm2sys' ),
	'priority' => 10,
] );
Kirki::add_field( 'm2sys_config_id', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Content list items', 'm2sys' ),
	'section'     => 'm2sys_looking_id',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Content list item', 'm2sys' ),
	],
	'button_label' => esc_html__('"Add new" button label (optional) ', 'm2sys' ),
	'settings'     => 'm2sys_looking_repeater',
	'default'      => [
		[
			'list_heading' => esc_html__( 'Biometric Capture Tool', 'm2sys' ),
		],
		[
			'list_heading' => esc_html__( 'eGov Platform', 'm2sys' ),
		],
		[
			'list_heading' => esc_html__( 'Biometric Matching Service', 'm2sys' ),
		],
	],
	'fields' => [
		'list_heading' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Text', 'm2sys' ),
			'default'     => '',
		],
	]
] );




// Get a free quote section customizer 
Kirki::add_section( 'm2sys_get_quote_id', array(
    'title'          => esc_html__( 'Form section', 'm2sys' ),
    'description'    => esc_html__( 'Change get quote section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'text',
	'settings' => 'm2sys_get_quote_content',
	'label'    => esc_html__( ' Get a free quote', 'm2sys' ),
	'section'  => 'm2sys_get_quote_id',
	'default'  => esc_html__( 'Get a free quote now', 'm2sys' ),
	'priority' => 10,
] );



// Footer section customizer 
Kirki::add_section( 'm2sys_footer_id', array(
    'title'          => esc_html__( 'Footer', 'm2sys' ),
    'description'    => esc_html__( 'Change footer section area content.', 'm2sys' ),
    'priority'       => 20,
) );
Kirki::add_field( 'm2sys_config_id', [
	'type'     => 'textarea',
	'settings' => 'm2sys_footer_content',
	'label'    => esc_html__( 'Copyright text', 'm2sys' ),
	'section'  => 'm2sys_footer_id',
	'default'  => esc_html__( '© 2022. All rights reserved by <a href="https://www.m2sys.com/">M2SYS</a>', 'm2sys' ),
	'priority' => 10,
] );