<?php
 //if ( function_exists('register_sidebar') ){
 //register_sidebar();
//}

add_theme_support( 'post-thumbnails' );
 
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_generator');


$parsedUrl = parse_url('http://www.ericcressey.com'.$_SERVER['REQUEST_URI']);
$emailVerifyUrl = 'http://www.ericcressey.com' . $parsedUrl['path'];
parse_str($parsedUrl['query'], $queryStringArr);
$queryStringArr['verify_email'] = 1;
if (!empty($queryStringArr)) {
	$emailVerifyUrl .= '?' . http_build_query($queryStringArr);
}

include("ec_menu.php");
include("ec_menu_res.php");

// Tracking Scripts
add_action('wp_head', 'include_meta_widgets');
function include_meta_widgets() { require_once(get_stylesheet_directory() . '/widgets_meta.php'); }

add_action('wp_footer', 'include_after_widgets');
function include_after_widgets() { require_once(get_stylesheet_directory() . '/widgets_after.php'); }

// MixPanel Tracking Codes
require_once(get_stylesheet_directory() . '/mixpanel_tracking.php');

if ( ! function_exists( 'my_pagination' ) ) :
	function my_pagination() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	}
endif;

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "http://ec.dev/wp-content/uploads/2014/09/placeholder.jpg";
  }
  return $first_img;
}

include('categories.php');

add_filter('pre_get_posts', 'limit_category_posts');
function limit_category_posts($query){
    if ($query->is_category) {
        $query->set('posts_per_page', 3);
    }
    return $query;
}
/*----------------------------------------------------------*/

/* REGISTER MENU */
register_nav_menus( array(

		'primary' => __( 'Primary Menu', 'ec_theme_2' ),
		'secondary' => __( 'Secodary', 'ec_theme_2' ),
		'footer' => __( 'Footer Menu', 'ec_theme_2' ),
	) );

/*----------------------------------------------------------*/
	
/* SIDEBAR and WIDGER REGISTER */
function ec_theme_2_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ec_theme_2' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Test', 'ec_theme_2' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}

add_action( 'widgets_init', 'ec_theme_2_widgets_init' );

// Register Custom Post Type
// registration code for product post type
	function register_product_posttype() {
		$labels = array(
			'name' 				=> _x( 'Products', 'post type general name' ),
			'singular_name'		=> _x( 'Product', 'post type singular name' ),
			'add_new' 			=> __( 'Add New' ),
			'add_new_item' 		=> __( 'Product' ),
			'edit_item' 		=> __( 'Product' ),
			'new_item' 			=> __( 'Product' ),
			'view_item' 		=> __( 'Product' ),
			'search_items' 		=> __( 'Product' ),
			'not_found' 		=> __( 'Product' ),
			'not_found_in_trash'=> __( 'Product' ),
			'parent_item_colon' => __( 'Product' ),
			'menu_name'			=> __( 'Products' )
		);
		
		$taxonomies = array('post_tag', 'category');

		$supports = array('title','editor','author','thumbnail','excerpt','custom-fields','comments','revisions');
		
		$post_type_args = array(
			'labels' 			=> $labels,
			'singular_label' 	=> __('Product'),
			'public' 			=> true,
			'show_ui' 			=> true,
			'publicly_queryable'=> true,
			'query_var'			=> true,
			'exclude_from_search'=> false,
			'show_in_nav_menus'	=> true,
			'capability_type' 	=> 'post',
			'has_archive' 		=> true,
			'hierarchical' 		=> false,
			'rewrite' 			=> array('slug' => 'product', 'with_front' => false ),
			'supports' 			=> $supports,
			'menu_position' 	=> 5,
			'menu_icon' 		=> 'http://ec.dev/wp-content/plugins/easy-content-types//includes/images/icon.png',
			'taxonomies'		=> $taxonomies
		 );
		 register_post_type('product',$post_type_args);
	}
	add_action('init', 'register_product_posttype');
	
/* META BOX ------------------------------------------------------------------------*/
$productdetails_1_metabox = array(
	'id' => 'productdetails',
	'title' => 'Product Details',
	'page' => array('product'),
	'context' => 'normal',
	'priority' => 'default',
	'fields' => array(


				array(
					'name' 			=> 'Add to Cart Link',
					'desc' 			=> '',
					'id' 				=> 'ecpt_addtocartlink',
					'class' 			=> 'ecpt_addtocartlink',
					'type' 			=> 'text',
					'rich_editor' 	=> 0,
					'max' 			=> 0				),
			
				array(
					'name' 			=> 'Read More Link',
					'desc' 			=> '',
					'id' 				=> 'ecpt_readmorelink',
					'class' 			=> 'ecpt_readmorelink',
					'type' 			=> 'text',
					'rich_editor' 	=> 0,
					'max' 			=> 0				),
				)
);

add_action('admin_menu', 'ecpt_add_productdetails_1_meta_box');
function ecpt_add_productdetails_1_meta_box() {

	global $productdetails_1_metabox;

	foreach($productdetails_1_metabox['page'] as $page) {
		add_meta_box($productdetails_1_metabox['id'], $productdetails_1_metabox['title'], 'ecpt_show_productdetails_1_box', $page, 'normal', 'default', $productdetails_1_metabox);
	}
}

// function to show meta boxes
function ecpt_show_productdetails_1_box()	{
	global $post;
	global $productdetails_1_metabox;
	global $ecpt_prefix;
	global $wp_version;

	// Use nonce for verification
	echo '<input type="hidden" name="ecpt_productdetails_1_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';

	echo '<table class="form-table">';

	foreach ($productdetails_1_metabox['fields'] as $field) {
		// get current post meta data

		$meta = get_post_meta($post->ID, $field['id'], true);

		echo '<tr>',
				'<th style="width:20%"><label for="', $field['id'], '">', stripslashes($field['name']), '</label></th>',
				'<td class="ecpt_field_type_' . str_replace(' ', '_', $field['type']) . '">';
		switch ($field['type']) {
			case 'text':
				echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" /><br/>', '', stripslashes($field['desc']);
				break;
			case 'date':
				if($meta) { $value = ecpt_timestamp_to_date($meta); } else {  $value = ''; }
				echo '<input type="text" class="ecpt_datepicker" name="' . $field['id'] . '" id="' . $field['id'] . '" value="'. $value . '" size="30" style="width:97%" />' . '' . stripslashes($field['desc']);
				break;
			case 'upload':
				echo '<input type="text" class="ecpt_upload_field" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:80%" /><input class="ecpt_upload_image_button" type="button" value="Upload Image" /><br/>', '', stripslashes($field['desc']);
				break;
			case 'textarea':

				if($field['rich_editor'] == 1) {
					if($wp_version >= 3.3) {
						echo wp_editor($meta, $field['id'], array('textarea_name' => $field['id']));
					} else {
						// older versions of WP
						$editor = '';
						if(!post_type_supports($post->post_type, 'editor')) {
							$editor = wp_tiny_mce(true, array('editor_selector' => $field['class'], 'remove_linebreaks' => false) );
						}
						$field_html = '<div style="width: 97%; border: 1px solid #DFDFDF;"><textarea name="' . $field['id'] . '" class="' . $field['class'] . '" id="' . $field['id'] . '" cols="60" rows="8" style="width:100%">'. $meta . '</textarea></div><br/>' . __(stripslashes($field['desc']));
						echo $editor . $field_html;
					}
				} else {
					echo '<div style="width: 100%;"><textarea name="', $field['id'], '" class="', $field['class'], '" id="', $field['id'], '" cols="60" rows="8" style="width:97%">', $meta ? $meta : $field['std'], '</textarea></div>', '', stripslashes($field['desc']);
				}

				break;
			case 'select':
				echo '<select name="', $field['id'], '" id="', $field['id'], '">';
				foreach ($field['options'] as $option) {
					echo '<option value="' . $option . '"', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
				}
				echo '</select>', '', stripslashes($field['desc']);
				break;
			case 'radio':
				foreach ($field['options'] as $option) {
					echo '<input type="radio" name="', $field['id'], '" value="', $option, '"', $meta == $option ? ' checked="checked"' : '', ' /> ', $option;
				}
				echo '<br/>' . stripslashes($field['desc']);
				break;
			case 'multicheck':
				foreach ($field['options'] as $option) {
					echo '<input type="checkbox" name="' . $field['id'] . '[' . $option . ']" value="' . $option . '"' . checked( true, in_array( $option, $meta ), false ) . '/> ' . $option;
				}
				echo '<br/>' . stripslashes($field['desc']);
				break;
			case 'checkbox':
				echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' /> ';
				echo stripslashes($field['desc']);
				break;
			case 'slider':
				echo '<input type="text" rel="' . $field['max'] . '" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="1" style="float: left; margin-right: 5px" />';
				echo '<div class="ecpt-slider" rel="' . $field['id'] . '" style="float: left; width: 60%; margin: 5px 0 0 0;"></div>';
				echo '<div style="width: 100%; clear: both;">' . stripslashes($field['desc']) . '</div>';
				break;
			case 'repeatable' :

				$field_html = '<input type="hidden" id="' . $field['id'] . '" class="ecpt_repeatable_field_name" value=""/>';
				if(is_array($meta)) {
					$count = 1;
					foreach($meta as $key => $value) {
						$field_html .= '<div class="ecpt_repeatable_wrapper"><input type="text" class="ecpt_repeatable_field" name="' . $field['id'] . '[]" id="' . $field['id'] . '[]" value="' . $meta[$key] . '" size="30" style="width:90%" />';
						if($count > 1) {
							$field_html .= '<a href="#" class="ecpt_remove_repeatable button-secondary">x</a><br/>';
						}
						$field_html .= '</div>';
						$count++;
					}
				} else {
					$field_html .= '<div class="ecpt_repeatable_wrapper"><input type="text" class="ecpt_repeatable_field" name="' . $field['id'] . '[]" id="' . $field['id'] . '[]" value="' . $meta . '" size="30" style="width:90%" /></div>';
				}
				$field_html .= '<button class="ecpt_add_new_field button-secondary">' . __('Add New', 'ecpt') . '</button>  ' . __(stripslashes($field['desc']));

				echo $field_html;

				break;

			case 'repeatable upload' :

				$field_html = '<input type="hidden" id="' . $field['id'] . '" class="ecpt_repeatable_upload_field_name" value=""/>';
				if(is_array($meta)) {
					$count = 1;
					foreach($meta as $key => $value) {
						$field_html .= '<div class="ecpt_repeatable_upload_wrapper"><input type="text" class="ecpt_repeatable_upload_field ecpt_upload_field" name="' . $field['id'] . '[]" id="' . $field['id'] . '[]" value="' . $meta[$key] . '" size="30" style="width:80%" /><button class="button-secondary ecpt_upload_image_button">Upload File</button>';
						if($count > 1) {
							$field_html .= '<a href="#" class="ecpt_remove_repeatable button-secondary">x</a><br/>';
						}
						$field_html .= '</div>';
						$count++;
					}
				} else {
					$field_html .= '<div class="ecpt_repeatable_upload_wrapper"><input type="text" class="ecpt_repeatable_upload_field ecpt_upload_field" name="' . $field['id'] . '[]" id="' . $field['id'] . '[]" value="' . $meta . '" size="30" style="width:80%" /><input class="button-secondary ecpt_upload_image_button" type="button" value="Upload File" /></div>';
				}
				$field_html .= '<button class="ecpt_add_new_upload_field button-secondary">' . __('Add New', 'ecpt') . '</button>  ' . __(stripslashes($field['desc']));

				echo $field_html;

				break;
		}
		echo     '<td>',
			'</tr>';
	}

	echo '</table>';
}

// Save data from meta box
add_action('save_post', 'ecpt_productdetails_1_save');
function ecpt_productdetails_1_save($post_id) {
	global $post;
	global $productdetails_1_metabox;

	// verify nonce
	if ( ! isset( $_POST['ecpt_productdetails_1_meta_box_nonce'] ) || ! wp_verify_nonce($_POST['ecpt_productdetails_1_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}


	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}

	foreach ($productdetails_1_metabox['fields'] as $field) {

		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];

		if ($new && $new != $old) {
			if($field['type'] == 'date') {
				$new = ecpt_format_date($new);
				update_post_meta($post_id, $field['id'], $new);
			} else {
				if(is_string($new)) {
					$new = $new;
				}
				update_post_meta($post_id, $field['id'], $new);


			}
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}


function ecpt_export_ui_scripts() {

	global $ecpt_options, $post;
	?>
	<script type="text/javascript">
			jQuery(document).ready(function($)
			{

				if($('.form-table .ecpt_upload_field').length > 0 ) {
					// Media Uploader
					window.formfield = '';

					$('.ecpt_upload_image_button').live('click', function() {
					window.formfield = $('.ecpt_upload_field',$(this).parent());
						tb_show('', 'media-upload.php?type=file&post_id=<?php echo $post->ID; ?>&TB_iframe=true');
										return false;
						});

						window.original_send_to_editor = window.send_to_editor;
						window.send_to_editor = function(html) {
							if (window.formfield) {
								imgurl = $('a','<div>'+html+'</div>').attr('href');
								window.formfield.val(imgurl);
								tb_remove();
							}
							else {
								window.original_send_to_editor(html);
							}
							window.formfield = '';
							window.imagefield = false;
						}
				}
				if($('.form-table .ecpt-slider').length > 0 ) {
					$('.ecpt-slider').each(function(){
						var $this = $(this);
						var id = $this.attr('rel');
						var val = $('#' + id).val();
						var max = $('#' + id).attr('rel');
						max = parseInt(max);
						//var step = $('#' + id).closest('input').attr('rel');
						$this.slider({
							value: val,
							max: max,
							step: 1,
							slide: function(event, ui) {
								$('#' + id).val(ui.value);
							}
						});
					});
				}

				if($('.form-table .ecpt_datepicker').length > 0 ) {
					var dateFormat = 'mm/dd/yy';
					$('.ecpt_datepicker').datepicker({dateFormat: dateFormat});
				}

				// add new repeatable field
				$(".ecpt_add_new_field").on('click', function() {
					var field = $(this).closest('td').find("div.ecpt_repeatable_wrapper:last").clone(true);
					var fieldLocation = $(this).closest('td').find('div.ecpt_repeatable_wrapper:last');
					// set the new field val to blank
					$('input', field).val("");
					field.insertAfter(fieldLocation, $(this).closest('td'));

					return false;
				});

				// add new repeatable upload field
				$(".ecpt_add_new_upload_field").on('click', function() {
					var container = $(this).closest('tr');
					var field = $(this).closest('td').find("div.ecpt_repeatable_upload_wrapper:last").clone(true);
					var fieldLocation = $(this).closest('td').find('div.ecpt_repeatable_upload_wrapper:last');
					// set the new field val to blank
					$('input[type="text"]', field).val("");

					field.insertAfter(fieldLocation, $(this).closest('td'));

					return false;
				});

				// remove repeatable field
				$('.ecpt_remove_repeatable').on('click', function(e) {
					e.preventDefault();
					var field = $(this).parent();
					$('input', field).val("");
					field.remove();
					return false;
				});

			});
	  </script>
	<?php
}

function ecpt_export_datepicker_ui_scripts() {
	global $ecpt_base_dir;
	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_script('jquery-ui-slider');
}
function ecpt_export_datepicker_ui_styles() {
	global $ecpt_base_dir;
	wp_enqueue_style('jquery-ui-css', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css', false, '1.8', 'all');
}

// these are for newest versions of WP
add_action('admin_print_scripts-post.php', 'ecpt_export_datepicker_ui_scripts');
add_action('admin_print_scripts-edit.php', 'ecpt_export_datepicker_ui_scripts');
add_action('admin_print_scripts-post-new.php', 'ecpt_export_datepicker_ui_scripts');
add_action('admin_print_styles-post.php', 'ecpt_export_datepicker_ui_styles');
add_action('admin_print_styles-edit.php', 'ecpt_export_datepicker_ui_styles');
add_action('admin_print_styles-post-new.php', 'ecpt_export_datepicker_ui_styles');

if ((isset($_GET['post']) && (isset($_GET['action']) && $_GET['action'] == 'edit') ) || (strstr($_SERVER['REQUEST_URI'], 'wp-admin/post-new.php')))
{
	add_action('admin_head', 'ecpt_export_ui_scripts');
}

// converts a time stamp to date string for meta fields
if(!function_exists('ecpt_timestamp_to_date')) {
	function ecpt_timestamp_to_date($date) {

		return date('m/d/Y', $date);
	}
}
if(!function_exists('ecpt_format_date')) {
	function ecpt_format_date($date) {

		$date = strtotime($date);

		return $date;
	}
}