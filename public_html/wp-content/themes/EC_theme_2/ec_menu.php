<?php

function tab_menu_add($id,$item, $link)
 {
 	$tmp='<td><a href="' . $link . '"><span>' . strtoupper($item);

 	$children = get_pages(array('sort_column'=>'menu_order','parent'=>$id));
 		if($children) {
 			$tmp.= '<i class="fa fa-caret-down"></i></span></a>';
 			$tmp.= '<ul class="sub-menu">';
		 	foreach ($children as $child){
		 		$lnk=get_page_link($child->ID);
		 		$tmp.='<li><a href="'. $lnk .'"><span>' . strtoupper($child->post_title) . '</span></a></li>';
		 	}
		 	$tmp.= '</ul>';
 		} else {
 			$tmp.= '<span></a>';
 		}
 	$tmp.='</td>';
 		
	
	return $tmp;
 }

function active_tab_menu_add($id,$item, $link)
 {
 	$tmp='<td><a href="javascript:void(0);"><span class="active-menu">' . strtoupper($item);

 	$children = get_pages(array('sort_column'=>'menu_order','parent'=>$id));
 		if($children) {
 			$tmp.= '<i class="fa fa-caret-down"></i></span></a>';
 			$tmp.= '<ul class="sub-menu">';
		 	foreach ($children as $child){
		 		$lnk=get_page_link($child->ID);
		 		$tmp.='<li><a href="javascript:void(0);"><span class="active-parent">' . strtoupper($child->post_title) . '</span></a></li>';

		 	}
		 	$tmp.= '</ul>';
 		} else {
 			$tmp.= '<span></a>';
 		}
 	$tmp.='</td>';
 		
	
	return $tmp;
 }

function insert_menu()
{
	$pages=get_pages(array('sort_column'=>'menu_order','parent'=>0));

	foreach ($pages as $pagg){
		$children = get_pages(array('sort_column'=>'menu_order','parent'=>$pagg->ID));
		$lnk=get_page_link($pagg->ID);
		if (is_page($pagg->ID))
			echo active_tab_menu_add($pagg->ID,$pagg->post_title,$lnk);
		else
			echo tab_menu_add($pagg->ID,$pagg->post_title,$lnk);

		
	}
	
	// echo '<a href="http://cresseyperformance.com/" class="tab_menu" target="_blank"><span class="tab_left">&nbsp;</span><span class="tab">Cressey Performance</span><span class="tab_right">&nbsp;</span></a>';
	
	
	
	
}

?>