<?php
/**
 * Plugin Name: Tango Breadcrumb
 * Plugin URI: http://weibenfalk.com
 * Description: Creates a breadcrumb trail for the Tango Brand Alliance website
 * Version: 1.0
 * Author: Thomas Weibenfalk
 * Author URI: http://weibenfalk.com
 */

function wbn_brdcrmb_register_stylesheet(){
	wp_register_style( 'wbn_brdcrmb_stylesheet', plugins_url( '/styles/style.css', __FILE__ ) );
	wp_enqueue_style( 'wbn_brdcrmb_stylesheet' );
}

// Load the styles
add_action( 'wp_enqueue_scripts', 'wbn_brdcrmb_register_stylesheet' );

function wbn_breadcrumb(){ 
	
				global $post;
	
				$divider = "/";
				
				$blogurl = get_bloginfo('url');
				$blogname = get_bloginfo('name');				
				$output = '<span class="tango-brdcrmb-blogname"><a href="' . $blogurl . '">' . $blogname . '</a></span><span class="tango-brdcrmb-divider">' . $divider . '</span>'; ?>
				
				<div class="tango-brdcrmb">
				
				<?php
						
						if (is_page()):
						
						// Check if the page has any parent page and add that to the breadcrumb trail
						if ($post->post_parent):
							$parent_title = get_the_title( $post->post_parent );
							$parent_url = get_permalink( $post->post_parent);
						
							$output .= '<span class="tango-brdcrmb-parent"><a href="' . $parent_url . '">' . $parent_title . '</a></span><span class="tango-brdcrmb-divider">' . $divider .'</span>'; 
						endif;
						
						$pagename = get_the_title();
						// $output .= '<span class="tango-brdcrmb-currentpage">' . $pagename . '</span>';		
						echo $output;
				
					
					  elseif (is_category()): 
						
						// Get the category Base for building the Category Archive Link
						  
						$category_base = ucfirst(get_option( 'category_base' )); // ucfirst make the first letter Capital
						$category_title = single_cat_title( '', false );
					
						$output .= '<span class="tango-brdcrmb-catbase"><a href="' . $blogurl . '/blog/all-posts/">' . $category_base . '</a></span><span class="tango-brdcrmb-divider">' . $divider . '</span>';
					
						echo $output;
					
					  elseif (is_single()):
	
						// Get the category Base for building the Category Archive Link
						  
						$category_base = ucfirst(get_option( 'category_base' )); // ucfirst make the first letter Capital
						$category_post_title = get_the_title();
					
						$output .= '<span class="tango-brdcrmb-catbase"><a href="' . $blogurl . '/blog/all-posts/">' . $category_base . '</a></span><span class="tango-brdcrmb-divider">' . $divider . '</span>';
					
						echo $output;
	
					  endif;
				?> 
					
				</div>

<?php } ?>