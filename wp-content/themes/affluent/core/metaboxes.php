<?php

//Add default metaboxes
add_action('add_meta_boxes', 'cpocore_metaboxes');
function cpocore_metaboxes(){
	$args = array('public' => true);
	
	//Add common metaboxes
	$post_types = get_post_types($args, 'names');
	$post_type_list = array();
	foreach($post_types as $current_type)
		add_meta_box('cpotheme_layout_'.$current_type, __('Layout Options', 'cpocore'), 'cpocore_metabox_layout', $current_type, 'normal', 'high');

}

function cpocore_metabox_layout($post){
	cpotheme_meta_fields($post, cpotheme_metadata_layout_options());
}
add_action('edit_post', 'cpocore_metabox_layout_save');
function cpocore_metabox_layout_save($post){
	cpotheme_meta_save(cpotheme_metadata_layout_options());
}
