<?php

function mforum_setup_theme() {

    add_theme_support( 'post-thumbnails' );

    register_nav_menu( 'primary', 'Glavni Meni' );
}