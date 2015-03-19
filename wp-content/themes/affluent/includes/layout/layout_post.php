<?php 

//Define Read More styling for excerpts
function cpotheme_post_readmore(){
	return '<a class="button readmore" href="'.get_permalink(get_the_ID()).'">'.__('Read More', 'cpotheme').'</a>';
}


//Displays Read More link on automatic excerpts
add_filter('excerpt_more', 'cpotheme_auto_excerpt_more');
function cpotheme_auto_excerpt_more($more){
	$output = '&hellip;';
	return $output;
}


// Limits excerpt length to a certain size
add_filter('excerpt_length', 'cpotheme_post_excerpt_length');
function cpotheme_post_excerpt_length($length){
	return 40;
}