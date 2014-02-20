<?php

if ( function_exists('register_sidebar') )

    register_sidebar(array(

        'before_widget' => '<div class="sidebar-item">',

        'after_widget' => '</div>',

        'before_title' => '<div class="title">',

        'after_title' => '</div>',

    ));

?>