<?php

function mforum_widgets()  {

    register_sidebar([
        'name'          => 'MForum sidebar',
        'id'            => 'mforum_sidebar',
        'description'   => 'MForum main sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'  
    ]);

}