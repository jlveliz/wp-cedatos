<?php

require_once get_template_directory().'/vendor/class-tgm-plugin-activation.php';

if (!function_exists('register_jl_cdatos_plugins')) {
	
	function register_jl_cdatos_plugins () {

		$plugins = [
			 array(
			 	'name' => 'Revolution Slider WP',
	            'slug' => 'revslider',
	            'source' => get_template_directory().'/vendor/revslider.zip',
	            'required' => true,
	            'version' => '',
	            'force_activation' => false,
	            'force_deactivation' => true,
	            'external_url' => '',	
        	),
        	array(
            	'name' => 'Contact form 7',
	            'slug' => 'contact-form-7',
	            'required' => true,
	            'version' => '',
	            'force_activation' => false,
	            'force_deactivation' => false,
	            'external_url' => '',
        	),
        	array(
	            'name' => 'Newsletter',
	            'slug' => 'newsletter',
	            'required' => false,
	            'version' => '',
	            'force_activation' => false,
	            'force_deactivation' => true,
	            'external_url' => '',
        	),
        	array(
	            'name' => 'Visual Composer',
				'slug' => 'js_composer',
				'source' => get_template_directory().'/vendor/js_composer.zip',
	            'required' => true,
	            'version' => '',
	            'force_activation' => false,
	            'force_deactivation' => false,
	            'external_url' => '',
        	),
        	/*array(
				'name'     				=> esc_html__( 'WPRT Addons for Visual Composer', 'thejlmedia'),  // The plugin name
				'slug'     				=> 'WPRT_VC_Addons', // The plugin slug (typically the folder name)
				'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
				'source'             	=> esc_url('http://ninzio.com/craft/_plugins/WPRT_VC_Addons.zip'),
				'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			),*/
			array(
				'name' => 'Visual Portfolio',
				'slug' => 'visual-portfolio',
				'required' => true,
				'force_activation' => false,
			),array(
				'name' => 'AWSM Team',
				'slug' => 'awsm-team',
				'required' => true,
				'force_activation' => false,
			),
			/*array(
				'name' => 'Accordion',
				'slug' => 'accordions',
				'required' => true,
				
			),*/
			array(
				'name' => 'Better Categories Images',
				'slug' => 'better-categories-images',
				'required' => true,
				'force_activation' => false,
				'force_deactivation' => false,
			),array(
				'name' => 'Ultimate Member – User Profile & Membership Plugin',
				'slug' => 'ultimate-member',
				'required' => true,
				'force_activation' => false,
			),array(
				'name' => 'Post title marquee scroll',
				'slug' => 'post-title-marquee-scroll',
				'required' => true,
				'force_activation' => false,
			)
		];

		$config = array(
        	'menu'         => 'install-required-plugins',
        	'is_automatic' => true,
    	);
    	
    	tgmpa($plugins, $config);
	}

}


add_action('tgmpa_register', 'register_jl_cdatos_plugins');