<?php

function lazuli_gutenberg_colors()
{

    // Define custom colors
    add_theme_support('editor-color-palette',
        array(
            array(
                'name' => __('Black', 'lazuli'),
                'slug' => 'black',
                'color' => '#000000'
            ),
            array(
                'name' => __('White', 'lazuli'),
                'slug' => 'white',
                'color' => '#ffffff'
            ),
            array(
                'name' => __('Primary', 'lazuli'),
                'slug' => 'primary',
                'color' => '#DA194E',
            ),
            array(
                'name' => __('Primary dark', 'lazuli'),
                'slug' => 'primary-dark',
                'color' => '#b91542',
            ),
            array(
                'name' => __('Secondary', 'lazuli'),
                'slug' => 'secondary',
                'color' => '#002CC7',
            ),
            array(
                'name' => __('Secondary dark', 'lazuli'),
                'slug' => 'secondary-dark',
                'color' => '#000C78',
            )
        )
    );

    // Disable custom picker
    add_theme_support('disable-custom-colors');
}

add_action('after_setup_theme', 'lazuli_gutenberg_colors');