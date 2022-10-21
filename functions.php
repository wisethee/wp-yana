<?php

if ( ! function_exists( 'wp_yana_support' ) ) :
	// Sets up theme defaults and registers support for various WordPress features.
  function wp_yana_support() {
    add_theme_support( 'wp-block-styles' );
    add_editor_style('style.css');
  }
endif;
add_action('after_setup_theme', 'wp_yana_support');


if ( ! function_exists( 'wp_yana_styles' ) ) :
  // Enqueue styles.
  function wp_yana_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

    wp_register_style(
      'wp_yana_style',
      get_template_directory_uri() . '/style.css',
      array(),
			$version_string);

    // Enqueue theme stylesheet.
		wp_enqueue_style( 'wp_yana_style' );
  }
endif;
add_action( 'wp_enqueue_scripts', 'wp_yana_styles' );

class InitYanaBlock {
  function __construct($block_name) {
    $this->block_name = $block_name;
    add_action('init', [$this, 'wp_yana_custom_block_init']);
  }
  function wp_yana_custom_block_init() {
    register_block_type( __DIR__ . "/build/{$this->block_name}" );
  }
}

new InitYanaBlock('custom-block');