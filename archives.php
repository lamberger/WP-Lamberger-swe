<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<div class="container">
	<div class="row">
		
		<div class="twelvecol">
			
			<?php get_search_form(); ?>

				<h2>Archives by Month:</h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>

				<h2>Arkiv av ämnet:</h2>
					<ul>
	 					<?php wp_list_categories(); ?>
					</ul>
					
		</div><!-- end twelvecol -->

	</div><!-- end row-->

</div><!-- end container -->

<?php get_footer(); ?>