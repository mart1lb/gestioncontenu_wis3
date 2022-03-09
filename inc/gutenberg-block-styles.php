<?php

if (function_exists('register_block_style')) {

    function lazuli_register_block_styles()
    {
        // Button: Primary.
        register_block_style(
            'core/button',
            array(
                'name' => 'primary',
                'label' => __('Primary', 'lazuli'),
            )
        );

        // Button: Primary.
        register_block_style(
            'core/button',
            array(
                'name' => 'outline-primary',
                'label' => __('Outline primary', 'lazuli'),
            )
        );

        // Button: Secondary.
        register_block_style(
            'core/button',
            array(
                'name' => 'secondary',
                'label' => __('Secondary', 'lazuli'),
            )
        );

        // Button: Outline Secondary.
        register_block_style(
            'core/button',
            array(
                'name' => 'outline-secondary',
                'label' => __('Outline secondary', 'lazuli'),
            )
        );

        // Button: White.
        register_block_style(
            'core/button',
            array(
                'name' => 'white',
                'label' => __('White', 'lazuli'),
            )
        );

        // Button: Outline White.
        register_block_style(
            'core/button',
            array(
                'name' => 'outline-white',
                'label' => __('Outline white', 'lazuli'),
            )
        );

    }

    add_action('init', 'lazuli_register_block_styles');
}
