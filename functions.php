<?php

// Files

require_once( get_theme_file_path( "/inc/tgm.php" ) );
require_once( get_theme_file_path( "/inc/acf.php" ) );
require_once( get_theme_file_path( "/inc/theme-options.php" ) );

// Theme Support

function primekidz_theme_setup() {
    load_theme_textdomain( "primekidz" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support( "custom-logo" );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support( "custom-background" );
    register_nav_menu( "topmenu", __( "Top Menu", "primekidz" ) );
    register_nav_menu( "footermenu", __( "Footer Menu", "primekidz" ) );
    add_image_size( "primekidz-home-square", 848, 380, true );
}

add_action( "after_setup_theme", "primekidz_theme_setup" );

// Assets Enqueue

function primekidz_assets() {
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.css" ), null, "1.0" );
    wp_enqueue_style( "font-awesome-css", get_theme_file_uri( "/assets/css/font-awesome.css" ), null, "1.0" );
    wp_enqueue_style( "flaticon-css", get_theme_file_uri( "/assets/css/flaticon.css" ), null, "1.0" );
    wp_enqueue_style( "fancybox-css", get_theme_file_uri( "/assets/css/jquery.fancybox.min.css" ), null, "1.0" );
    wp_enqueue_style( "jquery-ui-css", get_theme_file_uri( "/assets/css/jquery-ui.css" ), null, "1.0" );
    wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.css" ), null, "1.0" );
    wp_enqueue_style( "hover-css", get_theme_file_uri( "/assets/css/hover.css" ), null, "1.0" );
    wp_enqueue_style( "style-css", get_theme_file_uri( "/assets/css/style.css" ), null, "1.0" );
    wp_enqueue_style( "responsive-css", get_theme_file_uri( "/assets/css/responsive.css" ), null, "1.0" );
    wp_enqueue_style( "primekidz-css", get_stylesheet_uri(), null, VERSION );

    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "fancybox-js", get_theme_file_uri( "/assets/js/jquery.fancybox.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "map-js", get_theme_file_uri( "/assets/js/map-script.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "appear-js", get_theme_file_uri( "/assets/js/appear.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "mixitup-js", get_theme_file_uri( "/assets/js/mixitup.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "wow-js", get_theme_file_uri( "/assets/js/wow.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "validate-js", get_theme_file_uri( "/assets/js/validate.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "script-js", get_theme_file_uri( "/assets/js/script.js" ), array( "jquery" ), "1.0", true );
    
    wp_enqueue_script( "comment-js", get_theme_file_uri( "/assets/js/comment-reply.min.js" ), array( "jquery" ), "4.7", true );
}

add_action( "wp_enqueue_scripts", "primekidz_assets" );

// Widget

function primekidz_widgets() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar Widget', 'primekidz' ),
        'id'            => 'blog-sidebar',
        'description'   => __( 'Widgets in this area will be shown on blog page.', 'primekidz' ),
        'before_widget' => '<div id="%1$s" class="sidebar-widget search-box categories %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar-title"><h3>',
        'after_title'   => '</h3></div>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Text Widget', 'primekidz' ),
        'id'            => 'footer-text',
        'description'   => __( 'Widgets in this area will be shown on footer.', 'primekidz' ),
        'before_widget' => '<div id="%1$s" class="widget-content %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget One', 'primekidz' ),
        'id'            => 'footer-one',
        'description'   => __( 'Widgets in this area will be shown on footer.', 'primekidz' ),
        'before_widget' => '<div id="%1$s" class="widget-content categories %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget Two', 'primekidz' ),
        'id'            => 'footer-two',
        'description'   => __( 'Widgets in this area will be shown on footer.', 'primekidz' ),
        'before_widget' => '<div id="%1$s" class="widget-content categories %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}

add_action( "widgets_init", "primekidz_widgets" );

// Fallback Menu

function primekidz_fallback_menu(){
    
    echo '<ul class="navigation clearfix">';
    if ('page' !=get_option('show_on_front')) {
        echo '<li><a href="'. site_url() .'/">Home</a></li>';
    }
    wp_list_pages('title_li=');
    echo '</ul>';

}

