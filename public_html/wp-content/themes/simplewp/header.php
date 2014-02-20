<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />



<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<?php wp_head(); ?>
<center>
<a href="http://ericcressey.com">
<img src="http://ericcressey.com/t_header_left.jpg" align="center"></a>
</center>
</head>

<body>

<div id="wrapper">

<div id="top"><div id="date"><?php echo date('l, jS F Y'); ?>.</div><div id="subscribe"><a href="http://feeds.feedburner.com/cresseytrainingsystems">Subscribe</a></div></div>

<div id="header">





<ul class="menu">

<li><a href="<?php bloginfo('url'); ?>">Home</a></li>

<?php wp_list_pages('title_li=&depth=1'); ?>
<li><a href="http://cresseyperformance.com">CP</a></li>

</ul>



<ul class="submenu">
<li><a href="http://ericcressey.com/category/articles">Articles</a></li>


</ul>

<div id="maincontent">