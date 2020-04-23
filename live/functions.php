<?php  


// Setup


// Includes
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/widgets.php';
   
// Hooks
add_action( 'wp_enqueue_scripts', 'mforum_enqueue' );
add_action( 'after_setup_theme', 'mforum_setup_theme' );
add_action( 'widgets_init', 'mforum_widgets' );

// Shortcodes


