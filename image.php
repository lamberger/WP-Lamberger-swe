<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
			
			<p><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
			<?php if ( !empty($post->post_excerpt) ) the_excerpt(); ?>
			
			<?php the_content('<p>Läs resten av inlägget här &raquo;</p>'); ?>
			
			<?php next_image_link() ?> <?php previous_image_link() ?>

			<footer>
				Detta inlägget är publicerat <time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('l, F jS, Y') ?> kl. <?php the_time() ?></time>
				och är av kategori <?php the_category(', ') ?>.
				<?php the_taxonomies(); ?>
				Du kan följa alla svar på detta inlägg via <?php post_comments_feed_link('RSS 2.0'); ?> feed.

				<?php if ( comments_open() && pings_open() ) {
				// Både Kommentarer and Ping är öppna ?>
				Du kan <a href="#respond">lämna ett svar</a>, eller göra en <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> från din egna sajt.

				<?php } elseif ( !comments_open() && pings_open() ) {
				// Endast Ping är öppen ?>
				Svaren är för närvarande stängd, men du kan göra en <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> från din egna sajt.

				<?php } elseif ( comments_open() && !pings_open() ) {
				// Endast kommentarer är öppna ?>
				Du kan hoppa till slutet och lämna ett svar. Pinga är för närvarande inte tillåtet.

				<?php } elseif ( !comments_open() && !pings_open() ) {
				// Båda är stängda ?>
				Både kommentarer och pingar är för närvarande stängda.

				<?php } edit_post_link('Redigera detta inlägg.'); ?>
			</footer>
			
		</article>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Tyvärr, inga bilagor matchade dina kriterier.</p>

<?php endif; ?>

<?php get_footer(); ?>