<?php

require_once get_template_directory().'/vendor/class-tgm-plugin-activation.php';

if (!function_exists('register_jl_cdatos_plugins')) {
	
	function register_jl_cdatos_plugins () {

		$plugins = [
			 array(
			 	'name' => 'Revolution Slider WP',
	            'slug' => 'revslider',
	            'source' => 'http://astudio.si/preview/plugins/'.'accounting'.'/revslider.zip',
	            'required' => false,
	            'version' => '',
	            'force_activation' => false,
	            'force_deactivation' => false,
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
	            'force_deactivation' => false,
	            'external_url' => '',
        	),
        	array(
	            'name' => 'Visual Composer',
	            'slug' => 'js_composer',
	            'source' => 'http://astudio.si/preview/plugins/'.'accounting'.'/js_composer.zip',
	            'required' => false,
	            'version' => '',
	            'force_activation' => false,
	            'force_deactivation' => false,
	            'external_url' => '',
        	),
        	array(
				'name'     				=> esc_html__( 'WPRT Addons for Visual Composer', 'thejlmedia'),  // The plugin name
				'slug'     				=> 'WPRT_VC_Addons', // The plugin slug (typically the folder name)
				'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
				'source'             	=> esc_url('http://ninzio.com/craft/_plugins/WPRT_VC_Addons.zip'),
				'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			),
			array(
				'name'     				=> esc_html__( 'WPRT Custom Post Type', 'thejlmedia'), // The plugin name
				'slug'     				=> 'WPRT_Custom_Post_Type', // The plugin slug (typically the folder name)
				'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
				'source'             	=> esc_url('http://ninzio.com/craft/_plugins/WPRT_Custom_Post_Type.zip'),
				'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			),
			array(
				'name' => 'WordPress Twitter Feeds With Shortcode',
				'slug' => 'shortcode-twitter-feeds',
				'required' => true,
			),array(
				'name' => 'Custom Facebook Feed',
				'slug' => 'custom-facebook-feed',
				'required' => true,
			),array(
				'name' => 'Visual Portfolio',
				'slug' => 'visual-portfolio',
				'required' => true,
			),array(
				'name' => 'AWSM Team',
				'slug' => 'awsm-team',
				'required' => true,
			),array(
				'name' => 'Accordion',
				'slug' => 'accordions',
				'required' => true,
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