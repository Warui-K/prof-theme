<?php
function ki_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = KI_DEV_MODE ? time() : false;


    //Register the stylesheet
    wp_register_style('ki_style_header', $uri . '/style.css', [], $ver);
    wp_register_style('ki_fontawesome', $uri . '/assets/vendor/fontawesome-free-5.15.4-web/css/all.css', [], $ver);

    wp_register_style('ki_custom_css', $uri . '/assets/css/app.css', [], $ver);

    
  
    //Enqueue the stylesheer
    wp_enqueue_style('ki_style_header');
    wp_enqueue_style('ki_fontawesome');

    wp_enqueue_style('ki_custom_css');
  

    //Register the script files

    wp_register_script('ki_main_js', $uri . '/assets/js/app.js', [], $ver, true);
    
    //Enqueue the script files

    wp_enqueue_script('ki_main_js');
  
}