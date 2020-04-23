<?php  


// Setup


// Includes
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/widgets.php';
   
// Hooks
add_action( 'wp_enqueue_scripts', 'mforum_enqueue' );
add_action( 'after_setup_theme', 'mforum_setup_theme' );
add_action( 'widgets_init', 'mforum_widgets' );
add_action( 'admin_init', 'mforum_redirect_admin' );

//Support
add_post_type_support('forum', array('thumbnail'));

// Hooks BBpress 
add_action( 'bbp_theme_before_topic_title', 'mforum_new_topics' );
add_action('bbp_theme_before_forum_title','mforum_icons');

// Filters 
add_filter( 'wp_nav_menu_items', 'mforum_auth_links', 10 , 2 );





