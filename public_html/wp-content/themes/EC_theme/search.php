<?php get_header(); ?>

<div class="pag">

	<table class="pg">
	<tr>
	<td class="col-2-left">

 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
  <?php //the_content(__('Read more'));?>	
 <?php endwhile; else: ?>
  <h2>No Results</h2>
  <p>Please feel free try again!<p/>
  <p><?php include (TEMPLATEPATH . '/searchform.php'); ?></p>
 <?php endif; ?>

 <div class="postnavigation">
  <p><?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?></p>
 </div><!-- end .postnavigation -->
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
			if (($category[0]->cat_ID=="632")||(is_page('Baseball Content')))
				include 'baseball_form.php';
			
		?>
		
		<div style="margin-left:5px;">	
		<a href="http://www.on2url.com/app/adtrack.asp?MerchantID=84520&AdID=618732" title="New Balance" target="_blank" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/new-balance-logo.gif" width="225" height="107" alt="New Balance" title="New Balance" style="border:none;"/></a>
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

</div> <!-- end .pag -->

<?php get_footer(); ?>