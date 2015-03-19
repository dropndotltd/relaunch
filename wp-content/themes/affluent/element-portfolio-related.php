<?php
/*
  This template is used to display related portfolio items.
 */
?>

<?php $term_list = get_the_terms(get_the_ID(), 'cpo_portfolio_category');
if(is_array($term_list) && cpotheme_get_option('portfolio_related') == 1):
$terms = array();
foreach($term_list as $current_term)
	$terms[] = $current_term->term_id;
$args = array(
'post_type' => 'cpo_portfolio',
'order' => 'ASC',
'orderby' => 'menu_order',
'posts_per_page' => 3,
'post__not_in' => array(get_the_ID()),
'tax_query' => array(array('taxonomy' => 'cpo_portfolio_category', 'field' => 'id', 'terms' => $terms))); ?>
<?php $feature_posts = new WP_Query($args); ?>
<?php if($feature_posts->have_posts()): $feature_count = 0; ?>
<div id="portfolio" class="portfolio">
	<h2><?php _e('Related Projects', 'cpotheme'); ?></h2>
	<?php while($feature_posts->have_posts()): $feature_posts->the_post(); ?>
	<?php $feature_count++; ?>
	<div class="portfolio-column portfolio-column-3">
		<?php get_template_part('element', 'portfolio'); ?>
	</div>
	<?php endwhile; ?>
	<div class='clear'></div>
</div>
<?php endif; ?>
<?php endif; ?>