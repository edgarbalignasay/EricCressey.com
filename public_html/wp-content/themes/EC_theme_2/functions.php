<?php
 if ( function_exists('register_sidebar') ){
 register_sidebar();
}

add_theme_support( 'post-thumbnails' );
 
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');


$parsedUrl = parse_url('http://www.ericcressey.com'.$_SERVER['REQUEST_URI']);
$emailVerifyUrl = 'http://www.ericcressey.com' . $parsedUrl['path'];
parse_str($parsedUrl['query'], $queryStringArr);
$queryStringArr['verify_email'] = 1;
if (!empty($queryStringArr)) {
	$emailVerifyUrl .= '?' . http_build_query($queryStringArr);
}

include("ec_menu.php");

// Tracking Scripts
add_action('wp_head', 'include_meta_widgets');
function include_meta_widgets() { require_once(get_stylesheet_directory() . '/widgets_meta.php'); }

add_action('wp_footer', 'include_after_widgets');
function include_after_widgets() { require_once(get_stylesheet_directory() . '/widgets_after.php'); }

// MixPanel Tracking Codes
require_once(get_stylesheet_directory() . '/mixpanel_tracking.php');

if ( ! function_exists( 'my_pagination' ) ) :
	function my_pagination() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	}
endif;

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}
?>