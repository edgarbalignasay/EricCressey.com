<?php get_header(); 

?>
<div class="pag">
<?php
		
if (is_front_page() )
 	include '3-col-layout.php';
 else
 	include '2-col-layout.php';
	?>
</div>


<?php get_footer(); ?>