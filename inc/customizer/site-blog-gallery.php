<?php function ki_site_blog_gallery_customize_section($wp_customize)
{
    //setting

    $wp_customize->add_setting(
        'ki_site_blog_gallery_1',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_l_1',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_2',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'ki_site_blog_gallery_l_2',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_3',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_l_3',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_4',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_l_4',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_5',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_l_5',
        ['default' => '']
    );
    
    $wp_customize->add_setting(
        'ki_site_blog_gallery_6',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_l_6',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'ki_site_blog_gallery_7',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_l_7',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_8',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_blog_gallery_l_8',
        ['default' => '']
    );

    //Section
    $wp_customize->add_section(
        'ki_site_blog_gallery',
        [
        'title' => __('Homepage Blog Gallery Section', 'kinotiwp'),
        'priority' => 250,
        'panel' => 'kinotiwp'
        ]
    );

    //Site Blog Gallery 1 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'ki_site_blog_gallery_1_input',
        array(
    'label'    => __('Site Blog Gallery 1', 'kinotiwp'),
    'section'  => 'ki_site_blog_gallery',
    'settings' => 'ki_site_blog_gallery_1',
    )
    )
    );


    //Site Blog Gallery 1 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_blog_gallery_l_1_input',
        array(
    'label'    => __('Site Blog Gallery 1 URL', 'kinotiwp'),
    'section'  => 'ki_site_blog_gallery',
    'settings' => 'ki_site_blog_gallery_l_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );

    //Site Blog Gallery 2 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'ki_site_blog_gallery_2_input',
        array(
    'label'    => __('Site Blog Gallery 2', 'kinotiwp'),
    'section'  => 'ki_site_blog_gallery',
    'settings' => 'ki_site_blog_gallery_2',
    )
    )
    );


    //Site Blog Gallery 2 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_blog_gallery_l_2_input',
        array(
    'label'    => __('Site Blog Gallery 2 URL', 'kinotiwp'),
    'section'  => 'ki_site_blog_gallery',
    'settings' => 'ki_site_blog_gallery_l_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );

    //Site Blog Gallery 3 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'ki_site_blog_gallery_3_input',
        array(
    'label'    => __('Site Blog Gallery 3', 'kinotiwp'),
    'section'  => 'ki_site_blog_gallery',
    'settings' => 'ki_site_blog_gallery_3',
    )
    )
    );

   
    //Site Blog Gallery 3 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_blog_gallery_l_3_input',
        array(
    'label'    => __('Site Blog Gallery 3 URL', 'kinotiwp'),
    'section'  => 'ki_site_blog_gallery',
    'settings' => 'ki_site_blog_gallery_l_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );

    //Site Blog Gallery 4 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'ki_site_blog_gallery_4_input',
        array(
    'label'    => __('Site Blog Gallery 4', 'kinotiwp'),
    'section'  => 'ki_site_blog_gallery',
    'settings' => 'ki_site_blog_gallery_4',
    )
    )
    );

    //Site Blog Gallery 4 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_blog_gallery_l_4_input',
        array(
    'label'    => __('Site Blog Gallery 4 URL', 'kinotiwp'),
    'section'  => 'ki_site_blog_gallery',
    'settings' => 'ki_site_blog_gallery_l_4',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );


        //Site Blog Gallery 5 Control
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize,
            'ki_site_blog_gallery_5_input',
            array(
        'label'    => __('Site Blog Gallery 5', 'kinotiwp'),
        'section'  => 'ki_site_blog_gallery',
        'settings' => 'ki_site_blog_gallery_5',
        )
        )
        );
           //Site Blog Gallery 5 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_blog_gallery_l_5_input',
            array(
        'label'    => __('Site Blog Gallery 5 URL', 'kinotiwp'),
        'section'  => 'ki_site_blog_gallery',
        'settings' => 'ki_site_blog_gallery_l_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );

         //Site Blog Gallery 6 Control
         $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize,
            'ki_site_blog_gallery_6_input',
            array(
        'label'    => __('Site Blog Gallery 6', 'kinotiwp'),
        'section'  => 'ki_site_blog_gallery',
        'settings' => 'ki_site_blog_gallery_6',
        )
        )
        );
    
     
        //Site Blog Gallery 6 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_blog_gallery_l_6_input',
            array(
        'label'    => __('Site Blog Gallery 6 URL', 'kinotiwp'),
        'section'  => 'ki_site_blog_gallery',
        'settings' => 'ki_site_blog_gallery_l_6',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );

                 //Site Blog Gallery 7 Control
                 $wp_customize->add_control(
                    new WP_Customize_Image_Control(
                    $wp_customize,
                    'ki_site_blog_gallery_7_input',
                    array(
                'label'    => __('Site Blog Gallery 7', 'kinotiwp'),
                'section'  => 'ki_site_blog_gallery',
                'settings' => 'ki_site_blog_gallery_7',
                )
                )
                );
            
             
                //Site Blog Gallery 7 URL Control
                $wp_customize->add_control(
                    new Wp_Customize_Control(
                    $wp_customize,
                    'ki_site_blog_gallery_l_7_input',
                    array(
                'label'    => __('Site Blog Gallery 7 URL', 'kinotiwp'),
                'section'  => 'ki_site_blog_gallery',
                'settings' => 'ki_site_blog_gallery_l_7',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Insert URL...', 'kinotiwp'),
                )
                
                )
                )
                );

                         //Site Blog Gallery 8 Control
         $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize,
            'ki_site_blog_gallery_8_input',
            array(
        'label'    => __('Site Blog Gallery 8', 'kinotiwp'),
        'section'  => 'ki_site_blog_gallery',
        'settings' => 'ki_site_blog_gallery_8',
        )
        )
        );
    
     
        //Site Blog Gallery 8 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_blog_gallery_l_8_input',
            array(
        'label'    => __('Site Blog Gallery 8 URL', 'kinotiwp'),
        'section'  => 'ki_site_blog_gallery',
        'settings' => 'ki_site_blog_gallery_l_8',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );

}