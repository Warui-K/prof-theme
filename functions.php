<?php
//Setup
define('KI_DEV_MODE', true);

//Includes
include(get_theme_file_path( '/inc/enqueue.php' ));


//Hooks
add_action( 'wp_enqueue_scripts', 'ki_enqueue' );