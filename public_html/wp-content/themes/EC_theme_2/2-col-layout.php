<table class="pg">
	<tr>
	<td class="col-2-left <?php if(is_category()){ echo ' blog'; }?>">

	<?php global $query_string;
		  query_posts("{$query_string}&posts_per_page=3"); if (have_posts()) : while (have_posts()) : the_post(); ?>
	<table class="posts">
		<tr>
			<td><h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2></td>
		</tr>
	 	<tr>
	 		<td><p>Written on <?php the_time('F j, Y'); ?> at <?php the_time() ?>, by <?php the_author() ?></p>
	 			<?php the_content(__('Read more'));?>
		 	</td>
		 </tr>

	 	<tr><td><a class="a-blue" href="<?php the_permalink(); ?>"><i class="fa fa-angle-right"></i>Read more</a></td></tr>
	</table>
	 <?php endwhile; else: ?>
	  <p><strong>There has been a glitch in the Matrix.</strong><br />
	  There is nothing to see here.</p>
	  <p>Please try somewhere else.</p>
	 <?php endif; ?>

	
	
	
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
	
	
	</td>
	</tr>
</table>