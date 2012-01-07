<?php get_header(); ?>
<div class="container">
	<div class="row">
		
		<div class="eightcol">
			
		<?php if (have_posts()) : ?>

		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* Om detta är ett kategoriarkiv */ if (is_category()) { ?>
		<h2>Arkiv för &#8216;<?php single_cat_title(); ?>&#8217; Kategori</h2>
		<?php /* Om detta är ett etikettarkiv */ } elseif( is_tag() ) { ?>
		<h2>Inlägg med etikett &#8216;<?php single_tag_title(); ?>&#8217;</h2>
		<?php /* Om detta är ett dagligtarkiv */ } elseif (is_day()) { ?>
		<h2>Arkiv för <?php the_time('F jS, Y'); ?></h2>
		<?php /* Om detta är ett månadsarkiv */ } elseif (is_month()) { ?>
		<h2>Arkiv för <?php the_time('F, Y'); ?></h2>
		<?php /* Om detta är ett årsarkiv */ } elseif (is_year()) { ?>
		<h2>Arkiv för <?php the_time('Y'); ?></h2>
		<?php /* Om detta är en författararkiv */ } elseif (is_author()) { ?>
		<h2>Författare arkiv</h2>
		<?php /* Om detta är en sidarkiv */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2>Blog Arkiv</h2>
		<?php } ?>

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
			
			<?php the_content() ?>
			
			<footer><?php the_tags('Etikett: ', ', ', '<br />'); ?> Kategori <?php the_category(', ') ?> | <?php edit_post_link('Redigera', '', ' | '); ?>  <?php comments_popup_link('Ingen kommentar &#187;', '1 Kommentar &#187;', '% Kommentarer &#187;'); ?></footer>
		
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

		<?php else :

		if ( is_category() ) { // Om detta är ett kategoriarkiv
			printf("<h2>Tyvärr, men det finns inga inlägg i %s kategorin ännu.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // Om detta är ett datumarkiv
			echo("<h2>Tyvärr, men det finns inte några inlägg med detta datum.</h2>");
		} else if ( is_author() ) { // Om detta är ett författarearkiv
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2>Tyvärr, men det finns inte några inlägg av %s än.</h2>", $userdata->display_name);
		} else {
			echo("<h2>Inga inlägg kunde hittas.</h2>");
		}
		get_search_form();

		endif;
		?>
		
		</div><!-- end eightcol -->
		
		<div class="fourcol last">
		
			<?php get_sidebar(); ?>

		
		</div><!-- end fourcol-->

	</div><!-- end row-->

</div><!-- end container -->

<?php get_footer(); ?>