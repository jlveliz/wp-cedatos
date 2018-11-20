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