<?php function ki_site_preview_choices_customize_section($wp_customize)
{
    //setting

    $wp_customize->add_setting(
        'ki_site_preview_choices_1',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_h_1',
        ['default' => 'Short title, good text']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_t_1',
        ['default' => 'Business Notes']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_l_1',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_preview_choices_2',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_h_2',
        ['default' => 'Short title, good text']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_t_2',
        ['default' => 'Marketing Notes']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_l_2',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_preview_choices_3',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_h_3',
        ['default' => 'Short title, good text']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_t_3',
        ['default' => 'Finance Notes']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_l_3',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_preview_choices_4',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_h_4',
        ['default' => 'Short title, good text']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_t_4',
        ['default' => 'Finance Notes']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_l_4',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_site_preview_choices_5',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_h_5',
        ['default' => 'Short title, good text']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_t_5',
        ['default' => 'Finance Notes']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_l_5',
        ['default' => '']
    );
    
    $wp_customize->add_setting(
        'ki_site_preview_choices_6',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_h_6',
        ['default' => 'Short title, good text']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_t_6',
        ['default' => 'Finance Notes']
    );
    $wp_customize->add_setting(
        'ki_site_preview_choices_l_6',
        ['default' => '']
    );

    //Section
    $wp_customize->add_section(
        'ki_site_preview_choices',
        [
        'title' => __('Homepage Site Choices Section', 'kinotiwp'),
        'priority' => 250,
        'panel' => 'kinotiwp'
        ]
    );

    //Site Preview Choices (Notes List) 1 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'ki_site_preview_choices_1_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 1', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_1',
    )
    )
    );

    //Site Preview Choices (Notes List) 1 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_h_1_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 1 Heading', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_h_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Site Preview Choices (Notes List) 1 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_t_1_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 1 Text ', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_t_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Site Preview Choices (Notes List) 1 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_l_1_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 1 URL', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_l_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );

    //Site Preview Choices (Notes List) 2 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'ki_site_preview_choices_2_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 2', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_2',
    )
    )
    );

    //Site Preview Choices (Notes List) 2 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_h_2_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 2 Heading', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_h_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Site Preview Choices (Notes List) 2 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_t_2_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 2 Text ', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_t_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'kinotiwp'),
    )
    
)
    )
    );


    //Site Preview Choices (Notes List) 2 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_l_2_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 2 URL', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_l_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );

    //Site Preview Choices (Notes List) 3 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'ki_site_preview_choices_3_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 3', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_3',
    )
    )
    );

    //Site Preview Choices (Notes List) 3 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_h_3_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 3 Heading', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_h_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Site Preview Choices (Notes List) 3 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_t_3_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 3 Text ', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_t_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'kinotiwp'),
    )
    
)
    )
    );


    //Site Preview Choices (Notes List) 3 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_l_3_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 3 URL', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_l_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );

    //Site Preview Choices (Notes List) 4 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'ki_site_preview_choices_4_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 4', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_4',
    )
    )
    );

    //Site Preview Choices (Notes List) 4 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_h_4_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 4 Heading', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_h_4',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Site Preview Choices (Notes List) 4 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_t_4_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 4 Text ', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_t_4',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'kinotiwp'),
    )
    
)
    )
    );


    //Site Preview Choices (Notes List) 4 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_preview_choices_l_4_input',
        array(
    'label'    => __('Site Preview Choices (Notes List) 4 URL', 'kinotiwp'),
    'section'  => 'ki_site_preview_choices',
    'settings' => 'ki_site_preview_choices_l_4',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );


        //Site Preview Choices (Notes List) 5 Control
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize,
            'ki_site_preview_choices_5_input',
            array(
        'label'    => __('Site Preview Choices (Notes List) 5', 'kinotiwp'),
        'section'  => 'ki_site_preview_choices',
        'settings' => 'ki_site_preview_choices_5',
        )
        )
        );
    
        //Site Preview Choices (Notes List) 5 Header Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_preview_choices_h_5_input',
            array(
        'label'    => __('Site Preview Choices (Notes List) 5 Heading', 'kinotiwp'),
        'section'  => 'ki_site_preview_choices',
        'settings' => 'ki_site_preview_choices_h_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Header Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Preview Choices (Notes List) 5 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_preview_choices_t_5_input',
            array(
        'label'    => __('Site Preview Choices (Notes List) 5 Text ', 'kinotiwp'),
        'section'  => 'ki_site_preview_choices',
        'settings' => 'ki_site_preview_choices_t_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
    
        //Site Preview Choices (Notes List) 5 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_preview_choices_l_5_input',
            array(
        'label'    => __('Site Preview Choices (Notes List) 5 URL', 'kinotiwp'),
        'section'  => 'ki_site_preview_choices',
        'settings' => 'ki_site_preview_choices_l_5',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );

         //Site Preview Choices (Notes List) 6 Control
         $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize,
            'ki_site_preview_choices_6_input',
            array(
        'label'    => __('Site Preview Choices (Notes List) 6', 'kinotiwp'),
        'section'  => 'ki_site_preview_choices',
        'settings' => 'ki_site_preview_choices_6',
        )
        )
        );
    
        //Site Preview Choices (Notes List) 6 Header Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_preview_choices_h_6_input',
            array(
        'label'    => __('Site Preview Choices (Notes List) 6 Heading', 'kinotiwp'),
        'section'  => 'ki_site_preview_choices',
        'settings' => 'ki_site_preview_choices_h_6',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Header Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
        //Site Preview Choices (Notes List) 6 Text Control
        $wp_customize->add_control(
            new WP_Customize_Control(
            $wp_customize,
            'ki_site_preview_choices_t_6_input',
            array(
        'label'    => __('Site Preview Choices (Notes List) 6 Text ', 'kinotiwp'),
        'section'  => 'ki_site_preview_choices',
        'settings' => 'ki_site_preview_choices_t_6',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Text...', 'kinotiwp'),
        )
        
    )
        )
        );
    
    
        //Site Preview Choices (Notes List) 6 URL Control
        $wp_customize->add_control(
            new Wp_Customize_Control(
            $wp_customize,
            'ki_site_preview_choices_l_6_input',
            array(
        'label'    => __('Site Preview Choices (Notes List) 6 URL', 'kinotiwp'),
        'section'  => 'ki_site_preview_choices',
        'settings' => 'ki_site_preview_choices_l_6',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => __('Insert URL...', 'kinotiwp'),
        )
        
        )
        )
        );

}