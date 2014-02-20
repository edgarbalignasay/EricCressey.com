<?php get_header(); 

?>
<div class="pag">
<table class="pg">
	<tr>
	<td class="col-2-left">
	
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 <p>Written on <?php the_time('F j, Y'); ?> at <?php the_time() ?>, by <?php the_author() ?></p>

 <?php the_content(__('Read more'));?>

 <div class="postmeta">
  <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
  <p>Category <?php the_category(', ') ?> | Tags: <?php the_tags(' ', ',', ' '); ?></p>
  
 </div><!-- end .postmeta -->
 <?php comments_template(); ?>
<hr style="color:#888888; margin-top:10px; margin-bottom:10px;"/>
 <?php endwhile; else: ?>
  <p><strong>There has been a glitch in the Matrix.</strong><br />
  There is nothing to see here.</p>
  <p>Please try somewhere else.</p>
 <?php endif; ?>

 <div class="postnavigation">
  <p><?php next_posts_link('&laquo; Older Entries') ?><?php previous_posts_link(' | Newer Entries &raquo;') ?></p>
 </div>
	
	
	
	</td>
	
	
	
	
	
	
	
	<td class="col-2-right">
	
		<!--<?php
			$cat=get_the_category();
			echo $cat[0]->cat_ID;
			?>
		 -->
	
		<?php
			$category = get_the_category(); 
			echo '<!--'.$category->cat_ID.'-->';
			if ($category[0]->cat_ID=="632")
				include 'baseball_form.php';
			
		?>
		
		<div style="margin-left:5px;">
	<a href="http://www.newbalance.com" title="New Balance" target="_blank" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/new-balance-logo.gif" width="225" height="107" alt="New Balance" title="New Balance" style="border:none;"/></a>
	</div>
	
	<hr style="color:#888888; margin-left:5px; margin-right:5px; margin-top:15px; margin-bottom:15px;">
	
	<div style="width:100%; text-align:center; margin-top:15px;">
	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/featured_product_title.png" width="201" height="23" alt="Featured Product"/>
	</div>
		
		<div style="width:100%; text-align:center; margin-top:15px;">
	<img src="/wp-content/uploads/2009/10/assess-correct-dvd-cover1-211x300.jpg" width="211" height="300" alt="Assess and Correct"/>
	</div>
		<div style="width:100%; text-align:center; margin-top:15px;">
	<span><a href="https://robertson.infusionsoft.com/cart/?product_id=3" target="_blank" class="fake-button" >Buy Now!</a></span>
	</div>
	
	<hr style="color:#888888; margin-left:5px; margin-right:5px; margin-top:15px; margin-bottom:15px;">
	<?php get_sidebar(); ?>
	
	</td>
	</tr>
</table>

</div>


<?php get_footer(); ?>