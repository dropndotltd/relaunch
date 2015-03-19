<article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
	<?php if(has_post_thumbnail()): ?>
	<div class="post-image">
		<?php if(!is_singular('post')): ?>
		<a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Go to %s', 'cpotheme'), the_title_attribute('echo=0')); ?>" rel="bookmark">
			<?php the_post_thumbnail('blog'); ?>
		</a>
		<?php else: ?>
		<?php the_post_thumbnail(); ?>
		<?php endif; ?>
	</div>
	<?php endif; ?>
	
	
	<div class="post-body<?php if(has_post_thumbnail()) echo ' post-body-image'; ?>">
		<?php if(!is_singular('post')): ?>
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Go to %s', 'cpotheme'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<?php endif; ?>
		
		<div class="post-byline">
			<?php cpotheme_postpage_date(); ?>
			<?php cpotheme_postpage_author(); ?>
			<?php cpotheme_postpage_categories(); ?>
			<?php if(cpotheme_get_option('postpage_comments') != 0): ?>
			<div class="post-comments">
				<a href="<?php echo get_permalink(get_the_ID()).'#comments'; ?>"><?php echo get_comments_number(); ?></a>
			</div>
			<?php endif; ?>
			<?php cpotheme_edit(); ?>
		</div>
		
		<div class="post-content">
			<?php if(cpotheme_get_option('postpage_preview') == '1' || is_singular('post')) the_content(); else the_excerpt(); ?>
		</div>
		<?php if(is_singular('post')){ cpotheme_postpage_tags(); }else{ echo cpotheme_post_readmore(); }?>
	</div>
	<div class="clear"></div>
</article>