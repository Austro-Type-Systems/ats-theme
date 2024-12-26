	<?php

function ats_theme_enqueue_styles() {
	// register style file
	wp_register_style(
		'ats_theme-style', // name
		get_template_directory_uri() . '/assets/css/styles.css', // path
		array(), // dependencies
		wp_get_theme()->get('Version'), // version
		'all' // media
	);
	wp_enqueue_style('ats_theme-style');
}

function ats_theme_enqueue_scripts() {
	wp_register_script(
		'ats_theme-main-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(), // dependencies
		wp_get_theme()->get('Version'),
		true
	);
	wp_enqueue_script('ats_theme-main-script');
}

function ats_theme_enqueue_editor_styles() {
	wp_enqueue_style(
		'ats_theme-editor-style', 
		get_template_directory_uri() . '/assets/css/styles.css', 
		array(), 
		wp_get_theme()->get('Version'), 
		'all'
	);
}

function ats_theme_enqueue_google_fonts() {
	wp_enqueue_style(
			'ats_theme-google-fonts',
			'https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100..900;1,100..900&display=swap',
			array(),
		null
	);
}
