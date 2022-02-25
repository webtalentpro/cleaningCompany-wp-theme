<?php


function cleaningCompany_after_theme_setup(){

    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( "wp-block-styles" ) ;
    add_theme_support( "html5" ) ;
    add_theme_support( "custom-header" ) ;
    add_theme_support( 'post-thumbnails', array('post', 'page', 'portfolio') );


    load_theme_textdomain( 'cleaningCompany-texdomain', get_template_directory_uri(  ).'/languages' );
    register_nav_menus( array(
        'primary_menu'=>__('Primary Menu', 'cleaningcompany'),
    ) );

}
add_action( 'after_setup_theme', 'cleaningCompany_after_theme_setup' );

function excerpt_more_blog($more){
    global $post;
    return '<br>';
}
add_action( 'excerpt_more', 'excerpt_more_blog');


function excerpt_length_blog($length){
    return 15;

}
add_action( 'excerpt_length', 'excerpt_length_blog');