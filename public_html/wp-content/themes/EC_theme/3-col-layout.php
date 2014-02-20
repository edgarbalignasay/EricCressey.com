<table class="pg">
	<tr>
	<td class="col-3-left"><a href="/blog" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/recent_post_title.png" width="150" height="21" alt="Recent Posts" /></a><br/>
	<a class="a-blue" style="margin-top:6px;" href="/feed">Subscribe to this Feed<img style="margin-left:10px; border:none;" src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" width="16" height="16" alt="RSS Feed"/></a><br/>
	<?php
 global $post;
 $myposts = get_posts('numberposts=4');
 foreach($myposts as $post) :
   setup_postdata($post);
 ?>
 
	
	<hr style="color:#888888;" />
	
	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
	
	<p><?php echo substr(strip_tags($post->post_content), 0, 250);?></p>
	
    <a class="a-blue" href="<?php the_permalink(); ?>">Read More...</a><br/>
 <?php endforeach; ?>
	
	</td>
	<td class="col-3-center"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/erics_featured_products_title.png" />
	
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <?php the_content(__('Read more'));?>	
 <?php endwhile; else: ?>
	
	<?php endif; ?>
	
	</td>
	<td class="col-3-right">
	<?php include 'form.php'; ?>
	
	<?php include 'follow-me.php'; ?>
	<div style="margin-left:5px;">
	<a href="http://www.on2url.com/app/adtrack.asp?MerchantID=84520&AdID=618732" title="New Balance" target="_blank" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/new-balance-logo.gif" width="225" height="107" alt="New Balance" title="New Balance" style="border:none;"/></a>
	</div>
	
	
	
	
	<div class="right-blog">
	<div style="width:100%; text-align:center; margin-top:15px;">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/baseball_article_title.png" width="201" height="23" alt="Baseball Articles"/>
	</div>
	<?php
 $myposts = get_posts('numberposts=5&category=632');
 foreach($myposts as $post) :
   setup_postdata($post);
 ?>
 
	
	<hr style="color:#888888;" />
	
	<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
	
    <a class="a-blue" href="<?php the_permalink(); ?>">Read More...</a><br/>
 <?php endforeach; ?>
	
	</div>
	
	
	
	</td>
	</tr>
</table>