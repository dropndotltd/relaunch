<?php
add_action('wp_head', 'cpotheme_styling_custom', 19);
function cpotheme_styling_custom(){
	
	//Background styling
	$primary_color = cpotheme_get_option('primary_color');
	$slider_height = cpotheme_get_option('slider_height');
	?>
	<style type="text/css">
		<?php if($slider_height != ''):?>
			.slider-slides { height:<?php echo $slider_height; ?>px; }
		<?php endif; ?>
		
		
		<?php if($primary_color != ''): ?>
		
		.button, .button:link, .button:visited, input[type=submit] { background-color:<?php echo $primary_color; ?>; }
		<?php endif; ?>
		
		
		<?php if($primary_color != ''): ?>
		<?php $faded_color = cpotheme_alter_brightness($primary_color, -50); ?>
		.menu-main .current_page_ancestor > a,
		.menu-main .current-menu-item > a { color:<?php echo $primary_color; ?>; }
		.menu-portfolio .current-cat a,
		.pagination .current { background-color:<?php echo $primary_color; ?>; }
		.button, .button:link, .button:visited, input[type=submit] { box-shadow:3px 3px 0 <?php echo $faded_color; ?>; }
		<?php endif; ?>
    </style>
	<?php
}