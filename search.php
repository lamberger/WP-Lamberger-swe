<?php get_header(); ?>
<div class="container">
	<div class="row">
		
		<div class="eightcol">
			
			<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php if (show_posts_nav()) : ?>
		<nav>
			<ul>
				<li><?php next_posts_link('&laquo; Äldre inlägg') ?></li>
				<li><?php previous_posts_link('Nyare inlägg &raquo;') ?></li>
			</ul>
		</nav>
		<?php endif; ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?>>
				
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Länk till <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				
				<time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('l, F jS, Y') ?></time>
				
				<footer><?php the_tags('Etikett: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Redigera', '', ' | '); ?>  <?php comments_popup_link('Ingen kommentar &#187;', '1 Kommentar &#187;', '% Kommentarer &#187;'); ?></footer>
			
			</article>

		<?php endwhile; ?>

		<?php if (show_posts_nav()) : ?>
		<nav>
			<ul>
				<li><?php next_posts_link('&laquo; Äldre inlägg') ?></li>
				<li><?php previous_posts_link('Nyare inlägg &raquo;') ?></li>
			</ul>
		</nav>
		<?php endif; ?>

	<?php else : ?>

		<h2>Inga inlägg hittades. Försök med en annan sökning?</h2>
		
	<?php endif; ?>
			
			
		</div><!-- end eightcol -->
		
		<div class="fourcol last">
		
			<?php get_sidebar(); ?>
		
		</div><!-- end fourcol-->

	</div><!-- end row-->

</div><!-- end container -->

<?php get_footer(); ?>