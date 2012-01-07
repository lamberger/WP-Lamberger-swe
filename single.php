<?php get_header(); ?>

	<div class="container">
	<div class="row">
		
		<div class="eightcol">
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				Inlägget är publicerat <time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('l, F jS, Y') ?> kl. <?php the_time() ?></time>
				och är av kategori <?php the_category(', ') ?>.
			<h2><?php the_title(); ?></h2>
			
			<?php the_content('<p>Läs resten av inlägget &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Sidor:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Etikett: ', ', ', '</p>'); ?>
			
			<footer>	
				
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

				<?php } edit_post_link('Redigera detta inlägg.','','.<br />'); ?>
				<?php previous_post_link('&laquo; %link') ?> <?php next_post_link('%link &raquo;') ?>
			</footer>
			
			<?php comments_template(); ?>
			
		</article>
			
		</div><!-- end eightcol -->
		
		<div class="fourcol last">
		
			<?php get_sidebar() ?>
		
		</div><!-- end fourcol-->

		<?php endwhile; else: ?>

		<p>Tyvärr, inga inlägg matchade dina kriterier.</p>

		<?php endif; ?>
	</div><!-- end row-->

</div><!-- end container -->

<?php get_footer(); ?>