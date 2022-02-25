<?php 


function sidebar_widget_register(){
    register_sidebar( array(
        'name'=>__('Single Page Sidebar', 'cleaningcompany'),
        'id'=> 'sidebar-1',
        'before_widget'=> ' <div class="sidebar-box ftco-animate"><div class="categories">',
        'after_widget'=> '</div></div>',
        'before_title'=> '<h3>',
        'after_title'=> '</h3>',

    ) );
    register_sidebar( array(
        'name'=>__('Footer column 1', 'cleaningcompany'),
        'id'=> 'sidebar-2',
        'before_widget'=> '<div class="col-md-6 col-lg-3 mb-4 mb-md-0">',
        'after_widget'=> '</div>',
        'before_title'=>  '<h2 class="footer-heading">',
        'after_title'=> '</h2>',
    ) );

    register_sidebar( array(
        'name'=>__('Footer column 2', 'cleaningcompany'),
        'id'=> 'sidebar-3',
        'before_widget'=> '<div class="col-md-6 col-lg-3 mb-4 mb-md-0">',
        'after_widget'=> '</div>',
        'before_title'=> '<h2 class="footer-heading">',
        'after_title'=> '</h2>',
    ) );
    register_sidebar( array(
        'name'=>__('Footer column 3', 'cleaningcompany'),
        'id'=> 'sidebar-4',
        'before_widget'=> '<div class="col-md-6 col-lg-3 mb-4 mb-md-0">',
        'after_widget'=> '</div>',
        'before_title'=>  '<h2 class="footer-heading">',
        'after_title'=> '</h2>',
    ) );
    register_sidebar( array(
        'name'=>__('Footer column 4', 'cleaningcompany'),
        'id'=> 'sidebar-5',
        'before_widget'=> '<div class="col-md-6 col-lg-3 mb-4 mb-md-0">',
        'after_widget'=> '</div>',
        'before_title'=>  '<h2 class="footer-heading">',
        'after_title'=> '</h2>',
    ) );
    

}
add_action('widgets_init', 'sidebar_widget_register');