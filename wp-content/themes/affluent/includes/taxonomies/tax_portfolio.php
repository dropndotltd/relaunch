<?php

add_action('init', 'cpotheme_tax_portfoliocategory');
function cpotheme_tax_portfoliocategory() 
{
	//Set up labels
	$labels = array('name' => __('Portfolio Categories', 'cpotheme'),
	'singular_name' => __('Portfolio Category', 'cpotheme'),
	'add_new' => __('New Portfolio Category', 'cpotheme'),
	'add_new_item' => __('Add Portfolio Category', 'cpotheme'),
	'edit_item' => __('Edit Portfolio Category', 'cpotheme'),
	'new_item' => __('New Portfolio Category', 'cpotheme'),
	'view_item' => __('View Portfolio Category', 'cpotheme'),
	'search_items' => __('Search Portfolio Categories', 'cpotheme'),
	'not_found' =>  __('No portfolio categories were found.', 'cpotheme'),
	'not_found_in_trash' => __('No portfolio categories were found in the trash.', 'cpotheme'), 
	'parent_item_colon' => '');
	
	$fields = array(
	'labels' => $labels,
	'public' => true,
	'show_ui' => true,
	'show_in_nav_menus' => true,
	'show_tagcloud' => true,
	'rewrite' => array('slug' => 'portfolio-category'),
	'hierarchical' => true); 
	
	register_taxonomy('cpo_portfolio_category', 'cpo_portfolio', $fields);
}


add_action('init', 'cpotheme_tax_portfoliotag');
function cpotheme_tax_portfoliotag() 
{
	//Set up labels
	$labels = array('name' => __('Portfolio Tags', 'cpotheme'),
	'singular_name' => __('Portfolio Tag', 'cpotheme'),
	'add_new' => __('New Portfolio Tag', 'cpotheme'),
	'add_new_item' => __('Add Portfolio Tag', 'cpotheme'),
	'edit_item' => __('Edit Portfolio Tag', 'cpotheme'),
	'new_item' => __('New Portfolio Tag', 'cpotheme'),
	'view_item' => __('View Portfolio Tag', 'cpotheme'),
	'search_items' => __('Search Portfolio Tags', 'cpotheme'),
	'not_found' =>  __('No portfolio tags were found.', 'cpotheme'),
	'not_found_in_trash' => __('No portfolio tags were found in the trash.', 'cpotheme'), 
	'parent_item_colon' => '');
	
	$fields = array(
	'labels' => $labels,
	'public' => true,
	'show_ui' => true,
	'show_in_nav_menus' => true,
	'show_tagcloud' => true,
	'rewrite' => array('slug' => 'portfolio-tag'),
	'hierarchical' => false); 
	
	register_taxonomy('cpo_portfolio_tag', 'cpo_portfolio', $fields);
}


//Modify main query on taxonomy page to change number of posts
add_action('pre_get_posts', 'cpotheme_tax_portfoliocategory_query');
function cpotheme_tax_portfoliocategory_query($query){
	if(is_tax('cpo_portfolio_category') && $query->is_main_query() && !is_admin()){
		$post_number = cpotheme_get_option('portfolio_columns') * 3;
		$query->set('posts_per_page', $post_number);
	}
}