<aside>
	<?php 	/* Widget sidofält*/
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			
			<?php get_search_form(); ?>
			
		<?php endif; ?>
</aside>