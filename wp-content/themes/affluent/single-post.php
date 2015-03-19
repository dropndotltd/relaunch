<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>

<div id="main" class="main">
	<div class="container">
		<section id="content" class="content">
			<?php if(have_posts()) while(have_posts()): the_post(); ?>
			<?php get_template_part('element', 'blog'); ?>
			<?php get_template_part('element', 'author'); ?>
			<?php comments_template('', true); ?>
			<?php endwhile; ?>
		</section>
		<?php get_sidebar(); ?>
		<div class="clear"></div>
	</div>
</div>

<?php get_footer(); ?>