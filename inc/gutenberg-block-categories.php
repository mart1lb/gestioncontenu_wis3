<?php

function lazuli_block_categories($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'section',
                'title' => __('Sections', 'lazuli'),
            ),
        )
    );
}

add_filter('block_categories', 'lazuli_block_categories', 10, 2);