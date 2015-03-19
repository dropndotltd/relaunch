<?php

//Create portfolio meta fields
function cpotheme_metadata_features(){

	$cpotheme_data = array();
	
	$cpotheme_data[] = array(
	'name' => 'feature_icon',
	'std'  => '',
	'label' => __('Feature Icon', 'cpotheme'),
	'desc' => __('Sets an icon to be used as the featured image. If an icon is specified, it will replace the normal thumbnail.', 'cpotheme'),
	'type' => 'select',
	'option' => cpotheme_metadata_icons(),
	'class' => 'fontawesome');
	
	return $cpotheme_data;
}

//Create portfolio meta fields
function cpotheme_metadata_slides(){

	$cpotheme_data = array();
		
	$cpotheme_data[] = array(
	'name' => 'slide_position',
	'std'  => '',
	'label' => __('Caption Position', 'cpotheme'),
	'desc' => __('Specifies where the caption should be located within the slide.', 'cpotheme'),
	'type' => 'select',
	'option' => cpotheme_metadata_slideposition());
	
	return $cpotheme_data;
}


//Create portfolio meta fields
function cpotheme_metadata_portfolio(){

	$cpotheme_data = array();
		
	$cpotheme_data[] = array(
	'name' => 'portfolio_featured',
	'std'  => '',
	'label' => __('Featured Item?', 'cpotheme'),
	'desc' => __('Specifies whether this portfolio item appears in the homepage.', 'cpotheme'),
	'type' => 'yesno');
	
	$cpotheme_data[] = array(
	'name' => 'portfolio_layout',
	'std'  => '',
	'label' => __('Image Layout', 'cpotheme'),
	'desc' => __('Specifies how this portfolio item should be displayed.', 'cpotheme'),
	'type' => 'select',
	'option' => cpotheme_metadata_portfoliolayouts());
	
	$cpotheme_data[] = array(
	'name' => 'portfolio_video',
	'std'  => '',
	'label' => __('Video URL', 'cpotheme'),
	'desc' => __('Specifies a video URL for this portfolio item this way \'http://www.youtube.com/watch?v=abc12345\' or \'http://vimeo.com/abc12345\'. If a video is added, it will replace the image slideshow.', 'cpotheme'),
	'type' => 'text');
	
	return $cpotheme_data;
}

//Create portfolio meta fields
function cpotheme_metadata_testimonials(){

	$cpotheme_data = array();
	
	$cpotheme_data[] = array(
	'name' => 'testimonial_position',
	'std'  => '',
	'label' => __('Position', 'cpotheme'),
	'desc' => __('Indicates the position or company for this testimonial.', 'cpotheme'),
	'type' => 'text');
	
	return $cpotheme_data;
}