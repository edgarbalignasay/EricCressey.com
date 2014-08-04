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
	<?php get_sidebar(); ?>
	
	</td>
	</tr>
</table>