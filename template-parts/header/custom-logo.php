<?php if ( get_custom_logo() ): ?>
	<?php the_custom_logo(); ?>
<?php else: ?>
    <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
<?php endif; ?>