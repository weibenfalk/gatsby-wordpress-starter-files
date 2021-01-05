<?php
/**
 * The sidebar containing the archive sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tango_Brand_Alliance
 */

// if ( ! is_active_sidebar( 'sidebar-page' ) ) {
//	return;
// }
?>

<div class="col-md-3 tango-post-sidebar">
	<aside id="secondary" class="widget-area" role="complementary">
		<div class="tango-sidebar-published">
			<img src="/wp-content/themes/tango-brand-alliance/img/tango-date-icon.svg">
			<span class="tango-sidebar-published-date"><?php echo the_date(); ?></span>
		</div>

		<div class="tango-sidebar-author">
			<img src="/wp-content/themes/tango-brand-alliance/img/tango-author-icon.svg">

			<?php
			$firstname = get_the_author_firstname() . '&nbsp;';
			$lastname = get_the_author_lastname();
			?>

			<span class="tango-sidebar-author-text"><?php echo $firstname . $lastname?> </span>
		</div>

		<div class="tango-sidebar-category">
			<img src="/wp-content/themes/tango-brand-alliance/img/tango-category-icon.svg">
			<span class="tango-sidebar-category-text">Categories</span>
		</div>

		<div class="tango-sidebar-post-categories">
			<ul class="tango-sidebar-menu tango-sidebar-menu-post-categories clearfix">
				<?php
				// Get the posts assosiated categories and exclude the "Alla Trendspaningar" category
				foreach((get_the_category()) as $cat) {
					if (!($cat->cat_ID=='12')) 
						echo '<li><a href="' . get_category_link($cat->cat_ID) . '">' .  $cat->cat_name . '</a></li>';
				}
				?>
			</ul>
		</div>
	</aside><!-- #secondary -->
</div> <!-- tango-sidebar-sidebar -->