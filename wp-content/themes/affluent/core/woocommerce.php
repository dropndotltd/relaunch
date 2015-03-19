<?php

//Remove Standard WooCommerce Sidebar
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);


//Wrapper for the shop and individual products
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action('woocommerce_before_main_content', 'cpotheme_woocommerce_before_main_content', 10);
function cpotheme_woocommerce_before_main_content(){
	
	$shop_id = get_option('woocommerce_shop_page_id');
	$content_class = '';
	
	if(is_cart() || is_checkout())
		$content_class = ' content-wide';
	
	//Begin banner area
	$background_image = ''; 
	if(get_header_image() != '')
		$background_image = ' style="background-image:url('.get_header_image().');"'; 
	echo '<section id="banner" class="banner banner-woocommerce"'.$background_image.'>';
	echo '<div id="pagetitle" class="pagetitle">';
	echo '<div class="container">';
	
	//Shop title
	$title_tag = is_singular() ? 'span': 'h1'; 
	echo '<'.$title_tag.' class="pagetitle-title heading">';
	woocommerce_page_title();
	echo '</'.$title_tag.'>';
	
	//Shop subtitle
	echo '<span class="pagetitle-subtitle">';
	echo get_post_meta($shop_id, 'page_subtitle', true);
	echo '</span>';
	
	//Theme breadcrumbs
	cpotheme_breadcrumb();
	
	echo '</div>';
	echo '</div>';
	echo '</section>';
	
	//Begin main area
	echo '<div id="main" class="main">';
	echo '<div class="container">';
	echo '<section id="content" class="content'.$content_class.'">';
}


//Close shop wrapper
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_after_main_content', 'cpotheme_woocommerce_after_main_content', 10);
function cpotheme_woocommerce_after_main_content(){
	echo '</section>';
	if(!is_cart() && !is_checkout())
		get_sidebar();
	do_action('cpotheme_woocommerce_after_sidebar');
	echo '</div>';
	echo '</div>';
}


//Do not display the product title on listings-- show the shop's title.
add_filter('woocommerce_show_page_title', 'cpotheme_woocommerce_show_page_title');
function cpotheme_woocommerce_show_page_title($data){
	if(!is_singular()) return false;
}