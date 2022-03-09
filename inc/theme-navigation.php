<?php

function lazuli_menus()
{

    $locations = array(
        'primary' => __('Primary menu', 'lazuli'),
        'footer_legal' => __('Footer legal menu', 'lazuli'),
    );

    register_nav_menus($locations);
}

add_action('init', 'lazuli_menus');


/**
 * Register Custom Navigation Walker
 */
function lazuli_register_navwalkers()
{
    require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'lazuli_register_navwalkers');


/**
 * @param $html
 **
 *
 * @return string|string[]
 */
function lazuli_change_logo_class($html)
{

    $html = str_replace('custom-logo-link', 'custom-logo-link navbar-brand', $html);

    return $html;
}

add_filter('get_custom_logo', 'lazuli_change_logo_class');