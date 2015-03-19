<?php

add_action('init', 'cpotheme_cpost_testimonials');
function cpotheme_cpost_testimonials() 
{
	//Set up labels
	$labels = array('name' => __('Testimonials', 'cpotheme'),
	'singular_name' => __('Testimonials', 'cpotheme'),
	'add_new' => __('Add Testimonial', 'cpotheme'),
	'add_new_item' => __('Add New Testimonial', 'cpotheme'),
	'edit_item' => __('Edit Testimonial', 'cpotheme'),
	'new_item' => __('New Testimonial', 'cpotheme'),
	'view_item' => __('View Testimonials', 'cpotheme'),
	'search_items' => __('Search Testimonials', 'cpotheme'),
	'not_found' =>  __('No testimonials found.', 'cpotheme'),
	'not_found_in_trash' => __('No testimonials found in the trash.', 'cpotheme'), 
	'parent_item_colon' => '');
	
	$fields = array('labels' => $labels,
	'public' => false,
	'publicly_queryable' => false,
	'show_ui' => true, 
	'query_var' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'menu_icon' => 'dashicons-testimonial',
	'menu_position' => null,
	'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes')); 
	
	register_post_type('cpo_testimonial', $fields);
}