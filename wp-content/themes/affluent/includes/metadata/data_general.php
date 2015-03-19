<?php 

function cpotheme_metadata_pagelist_optional(){
	$cpotheme_data = array();	
	$page_list = get_pages('sort_column=post_parent,menu_order');    
	$cpotheme_data[0] = __('(Select a Page...)', 'cpotheme');
	foreach ($page_list as $current_page)
		$cpotheme_data[$current_page->ID] = $current_page->post_title;
	return $cpotheme_data;
}

function cpotheme_metadata_feature_columns(){
	$cpotheme_data = array(
	2 => 'Two Columns',
	3 => 'Three Columns',
	4 => 'Four Columns',
	5 => 'Five Columns');
	return $cpotheme_data;
}

function cpotheme_metadata_columns(){
	$cpotheme_data = array(
	2 => 'Two Columns',
	3 => 'Three Columns',
	4 => 'Four Columns',
	5 => 'Five Columns');
	return $cpotheme_data;
}

function cpotheme_metadata_alignment(){
	$cpotheme_data = array(
	'left' => 'To The Left',
	'right' => 'To The Right');
	return $cpotheme_data;
}

function cpotheme_metadata_slideposition(){
	$cpotheme_data = array(
	'left' => 'To The Left',
	'right' => 'To The Right');
	return $cpotheme_data;
}

function cpotheme_metadata_minifeaturestyle(){
	$cpotheme_data = array(
	'normal' => get_template_directory_uri().'/images/admin/mini_normal.gif',
	'horizontal' => get_template_directory_uri().'/images/admin/mini_horizontal.gif',
	'vertical' => get_template_directory_uri().'/images/admin/mini_vertical.gif');
	return $cpotheme_data;
}

function cpotheme_metadata_portfoliolayouts(){
	$cpotheme_data = array(
	'normal' => __('Display the featured image', 'cpotheme'),
	'gallery' => __('Display a gallery of all attached images', 'cpotheme'),
	'slideshow' => __('Display a slideshow of all attached images', 'cpotheme'),
	'video' => __('Display a linked video', 'cpotheme'),
	'none' => __('Do not display anything', 'cpotheme'));
	return $cpotheme_data;
}

function cpotheme_metadata_portfolio_icons($key = null){
	$cpotheme_data = array(
	'normal' => 'search',
	'gallery' => 'th',
	'slideshow' => 'film',
	'video' => 'play-circle',
	'none' => 'search');
	return ($key == null) ? $cpotheme_data : $cpotheme_data[$key];
}