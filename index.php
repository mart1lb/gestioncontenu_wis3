<?php get_header(); ?>
    <main id="main" class="site-main" role="main">

        <section id="blog-posts-grid">
            <div class="container">

				<?php if ( have_posts() ): ?>
                    <div class="row g-4">
						<?php while ( have_posts() ) : the_post(); ?>
                            <div class="col-md-6 col-xl-4">
								<?php get_template_part( 'template-parts/post' ); ?>
                            </div>
						<?php endwhile; ?>
                    </div>

					<?php get_template_part( 'template-parts/pagination' ); ?>

				<?php endif; ?>
            </div>
        </section>

    </main><!-- #main -->
<?php get_footer();
