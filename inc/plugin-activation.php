<?php
function cleaning_theme_register_required_plugins(){

    $plugins = array(
        array(
            'name'=>__('Contact Form 7','cleaningcompany'),
            'slug'=> 'contact-form-7',
            'required'=> true,
        ),

        array(
            'name'=>__('Widget Import & Export','cleaningcompany'),
            'slug'=> 'widget-importer-exporter',
            'required'=> true,
        ),
        array(
            'name'=>__('Classic Widgets','cleaningcompany'),
            'slug'=> 'classic-widgets',
            'required'=> true,
        ),
        
        array(
            'name'=>__('Custom portfolio plugin','cleaningcompany'),
            'slug'=> 'custom-protfolio-plugin',
            'source'=> get_stylesheet_directory().'/pre-plugin/custom-protfolio-plugin.zip',
            'required'=> true,
        ),              
        array(
            'name'=>__('Codester Framework','cleaningcompany'),
            'slug'=> 'codestar-framework-master',
            'source'=> get_stylesheet_directory().'/pre-plugin/codestar-framework-master.zip',
            'required'=> true,
        ),                

    );

    $config= array(
        'id'=> 'cleaningcompany-plugin-active',
        'menu'=> 'CleaningCompany Plugins Activation',
        'parent_slug'=> 'themes.php',
        'has_notices'=> true,

    );
    tgmpa( $plugins, $config );

}

add_action( 'tgmpa_register', 'cleaning_theme_register_required_plugins' );