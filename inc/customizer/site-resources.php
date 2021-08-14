<?php function ki_site_resources($wp_customize)
{
    //setting

    $wp_customize->add_setting(
        'ki_site_resources_all_resources',
        ['default' => '']
    );
    /*-----------Article 1--------*/

    $wp_customize->add_setting(
        'ki_site_resources_a_1',
        ['default' => 'Article 1']
    );
    $wp_customize->add_setting(
        'ki_site_resources_a_l_1',
        ['default' => '']
    );
    /*-----------Article 2--------*/
    $wp_customize->add_setting(
        'ki_site_resources_a_2',
        ['default' => 'Article 2']
    );
    $wp_customize->add_setting(
        'ki_site_resources_a_l_2',
        ['default' => '']


    );  
    
    /*-----------Article 3--------*/
    $wp_customize->add_setting(
        'ki_site_resources_a_3',
        ['default' => 'Article 3']
    );
    $wp_customize->add_setting(
        'ki_site_resources_a_l_3',
        ['default' => '']
    );    
    /*-----------Article 4--------*/
    
    $wp_customize->add_setting(
        'ki_site_resources_a_4',
        ['default' => 'Article 4']
    );
    $wp_customize->add_setting(
        'ki_site_resources_a_l_4',
        ['default' => '']
    ); 
    
    /*-----------Article 5--------*/
    
    $wp_customize->add_setting(
        'ki_site_resources_a_5',
        ['default' => 'Article 5']
    );
    $wp_customize->add_setting(
        'ki_site_resources_a_l_5',
        ['default' => '']
    );







        /*-----------Video 1--------*/

        $wp_customize->add_setting(
            'ki_site_resources_v_1',
            ['default' => 'Video 1']
        );
        $wp_customize->add_setting(
            'ki_site_resources_v_l_1',
            ['default' => '']
        );
        /*-----------Video 2--------*/
        $wp_customize->add_setting(
            'ki_site_resources_v_2',
            ['default' => 'Video 2']
        );
        $wp_customize->add_setting(
            'ki_site_resources_v_l_2',
            ['default' => '']
    
    
        );  
        
        /*-----------Video 3--------*/
        $wp_customize->add_setting(
            'ki_site_resources_v_3',
            ['default' => 'Video 3']
        );
        $wp_customize->add_setting(
            'ki_site_resources_v_l_3',
            ['default' => '']
        );    
        /*-----------Video 4--------*/
        
        $wp_customize->add_setting(
            'ki_site_resources_v_4',
            ['default' => 'Video 4']
        );
        $wp_customize->add_setting(
            'ki_site_resources_v_l_4',
            ['default' => '']
        ); 
        
        /*-----------Video 5--------*/
        
        $wp_customize->add_setting(
            'ki_site_resources_v_5',
            ['default' => 'Video 5']
        );
        $wp_customize->add_setting(
            'ki_site_resources_v_l_5',
            ['default' => '']
        );
    

                /*-----------Podcast 1--------*/

                $wp_customize->add_setting(
                    'ki_site_resources_p_1',
                    ['default' => 'Podcast 1']
                );
                $wp_customize->add_setting(
                    'ki_site_resources_p_l_1',
                    ['default' => '']
                );
                /*-----------Podcast 2--------*/
                $wp_customize->add_setting(
                    'ki_site_resources_p_2',
                    ['default' => 'Podcast 2']
                );
                $wp_customize->add_setting(
                    'ki_site_resources_p_l_2',
                    ['default' => '']
            
            
                );  
                
                /*-----------Podcast 3--------*/
                $wp_customize->add_setting(
                    'ki_site_resources_p_3',
                    ['default' => 'Podcast 3']
                );
                $wp_customize->add_setting(
                    'ki_site_resources_p_l_3',
                    ['default' => '']
                );    
                /*-----------Podcast 4--------*/
                
                $wp_customize->add_setting(
                    'ki_site_resources_p_4',
                    ['default' => 'Podcast 4']
                );
                $wp_customize->add_setting(
                    'ki_site_resources_p_l_4',
                    ['default' => '']
                ); 
                
                /*-----------Podcast 5--------*/
                
                $wp_customize->add_setting(
                    'ki_site_resources_p_5',
                    ['default' => 'Podcast 5']
                );
                $wp_customize->add_setting(
                    'ki_site_resources_p_l_5',
                    ['default' => '']
                );

    

    //Section
    $wp_customize->add_section(
        'ki_site_resources',
        [
        'title' => __('Site Online Resources Section', 'kinotiwp'),
        'priority' => 250,
        'panel' => 'kinotiwp'
        ]
    );

    //All Resources  URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_resources_all_resources_input',
        array(
    'label'    => __('All Resources  URL', 'kinotiwp'),
    'section'  => 'ki_site_resources',
    'settings' => 'ki_site_resources_all_resources',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );


    //Site Online Resources article 1 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_resources_a_1_input',
        array(
    'label'    => __('Site Online Resources article 1 Text ', 'kinotiwp'),
    'section'  => 'ki_site_resources',
    'settings' => 'ki_site_resources_a_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Site Online Resources article 1 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_resources_a_l_1_input',
        array(
    'label'    => __('Site Online Resources article 1 URL', 'kinotiwp'),
    'section'  => 'ki_site_resources',
    'settings' => 'ki_site_resources_a_l_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );



        //Site Online Resources article 2 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_resources_a_2_input',
            array(
        'label'    => __('Site Online Resources article 2 Text ', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_a_2',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Online Resources article 2 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_resources_a_l_2_input',
            array(
        'label'    => __('Site Online Resources article 2 URL', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_a_l_2',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );

            //Site Online Resources article 3 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_resources_a_3_input',
        array(
    'label'    => __('Site Online Resources article 3 Text ', 'kinotiwp'),
    'section'  => 'ki_site_resources',
    'settings' => 'ki_site_resources_a_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Site Online Resources article 3 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_resources_a_l_3_input',
        array(
    'label'    => __('Site Online Resources article 3 URL', 'kinotiwp'),
    'section'  => 'ki_site_resources',
    'settings' => 'ki_site_resources_a_l_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );

        //Site Online Resources article 4 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_resources_a_4_input',
            array(
        'label'    => __('Site Online Resources article 4 Text ', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_a_4',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Online Resources article 4 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_resources_a_l_4_input',
            array(
        'label'    => __('Site Online Resources article 4 URL', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_a_l_4',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );

            //Site Online Resources article 5 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_resources_a_5_input',
        array(
    'label'    => __('Site Online Resources article 5 Text ', 'kinotiwp'),
    'section'  => 'ki_site_resources',
    'settings' => 'ki_site_resources_a_5',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Site Online Resources article 5 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_resources_a_l_5_input',
        array(
    'label'    => __('Site Online Resources article 5 URL', 'kinotiwp'),
    'section'  => 'ki_site_resources',
    'settings' => 'ki_site_resources_a_l_5',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );





        //Site Online Resources video 1 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_resources_v_1_input',
            array(
        'label'    => __('Site Online Resources video 1 Text ', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_v_1',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Online Resources Video 1 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_resources_v_l_1_input',
            array(
        'label'    => __('Site Online Resources Video 1 URL', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_v_l_1',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );


        //Site Online Resources video 2 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_resources_v_2_input',
            array(
        'label'    => __('Site Online Resources video 2 Text ', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_v_2',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Online Resources Video 2 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_resources_v_l_2_input',
            array(
        'label'    => __('Site Online Resources Video 2 URL', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_v_l_2',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );



        //Site Online Resources video 3 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_resources_v_3_input',
            array(
        'label'    => __('Site Online Resources video 3 Text ', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_v_3',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Online Resources Video 3 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_resources_v_l_3_input',
            array(
        'label'    => __('Site Online Resources Video 3 URL', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_v_l_3',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );


        //Site Online Resources video 4 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_resources_v_4_input',
            array(
        'label'    => __('Site Online Resources video 4 Text ', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_v_4',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Online Resources Video 4 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_resources_v_l_4_input',
            array(
        'label'    => __('Site Online Resources Video 4 URL', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_v_l_4',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );


        //Site Online Resources video 5 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_resources_v_5_input',
            array(
        'label'    => __('Site Online Resources video 5 Text ', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_v_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Online Resources Video 5 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_resources_v_l_5_input',
            array(
        'label'    => __('Site Online Resources Video 5 URL', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_v_l_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );






        //Site Online Resources Podcast 1 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_resources_p_1_input',
            array(
        'label'    => __('Site Online Resources Podcast 1 Text ', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_p_1',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Online Resources Podcast 1 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_resources_p_l_1_input',
            array(
        'label'    => __('Site Online Resources Podcast 1 URL', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_p_l_1',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );


                //Site Online Resources Podcast 2 Text Control
                $wp_customize->add_control(
                    new WP_Customize_Control(
                    $wp_customize,
                    'ki_site_resources_p_2_input',
                    array(
                'label'    => __('Site Online Resources Podcast 2 Text ', 'kinotiwp'),
                'section'  => 'ki_site_resources',
                'settings' => 'ki_site_resources_p_2',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Text...', 'kinotiwp'),
                )
                
            )
                )
                );
            
                //Site Online Resources Podcast 2 URL Control
                $wp_customize->add_control(
                    new Wp_Customize_Control(
                    $wp_customize,
                    'ki_site_resources_p_l_2_input',
                    array(
                'label'    => __('Site Online Resources Podcast 2 URL', 'kinotiwp'),
                'section'  => 'ki_site_resources',
                'settings' => 'ki_site_resources_p_l_2',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Insert URL...', 'kinotiwp'),
                )
                
                )
                )
                );

                        //Site Online Resources Podcast 3 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_resources_p_3_input',
            array(
        'label'    => __('Site Online Resources Podcast 3 Text ', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_p_3',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Online Resources Podcast 3 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_resources_p_l_3_input',
            array(
        'label'    => __('Site Online Resources Podcast 3 URL', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_p_l_3',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );

                //Site Online Resources Podcast 4 Text Control
                $wp_customize->add_control(
                    new WP_Customize_Control(
                    $wp_customize,
                    'ki_site_resources_p_4_input',
                    array(
                'label'    => __('Site Online Resources Podcast 4 Text ', 'kinotiwp'),
                'section'  => 'ki_site_resources',
                'settings' => 'ki_site_resources_p_4',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Text...', 'kinotiwp'),
                )
                
            )
                )
                );
            
                //Site Online Resources Podcast 4 URL Control
                $wp_customize->add_control(
                    new Wp_Customize_Control(
                    $wp_customize,
                    'ki_site_resources_p_l_4_input',
                    array(
                'label'    => __('Site Online Resources Podcast 4 URL', 'kinotiwp'),
                'section'  => 'ki_site_resources',
                'settings' => 'ki_site_resources_p_l_4',
                'type' => 'text',
                'input_attrs' => array(
                    'placeholder' => __('Insert URL...', 'kinotiwp'),
                )
                
                )
                )
                );

                        //Site Online Resources Podcast 5 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_resources_p_5_input',
            array(
        'label'    => __('Site Online Resources Podcast 5 Text ', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_p_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Online Resources Podcast 5 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_resources_p_l_5_input',
            array(
        'label'    => __('Site Online Resources Podcast 5 URL', 'kinotiwp'),
        'section'  => 'ki_site_resources',
        'settings' => 'ki_site_resources_p_l_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );

}