<?php

/**
 * Register and Enqueue Styles and Scripts.
 */
function lazuli_enqueues() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'lazuli-app', get_template_directory_uri() . '/assets/css/app.css', array(), $theme_version );
	wp_enqueue_script( 'lazuli-app', get_template_directory_uri() . '/assets/js/app.js', array(), $theme_version, true );
}

add_action( 'wp_enqueue_scripts', 'lazuli_enqueues' );