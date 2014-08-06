<?php

function cat_add($id,$name)
 {
 	$tmp='<li><a href="' . get_category_link($id) . '">' . strtoupper($name);

 	$sub_cats = get_categories(array('orderby'=>'id','parent'=>$id));
 		if($sub_cats) {
 			$tmp.= '<i class="fa fa-caret-down"></i></a>';
 			$tmp.= '<ul class="sub-cat">';
		 	foreach ($sub_cats as $sub_cat){
		 		$tmp.='<li><a href="'.  get_category_link($sub_cat->term_id) .'">' . strtoupper($sub_cat->name) . '<i class="fa fa-caret-down"></i></a></li>';
		 	}
		 	$tmp.= '</ul>';
 		} else {
 			$tmp.= '</a>';
 		}
 	$tmp.='</li>';
 		
	
	return $tmp;
 }

function insert_categories()
{
	$categories = get_categories(array('orderby'=>'id','parent'=>0));
	echo '<div class="categories"><div class="container"><ul>';
	foreach ($categories as $category){
		echo cat_add($category->term_id,$category->name);
	}
	echo '</ul></div></div>';
} 

?>
