<?php

/**
 * Functions and definitions
 * 
 * 
 */

 if (!defined('ABSPATH')) {
	exit;
}

require_once get_template_directory() . '/includes/enqueue.php';
add_action('wp_enqueue_scripts', 'ats_theme_enqueue_styles');
add_action('enqueue_block_editor_assets', 'ats_theme_enqueue_editor_styles');
add_action('wp_enqueue_scripts', 'ats_theme_enqueue_scripts');

add_action( 'wp_enqueue_scripts', 'ats_theme_enqueue_google_fonts' );
add_action( 'enqueue_block_editor_assets', 'ats_theme_enqueue_google_fonts' );

