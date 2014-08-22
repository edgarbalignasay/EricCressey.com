<?php

function tab_menu_add_res($id,$item, $link)
 {
 	$tmp='<li><a href="' . $link . '"><span>' . strtoupper($item). '</a></li>';
 		
	
	return $tmp;
 }

function active_tab_menu_add_res($id,$item, $link)
 {
 	$tmp='<li><a href="javascript:void(0);"><span class="active-menu">' . strtoupper($item) . '</a></li>';
 		
	
	return $tmp;
 }

function insert_menu_res()
{
	$pages=get_pages(array('sort_column'=>'menu_order','parent'=>0));

	foreach ($pages as $pagg){
		$lnk=get_page_link($pagg->ID);
		if (is_page($pagg->ID))
			echo active_tab_menu_add_res($pagg->ID,$pagg->post_title,$lnk);
		else
			echo tab_menu_add_res($pagg->ID,$pagg->post_title,$lnk);

		
	}
	
	// echo '<a href="http://cresseyperformance.com/" class="tab_menu" target="_blank"><span class="tab_left">&nbsp;</span><span class="tab">Cressey Performance</span><span class="tab_right">&nbsp;</span></a>';
	
	
	
	
}

?>