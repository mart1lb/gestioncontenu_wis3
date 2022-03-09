<?php get_header(); ?>
    <main id="main" class="site-main" role="main">

        <div class="entry-content">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>
        </div>

    </main><!-- #main -->
<?php get_footer();
