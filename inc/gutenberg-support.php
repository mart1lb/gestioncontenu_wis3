<?php

function lazuli_gutenberg_support()
{
    // Add support for custom CSS in editor
    add_theme_support('editor-styles');
    add_editor_style('style-editor.css');
    //add_editor_style('dark-style-editor.css');

    // Enable default blocks style
    add_theme_support('wp-block-styles');

    // Enable responsive for image, iframes and videos
    add_theme_support('responsive-embeds');

    // Enable wide alignment (content out of container)
    add_theme_support('align-wide');

    // Add support for experimental cover block spacing.
    add_theme_support( 'custom-spacing' );
}

add_action('after_setup_theme', 'lazuli_gutenberg_support');