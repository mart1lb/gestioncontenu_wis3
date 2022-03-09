<?php

/**
 * Add Google Map API Key
 */
function lazuli_acf_init() {
	acf_update_setting( 'google_api_key', 'YOUR_API_KEY' );
}

add_action( 'acf/init', 'lazuli_acf_init' );


/**
 * Create options pages
 */

function lazuli_op_init() {
	if ( function_exists( 'acf_add_options_page' ) && function_exists( 'acf_add_options_sub_page' ) ) {
		// Add parent.
		$parent = acf_add_options_page( array(
			'page_title' => __( 'Theme General Settings', 'lazuli' ),
			'menu_title' => __( 'Theme Settings', 'lazuli' ),
			'redirect'   => false,
		) );

		// Add sub page.
		acf_add_options_sub_page( array(
			'page_title'  => __( 'Footer', 'lazuli' ),
			'menu_title'  => __( 'Footer', 'lazuli' ),
			'post_id'     => 'footer',
			'parent_slug' => $parent['menu_slug'],
		) );
	}
}

add_action( 'acf/init', 'lazuli_op_init' );