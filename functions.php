<?php

//menu
require_once 'lib/bootstrap_4_walker_nav_menu.php';

//required plugins
include_once 'lib/jl_require_plugins.php';

/*  LOAD SCRIPTS */
if(!function_exists('jlcdatos_load_scripts')) {
    function jlcdatos_load_scripts() {
        //load bootstrap
        wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.min.css','','1.0','all');
        //load styles
        wp_register_style('style', get_stylesheet_uri(), ['bootstrap-css'], '1.0');
        wp_enqueue_style('style');

        /* SCRIPTS */ 
        wp_enqueue_script('jquery');
        wp_enqueue_script('popper',get_template_directory_uri().'/assets/js/popper.min.js' , ['jquery'], '1.0', true);
        wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.min.js' , ['popper','jquery'], '1.0', true);
    }
}

add_action('wp_enqueue_scripts', 'jlcdatos_load_scripts');

/* ADD FUNCTIONS */ 
if(!function_exists('jlcdatos_setup')) {
    function jlcdatos_setup() {
        register_nav_menu('main',esc_html('Menú Principal','jlcdatos'));
    }
}
add_action('after_setup_theme', 'jlcdatos_setup');

/* FILTROS NAV (AGREGA CLASE NAV-LINK A a) */ 
if(!function_exists('jlcdatos_link_class')) {
    function jlcdatos_link_class($attr,$item, $args) {
        if($args->theme_location == 'main') {
            $attr['class'] = 'nav-link';
        }
        return $attr;
    }
}
// Agrega clase 'nav-item' a elemento li del nav
add_filter('nav_menu_link_attributes', 'jlcdatos_link_class', 10, 3);

if(!function_exists('jlcdatos_item_class')) {
    function jlcdatos_item_class($classes, $item, $args) {
        $classes[] = 'nav-item';
        if( in_array('current-menu-item', $classes) ){
            $classes[] = 'active ';
        }
        return $classes;
    }
}
add_filter('nav_menu_css_class','jlcdatos_item_class',1,3);

//SUPPORTS
add_theme_support( 'title-tag' );
// add_theme_support( 'custom-header' );
// add_theme_support( 'custom-background' );
add_theme_support( 'post-thumbnails' );


/* CUSTOMIZER */
if(!function_exists('jlcdatos_customizer')) {

    function jlcdatos_customizer($wp_customize) {
        $wp_customize->add_panel('general',[
            'title' => __('General','jlcdatos'),
            'description' => __('Logo','jlcdatos'),
            'priority' => 1
        ]);

        /*LOGO*/ 
        $wp_customize->add_action( 'logo', [
            'title' => __('Logotipo','jlcdatos'),
            'panel' => 'general',
            'priority' => 1
        ]);
    }

add_action( 'customize_register', 'jlcdatos_customizer',10, 1 );
}
