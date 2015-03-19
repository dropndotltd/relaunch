<?php

//Create page meta fields
function cpotheme_metadata_layout_options(){

	$cpotheme_data = array();
	
	$cpotheme_data[] = array(
	'name' => 'layout_sidebar',
	'label' => __('Sidebar Position', 'cpotheme'),
	'desc' => __('Determines the location of the sidebar by default.', 'cpotheme'),
	'type' => 'imagelist',
	'option' => cpotheme_metadata_sidebarposition_optional(),
	'std' => 'default');
	
	$cpotheme_data[] = array(
	'name' => 'page_header',
	'std'  => '',
	'label' => __('Page Header', 'cpotheme'),
	'desc' => __('Specifies the format of the header for this page.', 'cpotheme'),
	'type' => 'select',
	'option' => cpotheme_metadata_page_header(),
	'std' => 'normal');
	
	$cpotheme_data[] = array(
	'name' => 'page_title',
	'std'  => '',
	'label' => __('Page Title', 'cpotheme'),
	'desc' => __('Specifies the format of the title heading for this page.', 'cpotheme'),
	'type' => 'select',
	'option' => cpotheme_metadata_page_title(),
	'std' => 'normal');
	
	$cpotheme_data[] = array(
	'name' => 'page_footer',
	'std'  => '',
	'label' => __('Page Footer', 'cpotheme'),
	'desc' => __('Specifies the format of the footer for this page.', 'cpotheme'),
	'type' => 'select',
	'option' => cpotheme_metadata_page_footer(),
	'std' => 'normal');
	
	return $cpotheme_data;
}