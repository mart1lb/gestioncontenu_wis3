<?php get_template_part( 'template-parts/header/head' ); ?>

<header id="masthead" class="site-header" role="banner">

    <nav class="navbar navbar-expand-lg navbar-light" role="navigation">
        <div class="container">

			<?php get_template_part( 'template-parts/header/custom-logo' ); ?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#primary-menu-navigation"
                    aria-controls="primary-menu-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

			<?php get_template_part( 'template-parts/header/menu' ); ?>

        </div>
    </nav>

</header><!-- #masthead -->
