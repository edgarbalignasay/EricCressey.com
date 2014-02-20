<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
 <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 <title></title>
 
 <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
 <link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
 <link href="/apple-touch-icon-144x144.png" sizes="144x144" rel="apple-touch-icon" />
 <link href="/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon" />
 <link href="/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon" />
 <link href="/apple-touch-icon.png" sizes="57x57" rel="apple-touch-icon" />

 <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 <link rel="author" href="https://plus.google.com/106907211355435072734" />
<?php wp_head(); ?>	
 
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript" src="/scripts/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="/scripts/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="/scripts/jquery.cookie.js"></script>

<link rel="stylesheet" href="/scripts/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
 
</head>
<body>

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
		include 'popup.php';
	}
?>

<div id="container">
 	<div id="as_featured">
		<table>
		<tr>
		<td>
		<span>As Featured In: </span>
		</td>
		<td>
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/as_featured/mens_health_logo.png" height="25" width="111" alt="Men's Health" /><img src="<?php bloginfo('stylesheet_directory'); ?>/images/as_featured/mens_fitness_logo.png" height="25" width"117" alt="Men's Fitness" /><img src="<?php bloginfo('stylesheet_directory'); ?>/images/as_featured/espn_logo.png" height="25" width="97" alt="ESPN" /><img src="<?php bloginfo('stylesheet_directory'); ?>/images/as_featured/baseball_america_logo.png" height="25" width="192" alt="Baseball America" /><img src="<?php bloginfo('stylesheet_directory'); ?>/images/as_featured/yahoo-sports-logo.png" height="25" width="177" alt="Boston Globe" /></td>
		</tr>
		</table>
	</div>
	<hr class="hr_red_2" />
	<div id="header">
	<table>
		<tr>
			<td style="vertical-align:bottom; width:124px;"><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ec_logo.png" alt="ericcressey.com Logo" width="124" height="110" /></a></td>
			<td style="vertical-align:middle; width:598px; text-align:center;"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/performance_and_health.png" alt="Performance and Health" width="509" height="37" /><br/><img src="<?php bloginfo('stylesheet_directory'); ?>/images/on_a_whole_new_level.png" style="margin-top:10px;" alt="On a Whole New Level" width="296" height="23" /></td>
			<td id="header_pic">&nbsp;</td>
		</tr>
	</table>
  		
  
  <div id="topNav">
  
  

  
   <?php insert_menu(); ?>
  </div><!-- end #topNav -->
 </div><!-- end #header -->
 
 <?php 
 
 if (is_page("Home"))
 	include '3-block.php';
 else
 	include '3-box.php';
	?>
	
	
	
	