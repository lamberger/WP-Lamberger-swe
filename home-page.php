<?php
/*
Template Name: Home-start
*/
?>

<?php get_header(); ?>

<!-- ImgSlider section -->
	<div class="container">
	<div class="row">
		
		<div class="sevencol">
			<section>
				<h2>En Img Slider här</h2>
				<p>och kanske lite text...</p>
			</section>
		</div><!-- end sevencol -->  
		
		<div class="fivecol last">
			<article>
			<?php
				// hämta ett inlägg med ett ID 1
				query_posts( 'p=60' );
				// the Loop
				while (have_posts()) : the_post();
				?> <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<?php
				the_excerpt();
				endwhile;
			?>
			</article>
		</div><!-- end fivecol -->

	</div><!-- end row-->
</div><!-- end container -->
<!-- end ImgSlider section -->

<!-- Four colums section -->
<div class="container">
	<div class="row">

		<div class="threecol">
			<section>
				<h3>H3 Titel</h3>
			</section>
		</div><!-- end threecol -->

		<div class="threecol">
			<section>
				<h3>H3 Titel</h3>
			</section>
		</div><!-- end threecol -->

		<div class="threecol">
			<section>
				<h3>H3 Titel</h3>
			</section>
		</div><!-- end threecol -->

		<div class="threecol last">
			<section>
				<h3>H3 Titel</h3>
			</section>
		</div><!-- end threecol -->

	</div><!-- end row -->
</div><!-- end container -->
<!-- end four columns section -->

<!-- Latest post section 8 & 4 -->
<div class="container">
	<div class="row">
		
		<div class="sevencol">
			<article>
				<?php //Ta fram det senaste inlägget och visar ett utdrag 
					$args = array( 'numberposts' => 1 );
					$latest_posts = get_posts( $args );
					foreach($latest_posts as $post) : setup_postdata($post); ?>

						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>

				<?php endforeach; ?>
			</article>
		</div><!-- end sevencol -->  
		
		<div class="fivecol last">
			<h4>H4 Titel</h4>
		</div><!-- end fivecol -->

	</div><!-- end row-->
</div><!-- end container -->
<!-- end Latest post section 8 & 4 -->
<?php get_footer(); ?>