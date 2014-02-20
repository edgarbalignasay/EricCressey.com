<?php get_header(); ?>



<div id="content">



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



<div class="archivearticle">

<div class="title">

<div class="posttitle"><h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div>

</div> <!-- Title div -->

<div class="postcontent">



<p>Posted on <span class="bold"><?php the_time('l, jS F Y'); ?></span> by <span class="bold"><?php the_author(); ?></span></p>



<?php the_content('Read the rest of this entry...'); ?>



<p><?php the_tags('Tags: ', ', ', '<br/>'); ?>Posted in <?php the_category(', '); ?> | <a href="<?php comments_link(); ?>">Comments (<?php comments_number('0','1','%'); ?>)</a><?php edit_post_link('Edit', ' | ', ''); ?></p>



</div> <!-- Post content div -->

</div> <!-- Latest article div -->



<?php endwhile; ?>



<div class="pagination">

			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></div>

			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></div>

</div>



	<?php else : ?>



		<h1>Not Found</h1>

		<p>Sorry, but you are looking for something that isn't here.</p>



	<?php endif; ?>





</div> <!-- Content div -->



<?php get_sidebar(); ?>

<?php get_footer(); ?>