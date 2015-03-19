<?php 

if(!function_exists('cpotheme_metadata_branding')){
	function cpotheme_metadata_branding(){
		$cpotheme_config = array();
		
		//Branding
		$cpotheme_config[] = array(
		'id' => 'branding',
		'name' => __('Site Branding', 'cpocore'),
		'type' => 'divider');
		
		$cpotheme_config[] = array(
		'id' => 'general_logo',
		'name' => __('Custom Logo', 'cpocore'),
		'desc' => __('Insert the URL of an image to be used as a custom logo.', 'cpocore'),
		'type' => 'upload');

		$cpotheme_config[] = array(
		'id' => 'general_logo_width',
		'name' => __('Custom Logo Width', 'cpocore'),
		'desc' => __('Forces the logo to have a specified width, in pixels. You can use an image twice as big to scale down the actual logo, and get a better result in high-resolution screens.', 'cpocore'),
		'type' => 'text',
		'width' => '100px');

		$cpotheme_config[] = array(
		'id' => 'general_favicon',
		'name' => __('Custom Favicon', 'cpocore'),
		'desc' => __('Insert the URL of an image to be used as a custom favicon. Recommended sizes are 16x16 pixels.', 'cpocore'),
		'type' => 'upload');
		
		$cpotheme_config[] = array(
		'id' => 'general_texttitle',
		'name' => __('Enable Text Title?', 'cpocore'),
		'desc' => __('Activate this to display the site title as text.', 'cpocore'),
		'type' => 'yesno',
		'std' => '0');
		
		return $cpotheme_config;
	}
}

if(!function_exists('cpotheme_metadata_loginbranding')){
	function cpotheme_metadata_loginbranding(){
		$cpotheme_config = array();
		
		//Branding
		$cpotheme_config[] = array(
		'id' => 'login',
		'name' => __('Login Page Branding', 'cpocore'),
		'type' => 'divider');
		
		$cpotheme_config[] = array(
		'id' => 'login_logo',
		'name' => __('Login Logo', 'cpocore'),
		'desc' => __('Insert the URL of an image to be used as a custom logo in the WordPress login page.', 'cpocore'),
		'type' => 'upload');

		$cpotheme_config[] = array(
		'id' => 'login_bg',
		'name' => __('Login Background', 'cpocore'),
		'desc' => __('Insert the URL of an image to be used as a custom background image in the WordPress login page.', 'cpocore'),
		'type' => 'upload');
		
		$cpotheme_config[] = array(
		'id' => 'login_url',
		'name' => __('Login Logo URL', 'cpocore'),
		'desc' => __('Insert the URL of the logo in the WordPress login page.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'login_title',
		'name' => __('Login Logo Title', 'cpocore'),
		'desc' => __('Insert the hover title of the logo in the WordPress login page.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'login_css',
		'name' => __('Custom Login CSS', 'cpocore'),
		'desc' => __('Here you can add CSS rules to modify the login page as you need to.', 'cpocore'),
		'type' => 'textarea');
		
		return $cpotheme_config;
	}
}

if(!function_exists('cpotheme_metadata_management')){
	function cpotheme_metadata_management(){
		$cpotheme_config = array();
		
		//Management
		$cpotheme_config[] = array(
		'id' => 'management',
		'name' => __('Management', 'cpocore'),
		'type' => 'divider');
		
		$cpotheme_config[] = array(
		'id' => 'general_editlinks',
		'name' => __('Activate Edit Links?', 'cpocore'),
		'desc' => __('Activate this option to display shortcut edit links through out the site for logged in users.', 'cpocore'),
		'type' => 'yesno',
		'std' => '1');
		
		$cpotheme_config[] = array(
		'id' => 'general_analytics',
		'name' => __('Analytics Tracking Code', 'cpocore'),
		'desc' => __('Insert here your analytics tool\'s tracking code.', 'cpocore'),
		'type' => 'textarea');
		
		return $cpotheme_config;
	}
}

if(!function_exists('cpotheme_metadata_customization')){
	function cpotheme_metadata_customization(){
		$cpotheme_config = array();
		
		//Customization
		$cpotheme_config[] = array(
		'id' => 'customization',
		'name' => __('Customization', 'cpocore'),
		'type' => 'divider');
		
		$cpotheme_config[] = array(
		'id' => 'general_css',
		'name' => __('Custom CSS', 'cpocore'),
		'desc' => __('Here you can insert custom CSS styling for the entire site. This code will override the default stylesheet, but it might not have higher priority than plugins.', 'cpocore'),
		'type' => 'textarea');
		
		$cpotheme_config[] = array(
		'id' => 'general_js',
		'name' => __('Custom Javascript', 'cpocore'),
		'desc' => __('Here you can insert custom Javascript code for the entire site.', 'cpocore'),
		'type' => 'textarea');
		
		return $cpotheme_config;
	}
}


if(!function_exists('cpotheme_metadata_layout')){
	function cpotheme_metadata_layout(){
		$cpotheme_config = array();
		
		//General Layout
		$cpotheme_config[] = array(
		'id' => 'general_layout',
		'name' => __('General Layout', 'cpocore'),
		'type' => 'divider');
		
		$cpotheme_config[] = array(
		'id' => 'sidebar_position',
		'name' => __('Sidebar Position', 'cpotheme'),
		'desc' => __('Determines the location of the sidebar by default. This option can be overidden in individual pages.', 'cpotheme'),
		'type' => 'imagelist',
		'option' => cpotheme_metadata_sidebarposition(),
		'std' => 'right');
		
		$cpotheme_config[] = array(
		'id' => 'sidebar_position_archive',
		'name' => __('Sidebar Position in Archives', 'cpotheme'),
		'desc' => __('Determines the location of the sidebar by default on archive pages, like post categories. <b>Special pages like bbPress forums or the WooCommerce shop pages count as archives and will be affected by this option</b>.', 'cpotheme'),
		'type' => 'imagelist',
		'option' => cpotheme_metadata_sidebarposition(),
		'std' => 'right');
		
		$cpotheme_config[] = array(
		'id' => 'layout_subfooter_columns',
		'name' => __('Number of Footer Columns', 'cpotheme'),
		'desc' => __('Specifies the number of columns to display in the footer of the site. Each column is a customizable widget area.', 'cpotheme'),
		'type' => 'imagelist',
		'option' => cpotheme_metadata_sidebar_columns(),
		'std' => '3');
		
		$cpotheme_config[] = array(
		'id' => 'layout_responsive',
		'name' => __('Enable Responsive Design', 'cpocore'),
		'desc' => __('Toggles the responsive mode of the site for mobile devices.', 'cpocore'),
		'type' => 'yesno',
		'std' => '1');
		
		$cpotheme_config[] = array(
		'id' => 'layout_breadcrumbs',
		'name' => __('Enable Breadcrumbs', 'cpocore'),
		'desc' => __('Enables or disables breadcrumb navigation on all pages. If you are going to use a breadcrumb plugin, disabling this option is recommended.', 'cpocore'),
		'type' => 'yesno',
		'std'  => '1');
		
		$cpotheme_config[] = array(
		'id' => 'layout_languages',
		'name' => __('Enable Language Switcher', 'cpocore'),
		'desc' => __('Enables or disables the language switcher located in the header. Requires the WPML plugin.', 'cpocore'),
		'type' => 'yesno',
		'std'  => '1');
		
		$cpotheme_config[] = array(
		'id' => 'general_credit',
		'name' => __('Enable Credit Link', 'cpocore'),
		'desc' => __('Enables a small, non-obtrusive credit link in the footer. If you decide to activate it, thanks a lot for supporting CPOThemes!', 'cpocore'),
		'type' => 'yesno',
		'std' => '1');
		
		return $cpotheme_config;
	}
}


if(!function_exists('cpotheme_metadata_typography')){
	function cpotheme_metadata_typography($std = null){
		$cpotheme_config = array();
		
		//Typography
		$cpotheme_config[] = array(
		'id' => 'typography',
		'name' => __('Typography', 'cpocore'),
		'type' => 'divider');
		
		$default = isset($std['type_size']) ? $std['type_size'] : '0.875' ;
		$cpotheme_config[] = array(
		'id' => 'type_size',
		'name' => __('Font Size', 'cpocore'),
		'desc' => __('Determines the overall size of the text used throughout the site.', 'cpocore'),
		'type' => 'select',
		'option' => cpotheme_metadata_font_sizes(),
		'std' => '0.875');
		
		$default = isset($std['type_headings']) ? $std['type_headings'] : 'Open+Sans' ;
		$cpotheme_config[] = array(
		'id' => 'type_headings',
		'name' => __('Headings Font', 'cpocore'),
		'desc' => __('Determines the font used in the headings and titles.', 'cpocore'),
		'type' => 'font',
		'option' => cpotheme_metadata_fonts(),
		'std' => $default);
		
		$default = isset($std['type_nav']) ? $std['type_nav'] : 'Open+Sans' ;
		$cpotheme_config[] = array(
		'id' => 'type_nav',
		'name' => __('Navigation Font', 'cpocore'),
		'desc' => __('Determines the font used in the primary navigation menu.', 'cpocore'),
		'type' => 'font',
		'option' => cpotheme_metadata_fonts(),
		'std' => $default);
		
		$default = isset($std['type_body']) ? $std['type_body'] : 'Open+Sans' ;
		$cpotheme_config[] = array(
		'id' => 'type_body',
		'name' => __('Body Font', 'cpocore'),
		'desc' => __('Determines the font used in the body content.', 'cpocore'),
		'type' => 'font',
		'option' => cpotheme_metadata_fonts(),
		'std' => $default);
		
		$cpotheme_config[] = array(
		'id' => 'type_body_variants',
		'name' => __('Load Font Variants', 'cpocore'),
		'desc' => __('Loads additional font variations for the selected body typeface, if available. This will result in better-looking bold/light text, but will also increase load.', 'cpocore'),
		'type' => 'yesno',
		'std' => '1');
		
		return $cpotheme_config;
	}
}

if(!function_exists('cpotheme_metadata_coloring')){
	function cpotheme_metadata_coloring($std = null){
		$cpotheme_config = array();
		
		//Coloring
		$cpotheme_config[] = array(
		'id' => 'coloring',
		'name' => __('Coloring', 'cpocore'),
		'type' => 'divider');
		
		$default = isset($std['primary_color']) ? $std['primary_color'] : '' ;
		$cpotheme_config[] = array(
		'id' => 'primary_color',
		'name' => __('Primary Color', 'cpocore'),
		'desc' => __('Determines the main color scheme of the site. This color will be used in buttons, headings, and other prominent elements.', 'cpocore'),
		'type' => 'color',
		'std' => $default);
		
		$default = isset($std['secondary_color']) ? $std['secondary_color'] : '' ;
		$cpotheme_config[] = array(
		'id' => 'secondary_color',
		'name' => __('Secondary Color', 'cpocore'),
		'desc' => __('Determines the secondary color scheme of the site. This color will be used in minor design elements.', 'cpocore'),
		'type' => 'color',
		'std' => '#333355');
		
		$default = isset($std['type_headings_color']) ? $std['type_headings_color'] : '' ;
		$cpotheme_config[] = array(
		'id' => 'type_headings_color',
		'name' => __('Headings Color', 'cpocore'),
		'desc' => __('Determines the color of headings and titles.', 'cpocore'),
		'type' => 'color',
		'std' => '#444');
		
		$default = isset($std['type_widgets_color']) ? $std['type_widgets_color'] : '' ;
		$cpotheme_config[] = array(
		'id' => 'type_widgets_color',
		'name' => __('Widgets Color', 'cpocore'),
		'desc' => __('Determines the color of widget titles.', 'cpocore'),
		'type' => 'color',
		'std' => '#444');
		
		$default = isset($std['type_nav_color']) ? $std['type_nav_color'] : '' ;
		$cpotheme_config[] = array(
		'id' => 'type_nav_color',
		'name' => __('Navigation Color', 'cpocore'),
		'desc' => __('Determines the color of the primary navigation menu.', 'cpocore'),
		'type' => 'color',
		'std' => '#444');
		
		$default = isset($std['type_body_color']) ? $std['type_body_color'] : '' ;
		$cpotheme_config[] = array(
		'id' => 'type_body_color',
		'name' => __('Body Color', 'cpocore'),
		'desc' => __('Determines the color of the body text.', 'cpocore'),
		'type' => 'color',
		'std' => '#777');
		
		$default = isset($std['type_link_color']) ? $std['type_link_color'] : '' ;
		$cpotheme_config[] = array(
		'id' => 'type_link_color',
		'name' => __('Hyperlink Color', 'cpocore'),
		'desc' => __('Determines the color of hyperlinks.', 'cpocore'),
		'type' => 'color',
		'std' => '#f5663e');
		
		return $cpotheme_config;
	}
}


if(!function_exists('cpotheme_metadata_postappearance')){
	function cpotheme_metadata_postappearance(){
		$cpotheme_config = array();
		
		//Post Appearance
		$cpotheme_config[] = array(
		'id' => 'post_appearance',
		'name' => __('Post Appearance', 'cpocore'),
		'type' => 'divider');
		
		$cpotheme_config[] = array(
		'id' => 'postpage_dates',
		'name' => __('Display Post Dates', 'cpocore'),
		'desc' => __('Toggles display of authors in posts.', 'cpocore'),
		'type' => 'yesno',
		'std' => '1');
		
		$cpotheme_config[] = array(
		'id' => 'postpage_authors',
		'name' => __('Display Post Authors', 'cpocore'),
		'desc' => __('Toggles display of authors in posts.', 'cpocore'),
		'type' => 'yesno',
		'std' => '1');
		
		$cpotheme_config[] = array(
		'id' => 'postpage_comments',
		'name' => __('Display Comment Count', 'cpocore'),
		'desc' => __('Toggles display of comment count in posts.', 'cpocore'),
		'type' => 'yesno',
		'std' => '1');
		
		$cpotheme_config[] = array(
		'id' => 'postpage_categories',
		'name' => __('Display Post Categories', 'cpocore'),
		'desc' => __('Determines whether post categories are displayed or not.', 'cpocore'),
		'type' => 'yesno',
		'std' => '1');
		
		$cpotheme_config[] = array(
		'id' => 'postpage_tags',
		'name' => __('Display Post Tags', 'cpocore'),
		'desc' => __('Determines whether post tags are displayed or not.', 'cpocore'),
		'type' => 'yesno',
		'std' => '1');
		
		$cpotheme_config[] = array(
		'id' => 'postpage_preview',
		'name' => __('Display Full Previews', 'cpocore'),
		'desc' => __('Determines whether post lists display the full content or not.', 'cpocore'),
		'type' => 'yesno',
		'std' => '0');
		
		return $cpotheme_config;
	}
}

if(!function_exists('cpotheme_metadata_social')){
	function cpotheme_metadata_social(){
		$cpotheme_config = array();
		
		//Social Profiles
		$cpotheme_config[] = array(
		'id' => 'social_profiles',
		'name' => __('Social Profiles', 'cpocore'),
		'type' => 'divider');
		
		$cpotheme_config[] = array(
		'id' => 'social_facebook',
		'name' => __('Facebook Page', 'cpocore'),
		'desc' => __('Enter the URL of your Facebook page to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'social_twitter',
		'name' => __('Twitter Page', 'cpocore'),
		'desc' => __('Enter the URL of your Twitter page to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'social_gplus',
		'name' => __('Google Plus Page', 'cpocore'),
		'desc' => __('Enter the URL of your Google Plus page to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'social_youtube',
		'name' => __('YouTube Page', 'cpocore'),
		'desc' => __('Enter the URL of your YouTube profile to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'social_linkedin',
		'name' => __('LinkedIn Page', 'cpocore'),
		'desc' => __('Enter the URL of your LinkedIn page to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'social_pinterest',
		'name' => __('Pinterest Page', 'cpocore'),
		'desc' => __('Enter the URL of your Pinterest page to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'social_foursquare',
		'name' => __('Foursquare Page', 'cpocore'),
		'desc' => __('Enter the URL of your Foursquare page to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'social_tumblr',
		'name' => __('Tumblr Page', 'cpocore'),
		'desc' => __('Enter the URL of your Tumblr page to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'social_flickr',
		'name' => __('Flickr Page', 'cpocore'),
		'desc' => __('Enter the URL of your Flickr page to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'social_instagram',
		'name' => __('Instagram Page', 'cpocore'),
		'desc' => __('Enter the URL of your Instagram page to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'social_dribbble',
		'name' => __('Dribbble Page', 'cpocore'),
		'desc' => __('Enter the URL of your Dribbble page to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		$cpotheme_config[] = array(
		'id' => 'social_skype',
		'name' => __('Skype Page', 'cpocore'),
		'desc' => __('Enter the URL of your Skype page to display a link in the site.', 'cpocore'),
		'type' => 'text');
		
		return $cpotheme_config;
	}
}
