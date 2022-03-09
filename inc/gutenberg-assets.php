<?php

/**
 * Register and Enqueue Scripts for Gutenberg editor.
 */
function lazuli_gutenberg_enqueue() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'gutenberg-app', get_template_directory_uri() . '/assets/css/style-editor.css', array(), $theme_version );
	wp_enqueue_script( 'gutenberg-app', get_template_directory_uri() . '/assets/js/script-editor.js', array(), $theme_version, false );
}

add_action( 'enqueue_block_editor_assets', 'lazuli_gutenberg_enqueue' );