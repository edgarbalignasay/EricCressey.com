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
function include_meta_widgets() { require_once(CHILD_DIR . '/widgets_meta.php'); }

add_action('wp_footer', 'include_after_widgets');
function include_after_widgets() { require_once(CHILD_DIR . '/widgets_after.php'); }

// MixPanel Tracking Codes
require_once(get_stylesheet_directory() . '/mixpanel_tracking.php');
?>