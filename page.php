<?php get_header(); ?>

<div class="container">
	<div class="row">
		
		<div class="eightcol">
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2><?php the_title(); ?></h2>
			
			<?php the_content('<p>Läs resten av denna sidan &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p>Sidor: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
			<?php edit_post_link('Redigera denna sidan.', '<p>', '</p>'); ?>
			
		</article>
		
		<?php endwhile; endif; ?>
		</div><!-- end eightcol -->
	
		<div class="fourcol last">
		
			<?php get_sidebar() ?>
		
		</div><!-- end fourcol-->
	
	</div><!-- end row-->

</div><!-- end container -->

<?php get_footer(); ?>