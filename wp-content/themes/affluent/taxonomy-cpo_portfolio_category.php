<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>
	
<div id="main" class="main">
	<div class="container">
		<section class="content content-wide">
			<?php echo tag_description(); ?>

			<?php get_template_part('element', 'portfolio-navigation'); ?>
				
			<?php $columns = cpotheme_get_option('portfolio_columns'); ?>
			<?php if(have_posts()): $feature_count = 0; ?>
			<div id="portfolio" class="portfolio">
				<?php while(have_posts()): the_post(); ?>
				<?php if($feature_count % $columns == 0 && $feature_count != 0) echo '<div class="col-divide"></div>'; ?>
				<?php $feature_count++; ?>
				<div class="portfolio-column portfolio-column-<?php echo $columns; ?>">
					<?php get_template_part('element', 'portfolio'); ?>
				</div>
				<?php endwhile; ?>
				<div class='clear'></div>
			</div>
			<?php endif; ?>
			<?php cpotheme_numbered_pagination(); ?>
		</section>
	</div>
</div>

<?php get_footer(); ?>