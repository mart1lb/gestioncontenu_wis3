<?php get_header(); ?>
    <main id="main" class="site-main" role="main">

        <section id="search-content">
            <div class="container">

                <div class="search-form-wrapper">
                    <?php get_search_form(); ?>
                </div>

                <?php if (have_posts()): ?>
                    <div class="videos-wrapper">

                        <span class="total-results"><?php echo $wp_query->post_count . ' ' . __('results', 'lazuli'); ?></span>

                        <div class="row g-4">
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="col-md-6 col-lg-4">
                                    <?php get_template_part('template-parts/post'); ?>
                                </div>
                            <?php endwhile; ?>
                        </div>

                        <?php get_template_part('template-parts/pagination'); ?>
                    </div>
                <?php else: ?>

                    <div class="empty">
                        <div class="empty-text"><?Php _e("There's no videos to display", 'lazuli'); ?></div>
                    </div>

                <?php endif; ?>
            </div>
        </section>

    </main><!-- #main -->
<?php get_footer('large');
