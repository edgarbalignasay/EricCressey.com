<table class="pg">
	<tr>
	<td class="col-2-left
	<?php echo $post->post_name;?><?php if($post->post_name=='baseball-content'){ echo ' blog'; }?>">
	<?php if($post->post_name == 'products' ) {?>
		<div class="hph-featured">
			<div>
				<h3>High Performance handbook</h3>
				<p>It's time for the latest installment of Quick and Easy Ways to Feel
				and Move Better. Here are five tips for you to put into action right away:</p>
				<ol>
					<li>Try homemade arm sleeves for cranky elbows. I actually have a
					subluxating ulnar nerve, which basically lorem ipmsum.</li>
					<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet vulputate tortor, vel sollicitudin
					ligula. Fusce posuere nisl sit amet aliquet cursus. Nunc et diam nisi. Sed ut aliquam urna.</li>
				</ol>
				<div class="hph-price">
					<span>&#36;999.00</span>
					<a class="a-blue" href="http://ec.dev/?page_id=5439"><i class="fa fa-angle-right"></i>Read more</a>
				</div>
			</div>
		</div>

		<?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			query_posts(array(
				'post_type'      => 'post', // You can add a custom post type if you like
				'paged'          => $paged,
				'posts_per_page' => 10
			)); ?>
			<div class="posts-holder">
			<?php query_posts('category_name='.$post->post_name); if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $search = array('<p style="text-align: left;">','</p>')?>
				<div class="posts">
					<div class="content"><img src="<?php echo catch_that_image();?>"></div>
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
					<a class="a-blue learn-more" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right"></i>Learn more</a>
				</div>
		<?php endwhile;?>
		</div>

		<?php else : ?>
		  <p><strong>There has been a glitch in the Matrix.</strong><br />
		  There is nothing to see here.</p>
		  <p>Please try somewhere else.</p>
		<?php endif; wp_reset_query(); ?>

	<?php } else {;?>
	<?php 
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	query_posts(array(
		'post_type'      => 'post', // You can add a custom post type if you like
		'paged'          => $paged,
		'posts_per_page' => 10
	)); ?>

	<?php query_posts('category_name='.$post->post_name.'&showposts=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $search = array('<p style="text-align: left;">','</p>')?>
	<table class="posts">
		<tr>
			<td><h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2></td>
		</tr>
		<tr><td class="content"><?php echo get_the_content();?></td></tr>
		<tr><td><a class="a-blue" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right"></i>Read more</a></td></tr>
	</table>

 
<?php endwhile;?>
	<span class="pagination">Page <?php my_pagination(); ?></span>

<?php else : ?>
  <p><strong>There has been a glitch in the Matrix.</strong><br />
  There is nothing to see here.</p>
  <p>Please try somewhere else.</p>
<?php endif; wp_reset_query(); }?>

 	
	
	</td>
	
	<td class="col-2-right">
	
	<table class="ec-section">
		<tr>
			<td><img src="<?php bloginfo('stylesheet_directory'); ?>
			/images/new_images/ec_image.jpg"/></td>
			<td>
				<h3>About Eric</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing
				elit. Integer aliquam.</p>
				<a href="" class="read-full"><i class="fa fa-angle-right"></i>Read Full Bio</a>
			</td>
		</tr>
		<tr>
			<td>
				<span>Follow me around the web</span>
				<div class="social-button side-social">
					<a><i class="fa fa-facebook"></i><span>30,000 likes</span></a>
					<a><i class="fa fa-twitter"></i><span>3,000 followers</span></a>
					<a><i class="fa fa-play"></i><span>300 subscribers</span></a>
					<a><i class="fa fa-instagram"></i><span>300 followers</span></a>
				</div>
			</td>
		</tr>
	</table>
	<!-- Email -->
	<div class="features side-features clearfix">
		<div class="">
			<div class="learn">
				<span>LEARN</span>
				<span>HOW TO</span>
				<span>DEADLIFT</span>
			</div>
			<div class="guide">
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetur</li>
					<li>Mauris vitae pulvinar justo</li>
					<li>Nunc ac orci suscipit nulla congue eleifend vel nec nunc</li>
				</ul>
			</div>
			<div class="email side-email">
				<form method="" action="">
					<input type="text" value="" placeholder="Enter your email" />
					<button type="submit"><p><i class="fa fa-angle-right"></i>
					<span>Subscribe</span></p></button>
					<span>*I hate spam too, only the best for my subscribers</span>
				</form>
			</div>
		</div>
	</div>
	<div class="side-featured">
		<div class="new-balance">
		<a href="http://www.newbalance.com" title="New Balance" target="_blank" >
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/new_images/new_balance_logo.png" alt="New Balance" title="New Balance" style="border:none;"/></a>
		</div>
		<h4>Featured products</h4>
		<div class="clearfix" style="width:100%; text-align:center; margin-top:15px;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/new_images/high_performance.png" alt="High Preformance Handbook" title="High Preformance Handbook"/>
		<div class="read-more"><a class="a-blue" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right"></i>Read more</a></div>
		</div>
		<div style="width:100%; text-align:center; margin-top:30px;">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/new_images/high_performance.png" alt="High Preformance Handbook" title="High Preformance Handbook"/>
		<ul>
			<li>Lorem ipsum dolor sit amet, consectetur adipiscing.</li>
			<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
			<li>Lorem ipsum dolor sit amet, consectetur.</li>
		</ul>
		<div class="read-more"><a class="a-blue" href="http://highperformancehandbook.com/"><i class="fa fa-angle-right"></i>Read more</a></div>
		</div>
		
		<!-- <?php get_sidebar(); ?> -->
	</div>
	<!-- <?php get_sidebar(); ?> -->
	
	</td>
	</tr>
</table>


