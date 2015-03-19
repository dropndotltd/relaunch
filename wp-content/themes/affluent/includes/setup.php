<?php 
add_action('after_setup_theme', 'cpotheme_init');
if(!function_exists('cpotheme_init')){
	function cpotheme_init(){
		add_image_size('portfolio', 600, 400, true);
		add_image_size('blog', 300, 350, true);
		add_theme_support('custom-header');
	}
}