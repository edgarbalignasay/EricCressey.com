<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<script src="//cdn.optimizely.com/js/197200755.js"></script>
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <title></title>
 <!-- <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/styles/bootstrap.css" type="text/css" media="screen" /> -->
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/global.css" type="text/css" media="screen" />
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/awesome.css" type="text/css" media="screen" />
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fonts.css" type="text/css" media="screen" />
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/custom.css" type="text/css" media="screen" />
 <link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
 <link href="/apple-touch-icon-144x144.png" sizes="144x144" rel="apple-touch-icon" />
 <link href="/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon" />
 <link href="/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon" />
 <link href="/apple-touch-icon.png" sizes="57x57" rel="apple-touch-icon" />

 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 <link rel="author" href="//plus.google.com/106907211355435072734" />
<?php wp_head(); ?>	
 
<script type="text/javascript" src="/scripts/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/bootstrap.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="/scripts/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="/scripts/fancybox/jquery.fancybox.pack.js"></script>

<script type="text/javascript" src="/scripts/jquery.cookie.js"></script>
 
</head>
<body <?php body_class( $class ); ?> >

<?php if(is_home()) { $post->post_name = 'home';  } ?>
<?php echo '<!--'; echo $post->post_name; echo '-->';?>

<?php 
	$category = get_the_category(); 
	$p=0;
	foreach ($category as $cat){
		if ($cat->cat_name=='Baseball Content'){
			$p=2;
		}
	}


	if (($post->post_name=='baseball-content') || ($p==2)){
		include 'popup2.php';
	}else{
		include 'new_popup.php';
	}
?>

<div class="header">
	<div class="container">
		<table class="nav">
			<tr>
				<td>
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory'); ?>
				/images/new_images/logo.png" title="eric cressey"/></a></h1></td>
   				<?php insert_menu(); ?>
				<td>
					<form class="search-bar" action="http://www.google.com/cse" id="cse-search-box" target="_blank">
						<i class="fa fa-search"></i>
					    <input type="hidden" name="cx" value="partner-pub-4096495994480195:18l0sk7bsm9" />
					    <input type="hidden" name="ie" value="ISO-8859-1" />
					    <input type="text" name="q" size="28" />
					    <input type="submit" name="sa" value="Search" align="right" />
					</form>
				</td>
		</table>
	</div>
</div>
<div class="res-header header">
	<div class="container">
		<h1><img src="<?php bloginfo('stylesheet_directory'); ?>
		/images/new_images/logo.png" title="eric cressey"/></h1>
		<nav>
			<a href="javascript:void(0);"><i class="fa fa-bars"></i><span>Menu</span></a>
			 <ul class="res-menu"><?php insert_menu_res(); ?></ul></nav></div>
</div>
 <?php /*
 
 if (is_page("Home"))
 	include '3-block.php';
 else if (is_page("blog"))
 	include 'blog_featured.php';
 	include 'featured.php';
 	include 'categories.php';
	*/?>
 <?php
 
 if (is_page("Home") || $post->post_name == 'home' || is_home()){
 	include '3-block.php';
 } else if (is_page("blog") || $post->post_name == 'blog') {
  	include 'blog_featured.php';
 	include 'featured.php';
 	insert_categories();
 } else if (is_page("products") || $post->post_name == 'products') {
 	include 'products_featured.php';
 	include 'featured.php';
 	insert_categories();
 } else {
 	include 'featured.php';
 	insert_categories();
 }
?>

<script type="text/javascript">
	jQuery(function($) {
		$('span.active-parent').parent('span').addClass('active-menu');
	});
</script>
	
	