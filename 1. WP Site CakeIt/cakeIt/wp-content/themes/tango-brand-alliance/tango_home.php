<?php
/**
 * Template Name: Tango Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tango_Brand_Alliance
 */

get_header(); ?>

	<div id="primary" class="content-area" style="background:#fff">
		<main id="main" class="site-main" role="main">
			<div class="container-fluid">
				<div class="row">
						<div class="hero"  style="background-image: url(<?php the_field('hero_image'); ?>)">
							<p><?php the_field('hero_text'); ?></p>
						</div>
				</div>
			</div> <!-- .container-fluid -->

			<div class="container tango-spacing">
				<div class="row tango-puff-container tango-spacing">
					<div class="col-md-4">
						<div class="tango-puff">
							<img src="<?php the_field('cta_1_image'); ?>">
							<a href="<?php the_field('cta_1_link'); ?>">
								<div class="tango-puff-text-container">
									<p class="tango-puff-text"><?php the_field('cta_1_text'); ?></p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="tango-puff">
							<img src="<?php the_field('cta_2_image'); ?>">
							<a href="<?php the_field('cta_2_link'); ?>">
								<div class="tango-puff-text-container">
									<p class="tango-puff-text"><?php the_field('cta_2_text'); ?></p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="tango-puff">
							<img src="<?php the_field('cta_3_image'); ?>">
							<a href="<?php the_field('cta_3_link'); ?>">
								<div class="tango-puff-text-container">
									<p class="tango-puff-text"><?php the_field('cta_3_text'); ?></p>
								</div>
							</a>
						</div>
					</div>
				</div><!-- .tango-puff-container -->	
	
				<hr class="tango-hr">
				
				<div class="row tango-trend-container">
					<div class="col-md-12">
						
						<h1 class="tango-center-text">Latest blog post</h1>
						
						<?php global $post; // required
						$args = array('posts_per_page' => 1);
						$custom_posts = get_posts($args);
						foreach($custom_posts as $post) : setup_postdata($post); ?>
							<h3 class="tango-center-text"><?php the_title(); ?></h3>
							<p class="tango-center-text"><?php echo(get_the_excerpt()); ?></p>
							<a href="<?php the_permalink();?>"><p class="tango-thin-text tango-center-text">Read more</p></a>
						<?php endforeach; ?>
	
					</div>
				</div> <!-- .tango-trend-container -->
			</div><!-- .container -->
			
			<?php while ( have_posts() ) : the_post(); ?>
			
				<div class="tango-grey-bg tango-spacing">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="tango-center-text tango-spacing">
									<img class="tango-citat-tecken" src="/wp-content/themes/tango-brand-alliance/img/tango_citat.svg">
								</div>
								<p class="tango-citat-text tango-center-text"><?php the_field('citat_1_text'); ?></p>
								<p class="tango-thin-text tango-center-text tango-white-text"><?php the_field('citat_1_author'); ?></p>
								<div class="tango-spacing"></div>
							</div>
						</div>
					</div>
				</div><!-- .container-fluid -->

				<div class="container-fluid tango-dark-grey-bg">
					<div class="row">						
						<div class="col-md-6 tango-short-thumb" style="background:url( <? the_post_thumbnail_url(); ?>)"></div>
						<div class="col-md-6 tango-short-text">
							<div class="col-md-12">
								<?php the_content(); ?>
							</div>
						</div>
							
					</div>
				</div>
			
			<?php endwhile; ?>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- For resizing the empty DIV with the background image for Short about Tango -->
<script>
	resizeThumb();

	function resizeThumb(){
   		jQuery(".tango-short-thumb").outerHeight(jQuery(".tango-short-text").outerHeight());
	};

	jQuery( window ).resize(function() {
		resizeThumb();
	});
</script>

<?php
get_footer();