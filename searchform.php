<form action="/" method="get" class="search-form" role="search">
    <label for="search" class="visually-hidden form-label"><?php _e('Search', 'lazuli'); ?></label>
    <div class="input-group">
        <span class="input-group-text">
            <?php get_template_part('template-parts/svg/search.svg'); ?>
        </span>
        <input type="search"
               role="searchbox"
               name="s"
               class="search-input form-control"
               id="search"
               placeholder="<?php _e('Search', 'lazuli'); ?>"
               value="<?php the_search_query(); ?>"
        />
        <button type="submit" class="search-submit btn btn-primary input-group-text" role="button">
            <span><?php _e('Search', 'lazuli'); ?></span>
        </button>
    </div>
</form>