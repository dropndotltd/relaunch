<?php if(!isset($content_width)) $content_width = 640;

//Load Core; check existing core or load development core
$core_path = get_template_directory().'/core/';
if(defined('CPO_CORE')) $core_path = CPO_CORE;
require_once $core_path.'init.php';

$include_path = get_template_directory().'/includes/';

//Main components
require_once($include_path.'setup.php');
require_once($include_path.'metaboxes.php');

//Metadata & variables
require_once($include_path.'metadata/data_general.php');
require_once($include_path.'metadata/data_metaboxes.php');
require_once($include_path.'metadata/data_settings.php');

//Layout & Display components
require_once($include_path.'layout/layout_general.php');
require_once($include_path.'layout/layout_custom.php');
require_once($include_path.'layout/layout_post.php');
require_once($include_path.'layout/layout_comments.php');

//Custom posts
require_once($include_path.'cposts/cpost_slider.php');
require_once($include_path.'cposts/cpost_features.php');
require_once($include_path.'cposts/cpost_portfolio.php');
require_once($include_path.'cposts/cpost_testimonials.php');

//Custom taxonomies
require_once($include_path.'taxonomies/tax_portfolio.php');