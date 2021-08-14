<?php

function ki_customize_register($wp_customize)
{
    //Add a panel on Customizer

    $wp_customize->add_panel(
        'kinotiwp',
        [
        'title' => __('Prof Theme customizer settings', 'kinotiwp'),
        'description' => '<p>Prof Theme Customizer Settings</p>',
        'priority' => 160
    ]
    );
    ki_intro_customize_section($wp_customize);
    ki_site_preview_intro_customize_section($wp_customize);
    ki_site_preview_choices_customize_section($wp_customize);
    ki_site_resources($wp_customize);
    ki_site_blog_gallery_customize_section($wp_customize);

    
    
}