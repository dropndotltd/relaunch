<?php // Options declaration
// Declares all config data to be used in the theme settings page.
function cpotheme_metadata_settings(){
	$cpotheme_config = array();

	//GENERAL CONFIG
	$cpotheme_config[] = array(
	'id' => 'general_config',
	'name' => __('General Options', 'cpotheme'),
	'desc' => __('Global configuration options applied to the entire site.', 'cpotheme'),
	'type' => 'separator');
	
	if(function_exists('cpotheme_metadata_branding'))
		$cpotheme_config = array_merge($cpotheme_config, cpotheme_metadata_branding());
	
	if(function_exists('cpotheme_metadata_loginbranding'))
		$cpotheme_config = array_merge($cpotheme_config, cpotheme_metadata_loginbranding());
	
	if(function_exists('cpotheme_metadata_management'))
		$cpotheme_config = array_merge($cpotheme_config, cpotheme_metadata_management());
	
	if(function_exists('cpotheme_metadata_customization'))
		$cpotheme_config = array_merge($cpotheme_config, cpotheme_metadata_customization());
	
	
	//LAYOUT TAB
	$cpotheme_config[] = array(
	'id' => 'layout_config',
	'name' => __('Layout', 'cpotheme'),
	'desc' => __('Specify how you want the structure of the site to look.', 'cpotheme'),
	'type' => 'separator');
	
	//General layout options
	if(function_exists('cpotheme_metadata_layout'))
		$cpotheme_config = array_merge($cpotheme_config, cpotheme_metadata_layout());
	
	//Homepage
	$cpotheme_config[] = array(
	'id' => 'homepage',
	'name' => __('Homepage', 'cpotheme'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'layout_minifeatures_columns',
	'name' => __('Mini Features Columns', 'cpotheme'),
	'desc' => __('Determines the number of columns for the mini features in the homepage.', 'cpotheme'),
	'type' => 'select',
	'option' => cpotheme_metadata_feature_columns(),
	'std' => 2);
	
	//Slider options
	$cpotheme_config[] = array(
	'id' => 'slider',
	'name' => __('Homepage Slider', 'cpotheme'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'slider_always',
	'name' => __('Always Display Slider', 'cpotheme'),
	'desc' => __('If enabled, the homepage slider will be displayed in all pages.', 'cpotheme'),
	'type' => 'yesno',
	'std' => '0');
	
	$cpotheme_config[] = array(
	'id' => 'slider_speed',
	'name' => __('Transition Speed', 'cpotheme'),
	'desc' => __('Specify the speed of each transition, in milliseconds.', 'cpotheme'),
	'type' => 'text',
	'width' => '100px',
	'std' => '1500');
	
	$cpotheme_config[] = array(
	'id' => 'slider_timeout',
	'name' => __('Transition Delay', 'cpotheme'),
	'desc' => __('Specify the time between each transition, in milliseconds.', 'cpotheme'),
	'type' => 'text',
	'width' => '100px',
	'std' => '8000');
	
	//Portfolio
	$cpotheme_config[] = array(
	'id' => 'portfolio',
	'name' => __('Portfolio', 'cpotheme'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'portfolio_related',
	'name' => __('Enable Related Portfolio Items', 'cpotheme'),
	'desc' => __('Enables or disables the related portfolio items listing in each portfolio item page.', 'cpotheme'),
	'type' => 'yesno',
	'std'  => '1');
	
	$cpotheme_config[] = array(
	'id' => 'portfolio_columns',
	'name' => __('Portfolio Columns', 'cpotheme'),
	'desc' => __('Determines the number of columns for the portfolio.', 'cpotheme'),
	'type' => 'select',
	'option' => cpotheme_metadata_columns(),
	'std' => 3);
		
	
	//Styling
	$cpotheme_config[] = array(
	'id' => 'styling_config',
	'name' => __('Styling', 'cpotheme'),
	'desc' => __('Set up the look & feel of the site.', 'cpotheme'),
	'type' => 'separator');
	
	//General layout options
	if(function_exists('cpotheme_metadata_coloring'))
		$cpotheme_config = array_merge($cpotheme_config, cpotheme_metadata_coloring());
		
	//General layout options
	if(function_exists('cpotheme_metadata_typography'))
		$cpotheme_config = array_merge($cpotheme_config, cpotheme_metadata_typography());
	
	
	
	//CONTENT
	$cpotheme_config[] = array(
	'id' => 'content_config',
	'name' => __('Content', 'cpotheme'),
	'desc' => __('Lets you add custom content in various areas throughout the site.', 'cpotheme'),
	'type' => 'separator');
	
	//General Content
	$cpotheme_config[] = array(
	'id' => 'content_site',
	'name' => __('Overall Site', 'cpotheme'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'header_text',
	'name' => __('Custom Header Text', 'cpotheme'),
	'desc' => __('Allows you to insert custom text in the header of the site. The position of this area changes depending on the type of header selected. You can use HTML in here, as well as shortcodes.', 'cpotheme'),
	'type' => 'textarea');
	
	$cpotheme_config[] = array(
	'id' => 'footer_text',
	'name' => __('Custom Footer Text', 'cpotheme'),
	'desc' => __('Allows you to insert custom text that replaces the normal copyright line in the footer. You can use HTML in here, as well as shortcodes.', 'cpotheme'),
	'type' => 'textarea');
	
	//Homepage Content
	$cpotheme_config[] = array(
	'id' => 'content_home',
	'name' => __('Homepage', 'cpotheme'),
	'type' => 'divider');
	
	$cpotheme_config[] = array(
	'id' => 'home_tagline',
	'name' => __('Home Tagline', 'cpotheme'),
	'desc' => __('Allows you to insert a custom tagline below the main slider in the homepage. You can use HTML in here, as well as shortcodes.', 'cpotheme'),
	'type' => 'textarea');
	
	$cpotheme_config[] = array(
	'id' => 'home_features',
	'name' => __('Home Features Description', 'cpotheme'),
	'desc' => __('Allows you to insert custom text in the features that appear on the homepage. You can use HTML in here, as well as shortcodes.', 'cpotheme'),
	'type' => 'textarea');
	
	$cpotheme_config[] = array(
	'id' => 'home_portfolio',
	'name' => __('Home Portfolio Description', 'cpotheme'),
	'desc' => __('Allows you to insert custom text in the portfolio description that appears on the homepage. You can use HTML in here, as well as shortcodes.', 'cpotheme'),
	'type' => 'textarea');
	
	$cpotheme_config[] = array(
	'id' => 'home_testimonials',
	'name' => __('Home Testimonials Description', 'cpotheme'),
	'desc' => __('Allows you to insert custom text in the testimonials area that appears on the homepage. You can use HTML in here, as well as shortcodes.', 'cpotheme'),
	'type' => 'textarea');
	
	
	//POSTS & PAGES
	$cpotheme_config[] = array(
	'id' => 'post_config',
	'name' => __('Posts & Pages', 'cpotheme'),
	'desc' => __('Styles the appearance of posts and pages.', 'cpotheme'),
	'type' => 'separator');
	
	//Post Appearance
	if(function_exists('cpotheme_metadata_postappearance'))
		$cpotheme_config = array_merge($cpotheme_config, cpotheme_metadata_postappearance());
	
	
	//SOCIAL & CONTACT
	$cpotheme_config[] = array(
	'id' => 'contact_config',
	'name' => __('Social & Contact', 'cpotheme'),
	'desc' => __('Setup for social media information.', 'cpotheme'),
	'type' => 'separator');
	
	if(function_exists('cpotheme_metadata_social'))
		$cpotheme_config = array_merge($cpotheme_config, cpotheme_metadata_social());
	
	return $cpotheme_config;
}