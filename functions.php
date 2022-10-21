<?php

if ( ! function_exists( 'wp_blocks_support' ) ) :
	// Sets up theme defaults and registers support for various WordPress features.
  function wp_blocks_support() {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );

    // Enqueue editor styles.
    add_editor_style('style.css');
  }
endif;
add_action('after_setup_theme', 'wp_blocks_support');


if ( ! function_exists( 'wp_blocks_styles' ) ) :
  // Enqueue styles.
  function wp_blocks_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

    wp_register_style(
      'wp_blocks_style',
      get_template_directory_uri() . '/style.css',
      array(),
			$version_string);

    // Enqueue theme stylesheet.
		wp_enqueue_style( 'wp_blocks_style' );
  }
endif;
add_action( 'wp_enqueue_scripts', 'wp_blocks_styles' );
