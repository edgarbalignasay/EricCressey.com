<table class="pg">
	<tr>
		<td>
			<h2>LATES ARTICLES & BLOG POSTS</h2>
			<table>
				<?php
				 global $post;
				 $myposts = get_posts('numberposts=3');
				 foreach($myposts as $post) :
				   setup_postdata($post);
				 ?>
				 
					<td>
						<div class="post-holder">
							<a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
							<h3>
							<?php if (strlen(the_title()) > 20) { ?>...<?php } ?></h3></a>
							<p class="content"><?php echo substr(strip_tags($post->post_content), 0, 350);?>
							<?php if (strlen($post->post_content) > 350) { ?>...<?php } ?></p>
							
						    <a class="a-blue" href="<?php the_permalink(); ?>">READ MORE</a><br/>
						</div>
					 <?php endforeach; ?>
					</td>
			</table>
			<a href="" class="see-more"><i class="fa fa-angle-right"></i><span>See more articles</span></a>	
		</td>
	</tr>
	<tr>
		<td class="">	
			<h2>MY NEWEST PRODUCT RELEASES</h2>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(__('Read more'));?>	
			<?php endwhile; else: ?>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td>
			<h2>MY BASEBALL ARTICLES & BLOG</h2>
			<table>
				<?php /* 
				<?php
				 $myposts = get_posts('numberposts=5&category=632');
				 foreach($myposts as $post) :
				   setup_postdata($post);
				 ?>
				<td>
					<div class="post-holder">
						<a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
						<h3>
						<?php if (strlen(the_title()) > 20) { ?>...<?php } ?></h3></a>
						<p class="content"><?php echo substr(strip_tags($post->post_content), 0, 350);?>
						<?php if (strlen($post->post_content) > 350) { ?>...<?php } ?></p>
						
					    <a class="a-blue" href="<?php the_permalink(); ?>">READ MORE</a><br/>
					</div>
					 <?php endforeach; ?>
				</td>
				*/?>
				<tbody><tr><td>
						<div class="post-holder">
							<a href="http://ec.dev/?p=1" title="Hello world!">
							<h3>Lorem ipsum dolor sit amet</h3></a>
							<p class="content">Welcome to WordPress. This is your first post. Edit or delete it, then start blogging!							</p>
							
						    <a class="a-blue" href="http://ec.dev/?p=1">READ MORE</a><br>
						</div>
					 				 
					</td><td>
						<div class="post-holder">
							<a href="http://ec.dev/?p=18299" title="Cressey Sports Performance Just Turned 7!">
							<h3>Mauris gravida condimentum dolor, eget dictum risus molestie nec</h3></a>
							<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet vulputate tortor, vel sollicitudin ligula. 
								Fusce posuere nisl sit amet aliquet cursus. Nunc et diam nisi. Sed ut aliquam urna.</p>
							
						    <a class="a-blue" href="http://ec.dev/?p=18299">READ MORE</a><br>
						</div>
					 				 
					</td><td>
						<div class="post-holder">
							<a href="http://ec.dev/?p=18259" title="Cressey Sports Performance is Coming to Florida!">
							<h3>Aenean vitae fermentum massa</h3></a>
							<p class="content">It’s with great excitement that today, I can announce that we’ll be opening a second Cressey Sports Performance location – this one in Jupiter, Florida&nbsp;– this September!

We’ve carefully contemplated this decision for years, turning down many other opportunities for expansion until we felt the time, location, and situation was right.							...</p>
							
						    <a class="a-blue" href="http://ec.dev/?p=18259">READ MORE</a><br>
						</div>
					 					</td>
			</tr></tbody>
			</table>
			<a href="" class="see-more"><i class="fa fa-angle-right"></i><span>See more articles</span></a>	
		</td>
	</tr>
</table>