<?php get_header(); ?>

<div class="pag">
<table class="pg">
	<tr>
        <td class="col-2-left">
       		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       			<table class="article">
           			 <tr>
               			<td>
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
            		</tr>
       			</table>
        </td>
        <td>
			<?php get_sidebar(); ?>
		</td>
	</tr>
</table>

</div>

<?php dynamic_sidebar('sidebar-2'); ?>
<?php get_footer(); ?>