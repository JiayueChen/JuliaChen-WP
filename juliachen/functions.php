<?php
//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}
//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );

// enable a "widgetized sidebar".
if ( function_exists('register_sidebar') ) register_sidebar();

// enable featured images in pages and posts.
add_theme_support('post-thumbnails');


//Code for custom background support
add_custom_background();


//enable styles in wordpress
function themebs_enqueue_styles() {
    
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css');
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('lightbox', get_stylesheet_uri('/css/lightbox.css'), NULL, microtime());
    
    wp_enqueue_style('google_font','https://fonts.googleapis.com/css?family=Charmonman|Dosis|Fredericka+the+Great&display=swap');
    wp_enqueue_style('fontawesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-12/css/all.min.css');
    wp_enqueue_style('animate','https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css');
    
    wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css', NULL, microtime());
    
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');

// enable javascript in wordpress
function themebs_enqueue_scripts() {
//    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', true);
    
    wp_enqueue_script('lightbox', get_theme_file_uri('./js/lightbox.js'), array('jquery'), microtime(), true);
    
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', true);
    
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', true);
    
    wp_enqueue_script('animejs', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', true);
    
      wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery', 'bootstrap', 'lightbox' ) );
    
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');
