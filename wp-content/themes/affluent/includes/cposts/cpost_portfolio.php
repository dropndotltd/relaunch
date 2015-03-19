<?php
// HOMEPAGE FEATURES DECLARACTION
// Adds a custom post type for homepage features
add_action('init', 'cpotheme_cpost_portfolio');
function cpotheme_cpost_portfolio() 
{
	//Set up labels
	$labels = array('name' => __('Portfolio', 'cpotheme'),
	'singular_name' => __('Portfolio', 'cpotheme'),
	'add_new' => __('Add Portfolio Item', 'cpotheme'),
	'add_new_item' => __('Add New Portfolio Item', 'cpotheme'),
	'edit_item' => __('Edit Portfolio Item', 'cpotheme'),
	'new_item' => __('New Portfolio Item', 'cpotheme'),
	'view_item' => __('View Portfolio', 'cpotheme'),
	'search_items' => __('Search Portfolio', 'cpotheme'),
	'not_found' =>  __('No portfolio items found.', 'cpotheme'),
	'not_found_in_trash' => __('No portfolio items found in the trash.', 'cpotheme'), 
	'parent_item_colon' => '');
	
	$fields = array('labels' => $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true, 
	'query_var' => true,
	'rewrite' => array('slug' => 'portfolio-item'),
	'capability_type' => 'post',
	'hierarchical' => false,
	'menu_icon' => 'dashicons-portfolio',
	'menu_position' => null,
	'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes')); 
	
	register_post_type('cpo_portfolio', $fields);
}


add_filter('manage_edit-cpo_portfolio_columns', 'cpotheme_cpost_property_columns') ;
function cpotheme_cpost_property_columns($columns){
	$columns = array(
	'cb' => '<input type="checkbox" />',
	'icon' => __('Icon', 'cpotheme'),
	'title' => __('Title', 'cpotheme'),
	'author' => __('Author', 'cpotheme'),
	'portfolio-cats' => __('Categories', 'cpotheme'),
	'portfolio-tags' => __('Tags', 'cpotheme'),
	'layout' => __('Image Layout', 'cpotheme'),
	'featured' => __('Featured', 'cpotheme')
	);
	return $columns;
}


add_action('manage_posts_custom_column', 'cpotheme_cpost_property_columns_content', 2);
function cpotheme_cpost_property_columns_content($column){
	global $post;

	switch($column){
		
		case 'icon':	
			echo get_the_post_thumbnail($post->ID, array(60,60));
		break;
		
		case 'portfolio-cats':
			echo get_the_term_list($post->ID, 'cpo_portfolio_category', '', ', ', '');
        break;
			
		case 'portfolio-tags':
			echo get_the_term_list($post->ID, 'cpo_portfolio_tag', '', ', ', '');
        break;
		
		case 'layout':
			echo ucfirst(get_post_meta($post->ID, 'portfolio_layout', true));
        break;
		
		case 'featured':
			if(get_post_meta($post->ID, 'portfolio_featured', true) == 1) 
				echo '<span class="icon-star"></span>';
			else
				echo '<span class="icon-star-empty"></span>';
        break;
			
		default:break;
	}
}