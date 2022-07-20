<?php
/**
*
* Fifth Avenue functions and definitions
*
*
*
*/

//add dymanic support
function fifthavenue_theme_support(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo', [
            'height' => 250,
            'width' => 450,
            'flex-width' => true,
            'flex-height' => true,
        ]);
}
add_action('after_setup_theme','fifthavenue_theme_support');


//enqueue scripts and styles
function fifthavenue_register_styles() {
  $version = wp_get_theme()->get( 'Version');
  wp_enqueue_style('fifthavenue-style', get_template_directory_uri() . '/style.css', array(), $version , 'all');
  wp_enqueue_style( 'fifthavenue-custom-font-1', get_template_directory_uri() . '/assets/fonts/butler-stencil/butler-stencil.css', false);
  wp_enqueue_style( 'fifthavenue-custom-font-2', get_template_directory_uri() . '/assets/fonts/aktiv-grotesk/aktiv-grotesk.css', false);
  wp_enqueue_script('fifthavenue-fontawesome', 'https://use.fontawesome.com/releases/v6.1.1/js/all.js', array(), '6.1.1', 'all');
}
add_action( 'wp_enqueue_scripts', 'fifthavenue_register_styles');

function fifthavenue_scripts() {
  wp_enqueue_script('fifthavenue-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
  wp_enqueue_script('fifthavenue-lazy', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js', array(), '1.7.9', true);  
  wp_enqueue_script('gsap-main', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), '3.10.4', true);
  wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', array(), '3.10.4', true);
  wp_enqueue_script('fifthavenue-custom', get_template_directory_uri() . '/assets/js/custom.js', array('fifthavenue-jquery', 'gsap-scrolltrigger'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'fifthavenue_scripts');


//register menus
function fifthavenue_menus() {
  $locations = array(
    'primary' => "Main Nav",
    'sticky' => "Sticky Nav"
  );
  register_nav_menus($locations);
}
add_action('init', 'fifthavenue_menus');

add_filter('use_block_editor_for_post', '__return_false');
