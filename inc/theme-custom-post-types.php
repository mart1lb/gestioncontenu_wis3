<?php


function lazuli_custom_post_types() {
	$cpt1 = array(
		'labels'              => array(
			'name'          => __( 'Etablissement', 'lazuli' ),
			'singular_name' => __( 'Etablissements', 'lazuli' ),
		),
		'show_ui'             => true,
		'show_admin_column'   => true,
		'show_in_rest'        => true,
		'hierarchical'        => true,
		'public'              => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'rewrite'             => array( 'slug' => 'etablissements' ),
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
		'menu_icon'           => 'dashicons-welcome-learn-more',
	);

    $cpt2 = array(
        'labels'              => array(
            'name'          => __( 'recrutement', 'lazuli' ),
            'singular_name' => __( 'recrutement', 'lazuli' ),
        ),
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_rest'        => true,
        'hierarchical'        => true,
        'public'              => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'rewrite'             => array( 'slug' => 'recruit' ),
        'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
        'menu_icon'           => 'dashicons-welcome-learn-more',
    );

	register_post_type( 'etablissement', $cpt1 );

    register_post_type( 'recrutement', $cpt2 );
}

add_action( 'init', 'lazuli_custom_post_types' );