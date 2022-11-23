<?php

add_theme_support( "title-tag" );
add_theme_support( "menus" );
add_theme_support( "widgets" );
add_theme_support( "custom-header" );
add_theme_support( "custom-background" );
add_theme_support( "custom-logo" );
add_theme_support( "post-thumbnails" );



register_nav_menus( array(
 
    'top menu' => 'Top Menu',
    'header menu' => 'Header Menu',
    'sidebar' =>'Sidebar'
  
) 
);

function thelatest(){
    register_sidebar( array(
        
       'name' => 'Right Sidebar',
       'id' => 'rst',
       'description' => 'My right sidebar Widgets',
       'before_widget' => '<ul>',
		'after_widget'  => '</ul>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
    )
);
}

add_action( 'widgets_init', 'thelatest' );


// Customize API

function thelimon($wp_costomize){
   
    $wp_costomize->add_section('footer_sec',array(
        'title' => 'Footer Area',
        'priority' => 30,
    ));
    $wp_costomize->add_setting('copyright_sec',array(
        'default' => 'copyright 2022',
        'transport' => 'refresh'
    ));
    $wp_costomize->add_control('copyright_sec',array(

        'label' => 'Enter your copyright Text',
        'section' => 'footer_sec',
        'type' => 'text'
    ));



}

add_action( 'customize_register', 'thelimon' )

?>