<?php

function lazuli_gutenberg_fonts()
{
    add_theme_support('editor-font-sizes', array(
        array(
            'name' => __('Small', 'lazuli'),
            'size' => 13,
            'slug' => 'small'
        ),
        array(
            'name' => __('Normal', 'lazuli'),
            'size' => 16,
            'slug' => 'normal'
        ),
        array(
            'name' => __('Medium', 'lazuli'),
            'size' => 20,
            'slug' => 'medium'
        ),
        array(
            'name' => __('Large', 'lazuli'),
            'size' => 36,
            'slug' => 'large'
        ),
        array(
            'name' => __('Huge', 'lazuli'),
            'size' => 48,
            'slug' => 'huge'
        )
    ));

    add_theme_support('custom-line-height');

    // add_theme_support('disable-custom-font-sizes');
}

add_action('after_setup_theme', 'lazuli_gutenberg_fonts');