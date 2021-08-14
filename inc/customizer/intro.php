<?php function ki_intro_customize_section($wp_customize)
{
    //setting

    $wp_customize->add_setting(
        'ki_intro_1',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'ki_intro_h_1',
        ['default' => 'Short title, good text']
    );
    $wp_customize->add_setting(
        'ki_intro_t_1',
        ['default' => 'Business Notes']
    );
    $wp_customize->add_setting(
        'ki_intro_l_1',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_intro_2',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'ki_intro_h_2',
        ['default' => 'Short title, good text']
    );
    $wp_customize->add_setting(
        'ki_intro_t_2',
        ['default' => 'Marketing Notes']
    );
    $wp_customize->add_setting(
        'ki_intro_l_2',
        ['default' => '']
    );

    $wp_customize->add_setting(
        'ki_intro_3',
        ['default' => '']
    );
    $wp_customize->add_setting(
        'ki_intro_h_3',
        ['default' => 'Short title, good text']
    );
    $wp_customize->add_setting(
        'ki_intro_t_3',
        ['default' => 'Finance Notes']
    );
    $wp_customize->add_setting(
        'ki_intro_l_3',
        ['default' => '']
    );
    

    //Section
    $wp_customize->add_section(
        'ki_intro',
        [
'title' => __('Homepage Intro Section', 'kinotiwp'),
'priority' => 250,
'panel' => 'kinotiwp'
]
    );

    //Intro 1 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'ki_intro_1_input',
        array(
    'label'    => __('Intro 1', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_1',
    )
    )
    );

    //Intro 1 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_intro_h_1_input',
        array(
    'label'    => __('Intro 1 Heading', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_h_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Intro 1 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_intro_t_1_input',
        array(
    'label'    => __('Intro 1 Text ', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_t_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Intro 1 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_intro_l_1_input',
        array(
    'label'    => __('Intro 1 URL', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_l_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );

    //Intro 2 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'ki_intro_2_input',
        array(
    'label'    => __('Intro 2', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_2',
    )
    )
    );

    //Intro 2 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_intro_h_2_input',
        array(
    'label'    => __('Intro 2 Heading', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_h_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Intro 2 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_intro_t_2_input',
        array(
    'label'    => __('Intro 2 Text ', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_t_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'kinotiwp'),
    )
    
)
    )
    );


    //Intro 2 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_intro_l_2_input',
        array(
    'label'    => __('Intro 2 URL', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_l_2',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );

    //Intro 3 Control
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
        $wp_customize,
        'ki_intro_3_input',
        array(
    'label'    => __('Intro 3', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_3',
    )
    )
    );

    //Intro 3 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_intro_h_3_input',
        array(
    'label'    => __('Intro 3 Heading', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_h_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Intro 3 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_intro_t_3_input',
        array(
    'label'    => __('Intro 3 Text ', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_t_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'kinotiwp'),
    )
    
)
    )
    );


    //Intro 3 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_intro_l_3_input',
        array(
    'label'    => __('Intro 3 URL', 'kinotiwp'),
    'section'  => 'ki_intro',
    'settings' => 'ki_intro_l_3',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );


}