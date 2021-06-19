<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tango_Brand_Alliance
 */

?>

		<div class="entry-content">
			<a href="<?php the_permalink(); ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
		
			<?php if ( 'post' === get_post_type() ) : ?>
			<div class="post-date">
				<?php the_time('j M Y'); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>

			<p><?php echo get_the_excerpt(); ?></p>
	
			<a class="read-more-link" href="<?php echo get_permalink(); ?>">Läs mer</a>
			<div class="dot_divider"><hr></div>
		</div><!-- .entry-content -->