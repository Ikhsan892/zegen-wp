<?php


if ( !function_exists( 'tiul_setup' ) ) :

    function punte_setup() {

        /**
        * Add support for core custom logo.
        *
        * @link https://codex.wordpress.org/Theme_Logo
        */
        add_theme_support(
            'custom-logo', array(
                'height'      => 1280,
                'width'       => 1920,
                'flex-width'  => false,
                'flex-height' => false,
            )
        );
    }

endif;
add_action( 'after_setup_theme', 'punte_setup' );


function load_tiul_stylesheets(){

//     wp_register_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css', array(), 1, 'all');
//     wp_enqueue_style('bootstrap');

//     wp_register_style('animate', get_template_directory_uri(). '/css/animate.css', array(), 1, 'all');
//     wp_enqueue_style('animate');

//     wp_register_style('font', get_template_directory_uri(). '/css/font-awesome.min.css', array(), 1, 'all');
//     wp_enqueue_style('font');

//     wp_register_style('theme', get_template_directory_uri(). '/css/owl.theme.css', array(), 1, 'all');
//     wp_enqueue_style('theme');

//     wp_register_style('carousel', get_template_directory_uri(). '/css/owl.carousel.css', array(), 1, 'all');
//     wp_enqueue_style('carousel');

    wp_register_style('style', get_template_directory_uri(). '/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts','load_tiul_stylesheets');


function zegen_scripts(){

    wp_register_script('jquery', get_template_directory_uri(). '/js/jquery.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('parallax', get_template_directory_uri(). '/js/jquery.parallax.js', array(), 1, 1, 1);
    wp_enqueue_script('parallax');

    wp_register_script('carousel', get_template_directory_uri(). '/js/owl.carousel.min.js', array(), 1, 1, 1);
    wp_enqueue_script('carousel');

    wp_register_script('smoothscroll', get_template_directory_uri(). '/js/smoothscroll.js', array(), 1, 1, 1);
    wp_enqueue_script('smoothscroll');

    wp_register_script('wow', get_template_directory_uri(). '/js/wow.min.js', array(), 1, 1, 1);
    wp_enqueue_script('wow');

    wp_register_script('custom', get_template_directory_uri(). '/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');

}

add_action('wp_enqueue_scripts','zegen_scripts');


function wpb_custom_new_menu() {
  register_nav_menu('top_navbar',__( 'Top Navbar' ));
}

add_action( 'init', 'wpb_custom_new_menu' );
