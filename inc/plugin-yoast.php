<?php

/**
 * Set YoastSEO Metabox down in pages
 *
 * @return string
 */
function lazuli_yoast_to_bottom()
{
    return 'low';
}

add_filter('wpseo_metabox_prio', 'lazuli_yoast_to_bottom');