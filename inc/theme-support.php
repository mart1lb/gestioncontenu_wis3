<?php

function lazuli_theme_support() {
	// Enable post thumbnail
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// Custom logo.
	$logo_width  = 255;
	$logo_height = 61;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'lazuli', get_template_directory() . '/languages' );

	add_theme_support( 'custom-background', array(
		'default-color' => '#FBFFFE',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}

add_action( 'after_setup_theme', 'lazuli_theme_support' );


/**
 * Add 'no-js' class in body tag
 */
add_filter( 'body_class', 'lazuli_add_js_body_class' );
function lazuli_add_js_body_class( $classes ) {
	$classes[] = 'no-js';

	return $classes;
}

/**
 * Remove 'no-js' class to body tag if javascript is enables
 */
function lazuli_support_js() {
	echo "<script>document.body.classList.remove('no-js');</script>";
}

add_action( 'wp_footer', 'lazuli_support_js', 0 );


/**
 * Limit except length
 *
 * @param $length
 *
 * @return int
 */
function lazuli_custom_excerpt_length( $length ) {
	return 10;
}

//add_filter( 'excerpt_length', 'lazuli_custom_excerpt_length', 999 );