<?php /* Template Name: Portfolio */ ?>
<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
		<section id="content" class="content">
			<?php if(have_posts()) while(have_posts()): the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="page-content">
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => '<div class="page-link">', 'after' => '</div>')); ?>
				</div>
			</div>
			<?php endwhile; ?>
			
			<?php get_template_part('element', 'portfolio-navigation'); ?>

			<?php if(get_query_var('paged')) $current_page = get_query_var('paged'); else $current_page = 1; ?>	
			<?php $columns = cpotheme_get_option('portfolio_columns'); ?>
			<?php $post_number = $columns * 3; ?>
			
			<?php $query = new WP_Query('post_type=cpo_portfolio&paged='.$current_page.'&posts_per_page='.$post_number.'&order=ASC&orderby=menu_order'); ?>
			<?php if($query->posts): $feature_count = 0; ?>
			<section id="portfolio" class="portfolio">
				<?php foreach($query->posts as $post): setup_postdata($post); ?>
				<?php if($feature_count % $columns == 0 && $feature_count != 0) echo '<div class="col-divide"></div>'; ?>
				<?php $feature_count++; ?>
				<div class="portfolio-column portfolio-column-<?php echo $columns; ?>">
					<?php get_template_part('element', 'portfolio'); ?>
				</div>
				<?php endforeach; ?>
				<div class='clear'></div>
			</section>
			<?php cpotheme_numbered_pagination(); ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			
			<?php comments_template('', true); ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>