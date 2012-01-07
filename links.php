<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>
<div class="container">
	<div class="row">
		
		<div class="eightcol">
			<ul>
				<?php wp_list_bookmarks('title_li'); ?>
			</ul>
			
		</div><!-- end eightcol -->
		
		<div class="fourcol last">
		
			<!-- Sidebar stuff here-->
			
		</div><!-- end fourcol -->

	</div><!-- end row-->

</div><!-- end container -->

<?php get_footer(); ?>