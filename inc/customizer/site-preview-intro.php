<?php function ki_site_preview_intro_customize_section($wp_customize)
{
    //setting


    $wp_customize->add_setting(
        'ki_site_preview_intro_h_1',
        ['default' => 'Expertly crafted notes, designed for the modern students and entrepreneur.']
    );
    $wp_customize->add_setting(
        'ki_site_preview_intro_t_1',
        ['default' => 'We curate academic notes of value']
    );
    $wp_customize->add_setting(
        'ki_site_preview_intro_l_1',
        ['default' => '']
    );


    

    //Section
    $wp_customize->add_section(
        'ki_site_preview_intro',
        [
        'title' => __('Site Preview Intro Section', 'kinotiwp'),
        'priority' => 250,
        'panel' => 'kinotiwp'
        ]
    );



    //Site Preview Intro 1 Header Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_preview_intro_h_1_input',
        array(
    'label'    => __('Site Preview Intro 1 Heading', 'kinotiwp'),
    'section'  => 'ki_site_preview_intro',
    'settings' => 'ki_site_preview_intro_h_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Header Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Site Preview Intro 1 Text Control
    $wp_customize->add_control(
        new WP_Customize_Control(
        $wp_customize,
        'ki_site_preview_intro_t_1_input',
        array(
    'label'    => __('Site Preview Intro 1 Text ', 'kinotiwp'),
    'section'  => 'ki_site_preview_intro',
    'settings' => 'ki_site_preview_intro_t_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Text...', 'kinotiwp'),
    )
    
)
    )
    );

    //Site Preview Intro 1 URL Control
    $wp_customize->add_control(
        new Wp_Customize_Control(
        $wp_customize,
        'ki_site_preview_intro_l_1_input',
        array(
    'label'    => __('Site Preview Intro 1 URL', 'kinotiwp'),
    'section'  => 'ki_site_preview_intro',
    'settings' => 'ki_site_preview_intro_l_1',
    'type' => 'text',
    'input_attrs' => array(
        'placeholder' => __('Insert URL...', 'kinotiwp'),
    )
    
    )
    )
    );

}