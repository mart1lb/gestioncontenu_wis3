<?php

function lazuli_register_taxonomies()
{

  // $taxonomy = array(
  //     'labels' => array(
  //         'name' => __('Taxonomy Name', 'lazuli'),
  //         'singular_name' => __('Taxonomy Name', 'lazuli'),
  //     ),
  //     'hierarchical' => true,
  //     'show_ui' => true,
  //     'show_in_rest' => true,
  //     'show_admin_column' => true,
  //     'query_var' => true,
  //     'public' => false,
  // );

  // register_taxonomy('lazuli_taxonomy', 'lazuli_cpt', $taxonomy);

}

add_action('init', 'lazuli_register_taxonomies');