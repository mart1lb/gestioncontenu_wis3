<?php get_header(); ?>
    <main id="main" class="site-main" role="main">

        <section id="error-content">
            <div class="container">

                <h1 class="h1 error-title text-gradient"><?php _e( 'Error 404', 'lazuli' ); ?></h1>
                <p class="error-message"><?php _e( 'Ooops, Something went wront !', 'lazuli' ); ?></p>
                <a class="btn btn-primary" href="<?php echo home_url(); ?>"><?php _e( 'Back home', 'lazuli' ); ?></a>

            </div>
        </section>

    </main><!-- #main -->
<?php get_footer();