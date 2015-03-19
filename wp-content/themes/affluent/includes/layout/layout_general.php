<?php 

//Displays the speed and timeout values selected by the user
function cpotheme_slider_data(){ 
	$cpotheme_slider_timeout_option = (int)cpotheme_get_option('slider_timeout');
	$cpotheme_slider_speed_option = (int)cpotheme_get_option('slider_speed');
	
	if($cpotheme_slider_speed_option > 0 && $cpotheme_slider_speed_option != '')
		$slider_speed = $cpotheme_slider_speed_option;
	else
		$slider_speed = '2000';
	
	if($cpotheme_slider_timeout_option > 0 && $cpotheme_slider_timeout_option != '' )
		$slider_timeout = $cpotheme_slider_timeout_option;
	else
		$slider_timeout = '8000';
	
	echo ' data-timeout="'.$slider_timeout.'" data-speed="'.$slider_speed.'"';
}