<?php

function tab_menu_add($item, $link)
 {
 	$tmp='<a href="' . $link . '" class="tab_menu"><span class="tab_left">&nbsp;</span><span class="tab">' . $item . '</span><span class="tab_right">&nbsp;</span></a>';
	
	return $tmp;
 }

function active_tab_menu_add($item, $link)
 {
 	$tmp='<a href="' . $link . '" class="active_tab_menu"><span class="active_tab_left">&nbsp;</span><span class="active_tab">' . $item . '</span><span class="active_tab_right">&nbsp;</span></a>';
	
	return $tmp;
 }


function insert_menu()
{
	$pages=get_pages('sort_column=menu_order');
	foreach ($pages as $pagg){
		$lnk=get_page_link($pagg->ID);
		if (is_page($pagg->ID))
			echo active_tab_menu_add($pagg->post_title,$lnk);
		else
			echo tab_menu_add($pagg->post_title,$lnk);
		
	}
	
	echo '<a href="http://cresseyperformance.com/" class="tab_menu" target="_blank"><span class="tab_left">&nbsp;</span><span class="tab">Cressey Performance</span><span class="tab_right">&nbsp;</span></a>';
	
	
	
	
}

?>