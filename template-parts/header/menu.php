<?php wp_nav_menu(array(
    'theme_location' => 'primary',
    'depth' => 2,
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id' => 'primary-menu-navigation',
    'menu_class' => 'nav navbar-nav ms-auto',
    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    'walker' => new WP_Bootstrap_Navwalker(),
)); ?>