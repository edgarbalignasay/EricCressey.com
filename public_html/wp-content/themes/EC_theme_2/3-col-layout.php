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
			<?php /* if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(__('Read more'));?>	
			<?php endwhile; else: ?>
			<?php endif;  */?>
			<?php $page = get_page_by_title( 'Home' ); ?>
			<?php $content = apply_filters('the_content', $page->post_content);  ?>
			<?php echo $content; ?>
		</td>
	</tr>
	<tr>
		<td>
			<h2>MY BASEBALL ARTICLES & BLOG</h2>
			<table>
				
				<?php
				 $myposts = get_posts('posts_per_page=3&category=6');
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
</table>