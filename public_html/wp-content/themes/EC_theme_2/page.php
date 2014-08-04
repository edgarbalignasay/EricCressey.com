<?php get_header(); 

?>
<div class="pag">
<?php
		
if (is_page("Home")  )
 	include '3-col-layout.php';
 else
 	include '2-col-layout2.php';
	?>
</div>


<?php get_footer(); ?>