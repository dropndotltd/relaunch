<?php
//Inserts custom metabox as per the theme's features
add_action('add_meta_boxes', 'cpotheme_metabox');
function cpotheme_metabox(){
	add_meta_box('cpotheme_features', __('Feature Options', 'cpotheme'), 'cpotheme_metabox_features', 'cpo_feature', 'normal', 'high');
	add_meta_box('cpotheme_slides', __('Slide Options', 'cpotheme'), 'cpotheme_metabox_slides', 'cpo_slide', 'normal', 'high');
	add_meta_box('cpotheme_portfolio', __('Portfolio Options', 'cpotheme'), 'cpotheme_metabox_portfolio', 'cpo_portfolio', 'normal', 'high');
	add_meta_box('cpotheme_testimonials', __('Testimonial Options', 'cpotheme'), 'cpotheme_metabox_testimonials', 'cpo_testimonial', 'normal', 'high');
}


function cpotheme_metabox_features($post){
	cpotheme_meta_fields($post, cpotheme_metadata_features());
}
add_action('edit_post', 'cpotheme_metabox_features_save');
function cpotheme_metabox_features_save($post){
	cpotheme_meta_save(cpotheme_metadata_features());
}


function cpotheme_metabox_slides($post){
	cpotheme_meta_fields($post, cpotheme_metadata_slides());
}
add_action('edit_post', 'cpotheme_metabox_slides_save');
function cpotheme_metabox_slides_save($post){
	cpotheme_meta_save(cpotheme_metadata_slides());
}


function cpotheme_metabox_portfolio($post){
	cpotheme_meta_fields($post, cpotheme_metadata_portfolio());
}
add_action('edit_post', 'cpotheme_metabox_portfolio_save');
function cpotheme_metabox_portfolio_save($post){
	cpotheme_meta_save(cpotheme_metadata_portfolio());
}


function cpotheme_metabox_testimonials($post){
	cpotheme_meta_fields($post, cpotheme_metadata_testimonials());
}
add_action('edit_post', 'cpotheme_metabox_testimonials_save');
function cpotheme_metabox_testimonials_save($post){
	cpotheme_meta_save(cpotheme_metadata_testimonials());
}