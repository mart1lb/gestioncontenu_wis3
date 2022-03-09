<?php

function lazuli_sidebar_registration()
{
    // Arguments used in all register_sidebar() calls.
    $shared_args = array(

    );

    // Footer #1.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name' => __('Footer #1', 'lazuli'),
                'id' => 'sidebar-footer-1',
                'description' => __('Widgets in this area will be displayed in the first column in the footer.',
                    'lazuli'),
            )
        )
    );

    // Footer #2.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name' => __('Footer #2', 'lazuli'),
                'id' => 'sidebar-footer-2',
                'description' => __('Widgets in this area will be displayed in the second column in the footer.',
                    'lazuli'),
            )
        )
    );

    // Footer #3.
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name' => __('Footer #3', 'lazuli'),
                'id' => 'sidebar-footer-3',
                'description' => __('Widgets in this area will be displayed in the third column in the footer.',
                    'lazuli'),
            )
        )
    );

	// Footer #4.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name' => __('Footer #4', 'lazuli'),
				'id' => 'sidebar-footer-4',
				'description' => __('Widgets in this area will be displayed in the fourth column in the footer.',
					'lazuli'),
			)
		)
	);

}

add_action('widgets_init', 'lazuli_sidebar_registration');