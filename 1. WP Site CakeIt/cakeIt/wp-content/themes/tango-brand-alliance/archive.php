<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tango_Brand_Alliance
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php if ( have_posts() ) : ?>
				<article class="container container-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="row">
						<div class="col-md-9 col-md-offset-3">
							<!-- Initiate the breadcrumb plugin -->	
							<?php wbn_breadcrumb(); ?>
						</div>
					</div>
					
					<div class="row">
						
						<?php get_sidebar('archive'); ?>
						
						<div class="col-md-9 tango-post-content">
							
							<h1 class="entry-title"><?php single_cat_title(); ?></h1>
							
							<?php 

							/* Start the Loop */
							while ( have_posts() ) : the_post();

							/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/

							get_template_part( 'template-parts/content', 'archive' );

							endwhile;

							// the_posts_navigation();
							
							
							// Pagination 
	
							?>
							<h2>Navigation</h2>
							
							<div class="tango-pagination" style="margin:0 0 30px 0">
								
								<?php

								global $wp_query;

								$big = 999999999; // need an unlikely integer

								echo paginate_links( array(
									'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
									'format' => '?paged=%#%',
									'current' => max( 1, get_query_var('paged') ),
									'total' => $wp_query->max_num_pages
								) );
								?>
							</div>
							
							<?php

							else :

							get_template_part( 'template-parts/content', 'none' );

							endif; ?>

						</div> <!-- tango-post-content -->
					</div> <!-- row -->
			</article> <!-- container -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>