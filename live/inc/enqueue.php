<?php 


function mforum_enqueue() {
    
    $uri           = get_template_directory_uri();
    $theme_version = wp_get_theme()->get( 'Version' );

    /**
     * Register and Enqueue Styles.
     */
    wp_register_style( 'mforum_google_fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap' );
    wp_register_style( 'mforum_css', $uri . '/assets/css/theme.min.css', array(), $theme_version );

    wp_enqueue_style( 'mforum_google_fonts' );
    wp_enqueue_style( 'mforum_css' );

    /**
     * Register and Enqueue Scripts.
     */

    wp_enqueue_script( 'jquery' );

    wp_register_script( 'mform_scripts', $uri . '/assets/js/theme.min.js', array(), $theme_version, true );
    wp_enqueue_script( 'mform_scripts' );   
    
}

    

