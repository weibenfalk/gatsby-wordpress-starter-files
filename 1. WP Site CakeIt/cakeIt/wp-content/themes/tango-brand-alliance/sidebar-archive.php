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

<div class="col-md-3 tango-category-sidebar">
	<aside id="secondary" class="widget-area" role="complementary">
		<ul class="tango-sidebar-menu">
			
			<img style="float:left; padding:0 10px 0 0" src="/wp-content/themes/tango-brand-alliance/img/tango-page-icon.svg">
			<li class="sidebar-menu-header">Categories</li>
			
			<?php
			$args = array(
				'orderby' => 'slug',
				'order' => 'ASC'
			);

			$categories = get_categories($args);

			// Sort the Categories via the field that is set with Advanced Custom Fields plugin on the Category pages
			usort($categories, function($a, $b) {
				return get_field("category_order", "category_".$a->term_id) - get_field("category_order", "category_".$b->term_id);
			});

			foreach($categories as $category) { 

				if($cat != $category->term_id) {
					echo '<li><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a>';
				} else {
					echo '<li><span class="current-cat">'.$category->name.'</span>';
				}

				echo '<span class="tango-post-count"><span class="tango-post-count-text">'. $category->count . '</span></span></li>';  } 
			?>
		</ul>

		<ul style="margin-top:40px" class="tango-sidebar-menu">
			<img style="float:left; padding:0 10px 0 0; width:38px; height:auto" src="/wp-content/themes/tango-brand-alliance/img/tango-mail-icon.svg">
			<li class="sidebar-menu-header">Mailing list</li>
		</ul>
		
		<p style="font-size:16px; line-height:22px">Do you want to get updates and news from Cake it!? Send us your email and name to: <a href="mailto:cakeit@cakeit.fiction">cakeit@cakeit.fiction.</a></p>
		
	</aside><!-- #secondary -->
</div> <!-- tango-sidebar-sidebar -->