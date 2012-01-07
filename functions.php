<?php

// Rensa upp i <head>
function removeHeadLinks() {
   remove_action('wp_head', 'rsd_link');
   remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h1 class="widgettitle">',
		'after_title' => '</h1>',
	));
}

/**
 * Villkorlig sida / inlägg navigeringslänkar
 * http://www.ericmmartin.com/conditional-pagepost-navigation-links-in-wordpress-redux/
 * Om fler än en sida existerar, returnera sant.
 */
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

// Detta är en nya kommentar kodning - redigera som du finner nödvändigt
function html5_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <article <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
      
      <header class="comment-author vcard">
         <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>

         <?php printf(__('<cite class="fn">%s</cite> <span class="says">säger:</span>'), get_comment_author_link()) ?>
      
      </header>
      
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Din kommentar väntar på moderering.') ?></em>
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><time datetime="<?php the_time('Y-m-d') ?>" pubdate><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time><?php edit_comment_link(__('(Redigera)'),'  ','') ?></div>

      <?php comment_text() ?>

      <div class="reply"> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?> </div>
<?php
        }

// Ändrar avslutande </ li> in i en avslutande </ artikeln>
function close_comment() {?>
	</article>
<?php
}
	
?>