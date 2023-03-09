<?php
add_action( 'wp_enqueue_scripts', 'default_child_styles' );

function default_child_styles(){
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/stye.css');
    wp_enqueue_style( 'child-style', get_template_directory_uri() . '/style.css', array('parent-style'));
}

