<?php
//Setup
define('KI_DEV_MODE', true);

//Includes
include(get_theme_file_path( '/inc/enqueue.php' ));
include(get_theme_file_path( '/inc/setup.php' ));


//Hooks
add_action( 'wp_enqueue_scripts', 'ki_enqueue' );
add_action( 'after_setup_theme', 'ki_setup_theme' );
add_filter( 'excerpt_length', 'ki_set_excerpt_length', 999);