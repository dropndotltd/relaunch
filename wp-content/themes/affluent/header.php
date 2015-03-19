<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />    
    <link rel="profile" href="http://gmpg.org/xfn/11" />    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="outer" id="top">
		<div class="wrapper">
			<?php $page_header = cpotheme_layout_header(); ?>
			<?php if($page_header != 'none'): ?>
			
			<?php if($page_header != 'minimal'): ?>
			<div id="topbar" class="topbar dark">
				<div class="container">
					<div id="topmenu" class="topmenu">
						<?php wp_nav_menu(array('menu_class' => 'menu-top', 'theme_location' => 'top_menu', 'depth' => 1, 'fallback_cb' => null)); ?>
					</div>
					
					<?php cpotheme_languages(); ?>
					<?php cpotheme_social(); ?>
					<div class="clear"></div>
				</div>
			</div>
			<?php endif; ?>
			
			<header id="header" class="header secondary-color-bg">
				<div class="container">
					<?php cpotheme_logo(175, 50); ?>
					
					<?php if($page_header != 'minimal'): ?>
					<?php cpotheme_block('header_text', 'header-content'); ?>
					<?php cpotheme_menu(); ?>
					<?php cpotheme_mobile_menu(); ?>
					<?php endif; ?>
					<div class='clear'></div>
				</div>
			</header>
			<?php endif; ?>
			
			<?php if(cpotheme_get_option('slider_always') == 1 || is_home() || is_front_page()){ ?>
			<?php $slider_posts = new WP_Query('post_type=cpo_slide&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
			<?php if($slider_posts->post_count > 0): $slide_count = 0; ?>
			<div id="slider" class="slider secondary-color-bg">
				<ul class="slider-slides"<?php cpotheme_slider_data();?>>
					<?php while($slider_posts->have_posts()): $slider_posts->the_post(); ?>
					<?php $slide_count++; ?>
					<?php $slide_position = get_post_meta(get_the_ID(), 'slide_position', true); ?>
					<li id="slide_<?php echo $slide_count; ?>" class="slide slide-<?php echo $slide_position; ?>">
						<div class="container">
							<div class="slide-content">
								<?php the_content(); ?>
								<?php cpotheme_edit(); ?>
							</div>
							<div class="slide-image"><?php the_post_thumbnail(); ?></div>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php if($slider_posts->post_count > 1): ?>
				<div class='slider-prev'></div>
				<div class='slider-next'></div>
				<?php endif; ?>
			</div> 			
			<?php endif; ?>			
			<?php } ?>
			
				
			<?php if(is_home() || is_front_page()){ ?>
			
			<?php if(cpotheme_get_option('home_tagline') != ''): ?>
			<div id="tagline" class="tagline primary-color-bg dark">
				<div class="container">
					<?php cpotheme_block('home_tagline', 'tagline-content'); ?>
				</div>
			</div>
			<?php endif; ?>			
			
			<?php $feature_posts = new WP_Query('post_type=cpo_feature&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
			<?php if($feature_posts->post_count > 0): $feature_count = 0; ?>
			<div id="minifeatures" class="minifeatures content-section">
				<div class="container">
					<div class="column col3">
						<?php cpotheme_block('home_features', 'minifeatures-heading'); ?>
					</div>
					<div class="column col3x2 col-last">
						<div class="minifeatures-content">
							<?php $columns = cpotheme_get_option('layout_minifeatures_columns'); if($columns == 0) $columns = 3; ?>
							<?php while($feature_posts->have_posts()): $feature_posts->the_post(); ?>
							<?php if($feature_count % $columns == 0 && $feature_count != 0) echo '<div class="col-divide"></div>'; $feature_count++; ?>
							<div class="feature column col<?php echo $columns; ?> feature-<?php echo cpotheme_get_option('layout_minifeatures'); if($feature_count % $columns == 0) echo ' feature_right col-last'; ?>">
								<?php $icon = get_post_meta(get_the_ID(), 'feature_icon', true); ?>
								<?php if($icon == '0' || $icon == ''): ?>
								<?php the_post_thumbnail(array(150,150)); ?>
								<?php else: ?>
								<div class="feature-icon primary-color"><?php echo $icon; ?></div>
								<?php endif; ?>
								<h3 class="feature-title"><?php the_title(); ?></h3>
								<div class="feature-content"><?php the_content(); ?><?php cpotheme_edit(); ?></div>
							</div>
							<?php endwhile; ?>
						</div>
					</div>
					<div class='clear'></div>
				</div>
			</div>
			<?php endif; ?>
		
		
			<?php $feature_posts = new WP_Query('post_type=cpo_portfolio&order=ASC&orderby=menu_order&meta_key=portfolio_featured&meta_value=1&numberposts=-1&posts_per_page=-1'); ?>
			<?php if($feature_posts->have_posts()): $feature_count = 0; ?>
			<div id="portfolio" class="portfolio secondary-color-bg">
				<div class="container">
					<?php cpotheme_block('home_portfolio', 'portfolio-heading'); ?>
					<div class="portfolio-contents">
						<?php $columns = cpotheme_get_option('layout_portfolio_columns'); if($columns == 0) $columns = 3; ?>
						<?php while($feature_posts->have_posts()): $feature_posts->the_post(); ?>
						<?php $feature_count++; ?>
						<div class="portfolio-column portfolio-column-<?php echo $columns; ?>">
							<?php get_template_part('element', 'portfolio'); ?>
						</div>
						<?php endwhile; ?>
						<div class='clear'></div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			
			
			<?php $feature_posts = new WP_Query('post_type=cpo_testimonial&posts_per_page=-1&order=ASC&orderby=menu_order'); ?>
			<?php if($feature_posts->post_count > 0): $feature_count = 0; ?>
			<div id="testimonials" class="testimonials content-section">
				<div class="container">			
					<?php cpotheme_block('home_testimonials', 'testimonials-heading'); ?>
					<ul class="testimonial-list">
						<?php $testimonial_images = ''; ?>
						<?php $count = 0; ?>
						<?php while($feature_posts->have_posts()): $feature_posts->the_post(); ?>
						<?php ob_start(); ?>
						<div class="testimonial-page" id="testimonial-<?php echo $count; ?>" data-slide="<?php echo $count; ?>">
							<?php the_post_thumbnail(array(150,150)); ?>
						</div>
						<?php $testimonial_images .= ob_get_clean(); ?>
						<li class="testimonial" id="testimonial-<?php echo $count; ?>-content" data-slide="<?php echo $count; ?>">
							<div class="testimonial-author">
								<h2 class="testimonial-name"><?php the_title(); ?></h2>
								<div class="testimonial-position"><?php echo get_post_meta(get_the_ID(), 'testimonial_position', true); ?></div>
							</div>
							<div class="testimonial-content">
								<?php the_content(); ?>
								<?php cpotheme_edit(); ?>
							</div>
						</li>
						<?php $count++; ?>
						<?php endwhile; ?>
					</ul>
					<div class="testimonial-pages">
						<?php echo $testimonial_images; ?>
					</div>					
					<div class='clear'></div>
				</div>
			</div>
			<?php endif; ?>
			
			<div class="clear"></div>
			<?php } ?>