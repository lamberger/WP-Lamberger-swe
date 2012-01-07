<?php

// Ta ej bort dessa rader
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Vänligen ladda inte den här sidan direkt. Tack!');

	if ( post_password_required() ) { ?>
		<p class="alert">Detta inlägg är lösenordsskyddat. Ange ett lösenord för att visa kommentarerna.</p>
	<?php
		return;
	}
?>

	<!-- Du kan börja redigera här -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('Inga svar', 'Ett svar', '% svar' );?> på &#8220;<?php the_title(); ?>&#8221;</h3>

	<?php previous_comments_link() ?> <?php next_comments_link() ?>

	<!-- Titta i functions.php för kommentar kod -->
	<?php wp_list_comments('callback=html5_comment&end-callback=close_comment'); ?>

	<?php previous_comments_link() ?> <?php next_comments_link() ?>

<?php else : // Detta visas om det inte finns några kommentarer hittills ?>

	<?php if ( comments_open() ) : ?>
		<!-- Om kommentarer är öppna, men att det inte finns några kommentarer. -->

	 <?php else : // Kommentarer är stängda ?>
		<!-- Om kommentarer är stängda. -->
		<p class="nocomments">Kommentering är stängd.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

	<h3 id="respond"><?php comment_form_title( 'Lämna en kommentar', 'Lämna en kommentar till %s' ); ?></h3>

	<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	<p>Du måste vara <a href="<?php echo wp_login_url( get_permalink() ); ?>">inloggad</a> för att posta en kommentar.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php if ( is_user_logged_in() ) : ?>

		<p>Inloggad som <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Logga ut från detta konto">Logga ut &raquo;</a></p>

		<?php else : ?>

		<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" <?php if ($req) echo "krävs"; ?> />
		<label for="author">Namn <?php if ($req) echo "(krävs)"; ?></label></p>

		<p><input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" <?php if ($req) echo "krävs"; ?> />
		<label for="email">E-post (kommer inte publiceras) <?php if ($req) echo "(krävs)"; ?></label></p>

		<p><input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" />
		<label for="url">Webbplats</label></p>

		<?php endif; ?>

		<!--<p><strong>XHTML:</strong> Tillåten kod: <code><?php echo allowed_tags(); ?></code></p>-->

		<textarea name="comment" id="comment" cols="100%" rows="10" required></textarea>

		<button type="submit" name="submit" id="send">Skicka kommentar</button>
		
		<?php comment_id_fields(); ?>
		
		<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // Om registrering krävs och inte inloggad ?>

<?php endif; // Om du tar bort den här kommer himlen att falla ner på ditt huvud ;-) ?>