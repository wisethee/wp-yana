<?php

// Sets up theme defaults and registers support for various WordPress features.
if ( ! function_exists( 'yana_support' ) ) :
  function yana_support() {
    add_theme_support( 'wp-block-styles' );
    add_editor_style('style.css');

    // Register nav menus.
    register_nav_menus(array('primary' => __('Primary Navigation', '')));
  }
endif;
add_action('after_setup_theme', 'yana_support');


// Add theme stylesheet.
if ( ! function_exists( 'yana_styles' ) ) :
  function yana_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

    wp_register_style(
      'yana_style',
      get_template_directory_uri() . '/style.css',
      array(),
			$version_string);

		wp_enqueue_style( 'yana_style' );
  }
endif;
add_action( 'wp_enqueue_scripts', 'yana_styles' );


// Add theme main stylesheet.
if ( ! function_exists( 'yana_main_styles' ) ) :
  function yana_main_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_style('yana_main_style',
      get_template_directory_uri() . '/assets/css/main.css',
      array(),
			$version_string);
  }
endif;
add_action( 'wp_enqueue_scripts', 'yana_main_styles' );
