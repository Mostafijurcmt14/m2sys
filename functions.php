<?php

/*
* After setup m2sys theme supports
*/

function m2sys_theme_setup(){
    load_theme_textdomain( 'm2sys' );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support( "post-formats",array("image","gallery","quote","audio","video","link") );
    add_editor_style( "assets/css/style.css" );   

    register_nav_menu( "mainmenu",__("M2sys Main Menu","m2sys") );
}
add_action("after_setup_theme","m2sys_theme_setup");



/*
* m2sys theme all enqueue script
*/

function m2sys_assets(){
    wp_enqueue_style( "m2sys-slick-css", get_theme_file_uri( "/assets/css/slick.css" ), null,);
    wp_enqueue_style( "m2sys-slick-theme-css", get_theme_file_uri( "/assets/css/slick-theme.min.css" ), null, );
    wp_enqueue_style( "m2sys-fontawesome-css", get_theme_file_uri( "/assets/css/fontawesome.min.css" ), null, );
    wp_enqueue_style( "m2sys-fontawesome-min-css", get_theme_file_uri( "/assets/css/all.min.css" ), null, );
    wp_enqueue_style( "m2sys-bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null, );
    wp_enqueue_style( "m2sys-style-css", get_theme_file_uri( "/assets/css/style.css" ), null, );
    wp_enqueue_style( "m2sys-css", get_stylesheet_uri() );


    wp_enqueue_script( "jquery-min-js", get_theme_file_uri( "/assets/js/jquery-1.12.4.min.js" ), null, "1.0", true );
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/js/bootstrap.bundle.min.js" ), array("jquery"), "1.0", true );
    wp_enqueue_script( "slick-js", get_theme_file_uri( "/assets/js/slick.min.js" ), array("jquery"), "1.0", true );
    wp_enqueue_script( "custom-js", get_theme_file_uri( "/assets/js/custom.js" ), array("jquery"), "1.0", true );
}
add_action( "wp_enqueue_scripts","m2sys_assets" );


/*
* m2sys theme tgm plugin activator 
*/
require_once(get_template_directory().'/inc/activation-tgm.php');


/*
* m2sys theme kirki plugin
*/
if(in_array('kirki/kirki.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
   require_once(get_template_directory().'/inc/kirki.php');  
}


  
