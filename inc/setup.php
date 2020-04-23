<?php

function mforum_setup_theme() {

    add_theme_support( 'post-thumbnails' );

    register_nav_menu( 'primary', 'Glavni Meni' );

    //Hides admin toolbar for non admins and moderators
    if( ! current_user_can('edit_posts') )
        add_filter('show_admin_bar', '__return_false');
    

}


/**
 * Redirect back to homepage and not allow access to
 * WP backend for Subscribers.
 */
function mforum_redirect_admin(){
    if ( ! current_user_can( 'edit_posts' ) ){
        wp_redirect( site_url() );
        exit;
    }
}


/**
 * Adds login/logout functionality to menu
 */
function mforum_auth_links( $items, $args ) {
 if ( is_user_logged_in() ) {
 $items .= '<li><a class="nav-link logout-link" href="'. wp_logout_url( site_url('/forums/') ) .'"><span class="dashicons dashicons-undo"></span>Log Out</a></li>';
 }
 elseif ( !is_user_logged_in() && $args->theme_location == 'primary' ) {
    $items .= '<li><a class="nav-link register-link" href="'. site_url('/registracija/') .'"><span class="dashicons dashicons-edit"></span>Registracija</a></li>'; 
    $items .= '<li><a class="nav-link login-link" href="'. site_url('/login/') .'"><span class="dashicons dashicons-admin-users"></span>Log In</a></li>';
 
//  $items .= '<li><a class="nav-link" href="'. site_url('/resetuj-password/') .'">Resetuj password</a></li>';
 }
    return $items;
}

/**
 * Marks NEW topic for 1 hour after creation
 */
function mforum_new_topics() {
    $offset = 60*60*1; 
      
    if ( get_post_time() > date('U') - $offset ) {
        echo '<span class="new">[Novo]</span>';

    }    
}


/**
 * Adds icon support for Forum title
 */
function mforum_icons() {
	if ( 'forum' == get_post_type() ) {
		global $post;
	    if ( has_post_thumbnail($post->ID) )
	    	echo get_the_post_thumbnail($post->ID,'thumbnail',array('class' => 'forum-icon'));
	 }
}
    
