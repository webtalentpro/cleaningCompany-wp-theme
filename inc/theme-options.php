<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'cleaning_framework';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' =>__('Theme Options', 'cleaningcompany'),
    'menu_slug'  => 'theme-options',
    'framework_title'=>__('Cleaningcompany options', 'cleaningcompany')
  ) );

  //

  //Header root section

  CSF::createSection($prefix, array(

    'title'=>__('Header Area', 'cleaningcompany'),
    'id'=> 'header_section',
    'icon'=>'fa fa-home',

  ));
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  =>__('Header Top', 'cleaningcompany'),
    'icon'=>'fa fa-chevron-right',
    'parent'=> 'header_section',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'header-email',
        'type'  => 'text',
        'title' => 'Header Email',
      ),

      array(
        'id'    => 'header-phone',
        'type'  => 'text',
        'title' => 'Header Phone',
      ),

    )
  ) );

  // Header Icon Group
  CSF::createSection($prefix, array(
      'title'=>__('Header Social Icon', 'cleaningcompany'),
      'icon'=>'fa fa-chevron-right',
      'parent'=> 'header_section',
    
      'fields'=>array(

        array(
            'title'=>__('Social Icon Group', 'cleaningcompany'),
            'id'=> 'header_social_group',
            'type'=> 'group',
            'button_title'=> 'Add Social Icon Group',
            'fields'=>array(
                array(
                    'title'=> 'Social Name',
                    'id'=> 'header_social_name',
                    'type'=> 'text',
                ), 
                array(
                    'title'=> 'Social Icon',
                    'id'=> 'header_social_icon',
                    'type'=> 'icon',

                ),
                array(
                    'title'=> 'Icon URL',
                    'id'=> 'header_social_url',
                    'type'=> 'link',
                    
                ),

            )
        )


      )

  ));

  // Header  Logo
  CSF::createSection($prefix, array(
      'title'=>__('Header Logo', 'cleaningcompany'),
      'parent'=>'header_section',
      'icon'=>'fa fa-chevron-right',
      'fields'=>array(
      array(
        'id'    => 'header_logo',
        'type'  => 'media',
        'title' => 'Upload Header Logo',
      ),)
      ));

// Home page 
  CSF::createSection($prefix, array(
        'title'=>__('Hero Section', 'cleaningcompany'),
        'id'=> 'hero_section',
        'icon'=>'fa fa-home',
        
    ));  

        CSF::createSection($prefix, array(
            'title'=>__('Hero Banner', 'cleaningcompany'),
            'parent'=>'hero_section',
            'icon'=>'fa fa-chevron-right',
            'fields'=>array(
                array(
                    'title'=>'Hero Subtitle',
                    'id'=> 'hero_subtitle',
                    'type'=> 'text',
                ),
                array(
                    'title'=> 'Hero Title',
                    'id'=> 'hero_title',
                    'type'=> 'text',

                ),
                array(
                    'title'=> 'Herro Button Text',
                    'id'=> 'hero_btn_text',
                    'type'=> 'text',
                ),
                array(
                    'title'=> 'Button URL',
                    'type'=> 'link',
                    'id'=> 'hero_btn_link',
                ),

                array(
                    'title'=> 'Hero Banner Background',
                    'type'=> 'media',
                    'id'=> 'hero_banner_bg',
                )
            )
                ));


     // About Section


CSF::createSection($prefix, array(
    'title'=>__('About Section', 'cleaningcompany'),
    'id'=> 'about_section',
    'icon'=>'fa fa-home',
    
));  
     CSF::createSection($prefix, array(
         'title'=>__('About Section Left', 'cleaningcompany'),
         'parent'=> 'about_section',
         'icon'=>'fa fa-chevron-right',
         
         'fields'=> array(
             array(
                 'title'=>'About Image',
                 'type'=> 'media',
                 'id'=> 'about_image',
             ), 
             array(
                 'title'=>__('About Card title', 'cleaningcompany'),
                 'id'=> 'about_card_title',
                 'type'=> 'text',
             ),

             array(
                'title'=>__('Opening Days', 'cleaningcompany'),
                'id'=> 'opening_days',
                'type'=> 'wp_editor',
            ),
            array(
                'title'=>__('Vacations Days', 'cleaningcompany'),
                'id'=> 'vacations_days',
                'type'=> 'wp_editor',
            ),
            array(
                'title'=>__('Emergency Phone', 'cleaningcompany'),
                'id'=> 'about_emergency_phone',
                'type'=> 'text',
            ),
         )

     ));

     CSF::createSection($prefix, array(
        'title'=> 'About Section Right',      
        'icon'=>'fa fa-chevron-right',
        'parent'=> 'about_section',
        'fields'=>array(
            array(
                'title'=> 'Subtitle',
                'type'=>'text',
                'id'=>'about_right_subtitle', 
            ),

            array(
                'title'=> 'Title',
                'type'=>'text',
                'id'=>'about_right_title', 
            ),
            array(
                'title'=> 'Description',
                'type'=>'wp_editor',
                'id'=>'about_right_desc', 
            ),
        )
        

    ));

    CSF::createSection($prefix, array(
        'title'=> 'About Section Counters',
        
        'icon'=>'fa fa-chevron-right',
        'parent'=> 'about_section',
        'fields'=>array(
            array(
                'title'=> 'Add Counters Item',
                'type'=> 'group',
                'id'=> 'counter_items',
                'button_title'=> 'Add Counter Item',
                'fields'=>array(
                    array(
                        'title'=> 'Counter Item Number',
                        'id'=> 'counter_item_number',
                        'type'=> 'number',
                    ),
                    array(
                        'title'=> 'Counter Item subtitle',
                        'id'=> 'counter_item_subtitle',
                        'type'=> 'text',
                    ),
                    

                )
            ),
           
           
           
           
           
           
        )
        
    ));


 // Service Area
 CSF::createSection($prefix, array(
    'title'=>__('Service Section', 'cleaningcompany'),
    'id'=> 'service_section',
    'icon'=>'fa fa-home',
    
));  
CSF::createSection($prefix, array(
    'title'=>__('Section Title', 'cleaningcompany'),
    'icon'=>'fa fa-chevron-right',
    'parent'=> 'service_section',

    'fields'=>array(
        array(
            'title'=> 'Section Subtitle',
            'id'=> 'service_section_subtitle',
            'type'=> 'text',
        ),
        array(
            'title'=> 'Section title',
            'id'=> 'service_section_title',
            'type'=> 'text',
        ),
    )

));  
CSF::createSection($prefix, array(
    'title'=>__('Service Features', 'cleaningcompany'),
    'icon'=>'fa fa-chevron-right',
    'parent'=> 'service_section',
  
    'fields'=>array(
      array(
          'title'=>__('Service Items Group', 'cleaningcompany'),
          'id'=> 'service_items_group',
          'type'=> 'group',
          'button_title'=> 'Add Service Item',
          'fields'=>array(

            array(
                'title'=> 'Item Title',
                'id'=> 'service_item_title',
                'type'=> 'text',
            ), 
            array(
                'title'=> 'Item Icon',
                'id'=> 'service_item_icon',
                'type'=> 'icon',
            ),
              array(
                  'title'=> 'Item Description',
                  'id'=> 'service_item_desc',
                  'type'=> 'textarea',
                  
              ),
          )
      )
    )
));

// Team Section

CSF::createSection($prefix, array(
    'title'=> 'Team Section',
    'id'=> 'team_section',
    'icon'=>'fa fa-home',
    
));
CSF::createSection($prefix, array(
    'title'=>'Section Title',
    'icon'=>'fa fa-chevron-right',
    'parent'=> 'team_section',
    'fields'=> array(
        array(
            'title'=> 'Section Subtitle',
            'id'=> 'team_sec_subtitle',
            'type'=> 'text',
        ),

        array(
            'title'=> 'Section title',
            'id'=> 'team_sec_title',
            'type'=> 'text',
        ),
        array(
            'title'=> 'Section Description',
            'id'=> 'team_sec_desc',
            'type'=>'textarea'
        ),
        array(
            'title'=> 'Section Button Text',
            'id'=> 'team_sec_btn_text',
            'type'=> 'text',
        ),
        array(
            'title'=> 'Section Button Link',
            'id'=> 'team_sec_btn_link',
            'type'=> 'link',
        ),
    )
    

        ));
    CSF::createSection($prefix, array(
        'title'=> 'Team List',
        'icon'=>'fa fa-chevron-right',
        'parent'=> 'team_section',
        'fields'=> array(
            array(
                'title'=> 'Add New Team Item',
                'id'=> 'team_list',
                'type'=> 'group',
                'button_title'=> 'Add Team Member',
                'fields'=>array(                              
                    array(
                        'title'=>'Team Member Name',
                        'id'=> 'team_member_name',
                        'type'=> 'text'
                    ),
                    array(
                        'title'=>'Team Member Image',
                        'id'=> 'team_member_image',
                        'type'=> 'media'
                    ),
                    array(
                        'title'=>'Team Member job title',
                        'id'=> 'team_member_job_title',
                        'type'=> 'text'
                    ),
              
                     array(
                         'title'=> 'Facebook',
                         'subtitle'=> 'Add Facebook profile link',
                         'id'=> 'team_socail_facebook_link',
                         'type'=> 'link',
                     ),
                     array(
                        'title'=> 'Linkedin',
                        'subtitle'=> 'Add Linkedin profile link',
                        'id'=> 'team_socail_linkedin_link',
                        'type'=> 'link',
                    ),
                    array(
                        'title'=> 'Twitter',
                        'subtitle'=> 'Add twitter profile link',
                        'id'=> 'team_socail_twitter_link',
                        'type'=> 'link',
                    ),
                  
                   
                    )

                )
       ),


     ) );

// Testimonial section

CSF::createSection($prefix, array(
    'title'=>__('Testimonial Section', 'cleaningcompany' ),
    'id'=> 'testimonial_section',
    'icon'=>'fa fa-home',

));

CSF::createSection($prefix, array(
    'title'=>__('Section Title', 'cleaningcompany'),
    'icon'=>'fa fa-chevron-right',
    'parent'=> 'testimonial_section',

    'fields'=>array(
        array(
            'title'=> 'Section Subtitle',
            'id'=> 'testi_section_subtitle',
            'type'=> 'text',
        ),
        array(
            'title'=> 'Section title',
            'id'=> 'testi_section_title',
            'type'=> 'text',
        ),
    )
    ));

    
CSF::createSection($prefix, array(
    'title'=>__('Testimonial Items', 'cleaningcompany'),
    'icon'=>'fa fa-chevron-right',
    'parent'=> 'testimonial_section',

    'fields'=>array(
        array(
            'title'=> 'Add Testimonial Items',
            'id'=> 'testi_items',
            'type'=> 'group',
            'button_title'=> 'Add New Testimonial Item',
            'fields'=>array(
                array(
                    'title'=> 'Person Name',
                    'id'=> 'testi_per_name',
                    'type'=> 'text',
                ),
                array(
                    'title'=> 'Person Image',
                    'id'=> 'testi_per_img',
                    'type'=> 'media',
                ),
                array(
                    'title'=> 'Person Degignation',
                    'id'=> 'testi_per_deg',
                    'type'=> 'text',
                ),
                array(
                    'title'=> 'Person Description',
                    'id'=> 'testi_per_desc',
                    'type'=> 'textarea',
                ),

            )
        ),
    )
    ));

// video section

CSF::createSection($prefix, array(
    'title'=> 'Video Section',
    'id'=> 'video_section',
    'icon'=>'fa fa-home',
    'fields'=>array(
        array(
            'title'=> 'Video Title',
            'id'=> 'video_title',
            'type'=> 'text',
        ),
        array(
            'title'=> 'Video link',
            'id'=> 'video_link',
            'type'=> 'link',
        ),
        array(
            'title'=> 'Video Background Image',
            'id'=> 'video_image',
            'type'=> 'media',
        ),
    )
    
));

//Price and Plans

CSF::createSection($prefix, array(

    'title'=> 'Price and Plan',
    'id'=> 'price_plan',
    'icon'=>'fa fa-home',

));
CSF::createSection($prefix, array(
    'title'=> 'Section Title',
    'icon'=>'fa fa-chevron-right',
    'parent'=> 'price_plan',
    'fields'=>array(
        array(
            'title'=> 'Title',
            'id'=> 'plan_section_title',
            'type'=> 'text',
        ),
        array(
            'title'=> 'Sub-Title',
            'id'=> 'plan_section_subtitle',
            'type'=> 'text',
        ),
        
    )
    
    ));

    CSF::createSection($prefix, array(
        'title'=> 'Package List',
        'icon'=>'fa fa-chevron-right',
        'parent'=> 'price_plan',
        'fields'=>array(
            array(
                'title'=> 'Add Package List Item',
                'id'=> 'plan_package_group',
                'type'=> 'group',
                'button_title'=> 'Add New package',
                'fields'=>array(
                    array(
                        'title'=> 'Package Title',
                        'id'=> 'package_title',
                        'type'=> 'text',
                    ),
                    array(
                        'title'=> 'Package Icon',
                        'id'=> 'package_icon',
                        'type'=> 'icon',
                    ),
                    array(
                        'title'=> 'Package Price',
                        'id'=> 'package_price',
                        'type'=> 'text',
                    ),
                    array(
                        'title'=> 'Package Feature',
                        'id'=> 'package_feature',
                        'type'=> 'wp_editor',
                    ),
                    array(
                        'title'=> 'Package Button Text',
                        'id'=> 'package_btn_text',
                        'type'=> 'text',
                    ),
                    array(
                        'title'=> 'Package Button link',
                        'id'=> 'package_btn_link',
                        'type'=> 'link',
                    ),

                )
            ),
    
           
        )
        
        ));  

       CSF::createSection($prefix, array(
           'title'=>'Footer Section',
           'icon'=>'fa fa-home',
           'id'=> 'copyright',
           'fields'=>array(
               array(
                   'title'=> 'Footer copyright text',
                   'id'=> 'copyright_text',
                   'type'=> 'wp_editor',
               )
           )
       )) ;

       CSF::createSection($prefix, array(
        'title'=>'Contact Page',
        'icon'=>'fa fa-home',
      
        'fields'=>array(
            array(
                'title'=> 'Address',
                'id'=> 'contact_addr',
                'type'=> 'text',
            ),
            array(
                'title'=> 'Phone',
                'id'=> 'contact_phone',
                'type'=> 'text',
            ),
            array(
                'title'=> 'Email',
                'id'=> 'contact_email',
                'type'=> 'text',
            ),
            array(
                'title'=> 'Website',
                'id'=> 'contact_web',
                'type'=> 'text',
            )
        )
    )) ;










}