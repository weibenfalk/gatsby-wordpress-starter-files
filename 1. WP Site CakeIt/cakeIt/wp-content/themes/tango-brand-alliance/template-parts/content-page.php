<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tango_Brand_Alliance
 */

?>

<article class="container container-page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="row">
				<div class="col-md-9 col-md-offset-3">
					<!-- Initiate the breadcrumb plugin -->	
					<?php wbn_breadcrumb(); ?>
					<?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>
			</div>
					
			<div class="row">
				<?php get_sidebar('page'); ?>
				<div class="col-md-9">	
					<div class="entry-content">	
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<?php the_content(); ?>
					</div><!-- .entry-content -->
				</div> <!-- .col-md-12 -->
			</div> <!-- .row -->
</article><!-- #post-## -->