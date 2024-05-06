<?php

add_action( 'wp_enqueue_scripts', 'koukaki_enqueue_scripts' );

function koukaki_enqueue_scripts() {

    // Enqueue parent theme stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue child theme stylesheet
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ),
        wp_get_theme()->get('Version')
    );

    // Enqueue Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        get_stylesheet_directory_uri() . '/assets/css/swiper-bundle.min.css',
        array(),
        '11.0.0'
    );

    // Enqueue custom CSS
    wp_enqueue_style(
        'custom-css',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array( 'child-style' ),
        '1.0.0'
    );

    // Enqueue jQuery library
    wp_enqueue_script('jquery');

    // Enqueue custom JavaScript file
    wp_enqueue_script('koukaki-script', get_stylesheet_directory_uri()  . '/assets/js/koukaki.js', array('jquery'), '1.0', true);

    // Enqueue Swiper JS
    wp_enqueue_script(
        'swiper-js',
        get_stylesheet_directory_uri() . '/assets/js/swiper-bundle.min.js',
        array('jquery'), // Make sure jQuery is loaded before Swiper
        '11.0.0',
        true // Load the script in the footer
    );

}

// Get customizer options from parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}
