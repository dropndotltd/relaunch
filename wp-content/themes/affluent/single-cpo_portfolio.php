<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
		<section id="content" class="content">
			<?php if(have_posts()) while(have_posts()): the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="column col2">
					<div class="portfolio-media">
						<?php cpotheme_post_media(get_the_ID(), get_post_meta(get_the_ID(), 'portfolio_layout', true), get_post_meta(get_the_ID(), 'portfolio_video', true)); ?>
					</div>
				</div>
				
				<div class="column col2 col-last">
					<div class="portfolio-details secondary-color-bg">
						<div class="portfolio-date">
							<span class="details-icon icon-time"></span>
							<?php the_date(); ?>
						</div>
						<div class="portfolio-categories">
							<span class="details-icon icon-folder-open"></span>
							<?php echo get_the_term_list(get_the_ID(), 'cpo_portfolio_category', '', ', ', ''); ?>
						</div>
						<?php if(has_excerpt()): ?>
						<div class="portfolio-excerpt">
							<span class="details-icon icon-copy"></span>
							<?php the_excerpt(); ?>
						</div>
						<?php endif; ?>
						<?php cpotheme_edit(); ?>				
					</div>
					<div class="portfolio-content">
						<?php the_content(); ?>
					</div>
					<?php wp_link_pages(array('before' => '<div id="postpagination">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
				</div>
				<div class="clear"></div>
			</div>
			<?php endwhile; ?>
			
			<?php get_template_part('element', 'portfolio-related'); ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>