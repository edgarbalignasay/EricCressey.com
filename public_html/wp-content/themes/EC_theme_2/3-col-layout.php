<table class="pg home">
	<tr>
		<td>
			<h2>LATEST ARTICLES & BLOG POSTS</h2>
			<table>
				<?php
				 global $post;
				 $myposts = query_posts( array( 'category__and' => array(2,4), 'posts_per_page' => 3 ) );
				 foreach($myposts as $post) :
				   setup_postdata($post);
				 ?>
				 
					<td>
                    <div class="image-wrapp">
					<?php
						if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							}
							else {
								echo '<img class="default-image" src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/placeholder.jpg" />';
							} 
					?>
                    </div>
						<div class="post-holder">
                        	
							<a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                                <h3>
                                    <?php if (strlen(the_title()) > 20) { ?>...<?php } ?>
                                </h3>
                           	</a>
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
		<td class="product-releases">	
			<h2>MY NEWEST PRODUCT RELEASES</h2>
            <table>
				<?php
				 global $post;
				 $myposts = query_posts( array( 'category_name' => 'products', 'posts_per_page' => 3 ) );
				 foreach($myposts as $post) :
				   setup_postdata($post);
				 ?>
                 
                <td>
                <div class="image-wrapp">
                <?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
					else {
						echo '<img width="auto" class="default-image" src="' .catch_that_image() .' "  />';
					}
				?>
                </div>
                    <div class="post-holder">
                       <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                            <h3>
                                <?php if (strlen(the_title()) > 20) { ?>...<?php } ?>
                            </h3>
                        </a>
                        <p class="content"><?php echo substr(strip_tags($post->post_content), 0, 350);?>
                        <?php if (strlen($post->post_content) > 350) { ?>...<?php } ?></p>
                        <a class="a-blue" href="<?php the_permalink(); ?>">LEARN MORE</a><br/>
                        <a class="block" href="<?php echo get_post_meta( get_the_ID(),'ecpt_addtocartlink', true ); ?>">ADD TO CART</a>
                    <?php //$page = get_page_by_title( 'Home' ); ?>
                    <?php //$content = apply_filters('the_content', $page->post_content);  ?>
                    <?php //the_content();//echo $content; ?>
        
                    </div>
                 <?php endforeach; ?>
                </td>
			</table>
			<a href="" class="see-more"><i class="fa fa-angle-right"></i><span>Checkout the Products I have Realeased over the years</span></a>	
		</td>
	<tr>
		<td>
			<h2>MY BASEBALL ARTICLES & BLOG</h2>
			<table>
				
				<table>
				<?php
				 global $post;
				 $myposts = query_posts( array( 'category__and' => array(3,4), 'posts_per_page' => 3 ) );
				 foreach($myposts as $post) :
				   setup_postdata($post);
				 ?>
				<td>
                <div class="image-wrapp">
                <?php
				
					if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						}
						else {
							echo '<img class="default-image" src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/placeholder.jpg" />';
						} 
				?>
                </div>
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