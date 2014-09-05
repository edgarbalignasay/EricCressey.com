<table class="pg">
	<tr>
		<td class="col-2-left <?php if(is_category()){ echo ' blog'; }?>">
			<?php 
				global $query_string;
		  		query_posts("{$query_string}&posts_per_page=3"); if (have_posts()) : while (have_posts()) : the_post(); 
			?>
			<table class="posts">
				<tr>
					<td><h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2></td>
				</tr>
	 			<tr>
	 				<td>
                    	<p>Written on <?php the_time('F j, Y'); ?> at <?php the_time() ?>, by <?php the_author() ?></p>
		 				<?php the_content(__('Read more'));?>
		 			</td>
		 		</tr>
			 	<tr>
        			<td>
                    	<a class="a-blue" href="<?php the_permalink(); ?>">
                        	<i class="fa fa-angle-right"></i>Read more
                        </a>
                    </td>
                </tr>
			</table>
	
     		<?php endwhile; else: ?>
	  			<p><strong>There has been a glitch in the Matrix.</strong><br />
	  			There is nothing to see here.</p>
	 			 <p>Please try somewhere else.</p>
			 <?php endif; ?>
		</td>
		<td class="col-2-right">
			<table class="ec-section">
            <?php get_sidebar(); ?>
            </table>
        </td>
	</tr>
</table>