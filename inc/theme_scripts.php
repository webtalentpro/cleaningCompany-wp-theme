<?php 

function cleaningCompany_theme_scripts(){
 wp_enqueue_style( 'stylesheet', get_stylesheet_uri(  ) );
 wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap' );

 wp_enqueue_style( 'owl', get_template_directory_uri(  ).'/css/owl.carousel.min.css', array(), '2.3.0',  'all' );
 wp_enqueue_style( 'animate', get_template_directory_uri(  ).'/css/animate.css', array(), '1.0.0',  'all' );
 wp_enqueue_style( 'default', get_template_directory_uri(  ).'/css/owl.theme.default.min.css', array(), '2.2.1',  'all' );
 wp_enqueue_style( 'magnific', get_template_directory_uri(  ).'/css/magnific-popup.css', array(), '1.0.0',  'all' );

 wp_enqueue_style( 'custom-css', get_template_directory_uri(  ).'/css/style.css', array(), '4.2.1 ',  'all' );
 wp_enqueue_style( 'fontawesome',  'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '5.13.0', 'all' );


 wp_enqueue_script( 'jquery');
 wp_enqueue_script( 'migrate', get_template_directory_uri(  ).'/js/jquery-migrate-3.0.1.min.js', array(), '3.0.1', true );
 wp_enqueue_script( 'popper', get_template_directory_uri(  ).'/js/popper.min.js', array(), '3.0.1', true );
 wp_enqueue_script( 'bootstrap', get_template_directory_uri(  ).'/js/bootstrap.min.js', array(), '3.0.1', true );
 wp_enqueue_script( 'easing', get_template_directory_uri(  ).'/js/jquery.easing.1.3.js', array(), '1.3', true );
 wp_enqueue_script( 'waypoints', get_template_directory_uri(  ).'/js/jquery.waypoints.min.js', array(), '3.0.1', true );
 wp_enqueue_script( 'stellar', get_template_directory_uri(  ).'/js/jquery.stellar.min.js', array(), '3.0.1', true );
 wp_enqueue_script( 'animate-num', get_template_directory_uri(  ).'/js/jquery.animateNumber.min.js', array(), '3.0.1', true );
 wp_enqueue_script( 'carousel', get_template_directory_uri(  ).'/js/owl.carousel.min.js', array(), '3.0.1', true );
 wp_enqueue_script( 'popup', get_template_directory_uri(  ).'/js/jquery.magnific-popup.min.js', array(), '3.0.1', true );
 wp_enqueue_script( 'sclollax', get_template_directory_uri(  ).'/js/jscrollax.min.js', array(), '3.0.1', true );
 wp_enqueue_script( 'g-map', get_template_directory_uri(  ).'/js/google-map.js', array(), '3.0.1', true );
 wp_enqueue_script( 'custom-js', get_template_directory_uri(  ).'/js/main.js', array(), '3.0.1', true );
 wp_enqueue_script('google-map-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', true );


}
add_action('wp_enqueue_scripts', 'cleaningCompany_theme_scripts');

