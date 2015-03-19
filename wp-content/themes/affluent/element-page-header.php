<?php wp_reset_query(); ?>
<?php $page_title = cpotheme_layout_title(); ?>

<?php if($page_title != 'none'): ?>
<?php if(!is_home() && !is_front_page()){ ?>
<section id="pagetitle" class="pagetitle dark primary-color-bg">
	<div class="container">
		<h1 class="pagetitle-title"><?php cpotheme_page_title(); ?></h1>
		<?php if($page_title != 'minimal') cpotheme_breadcrumb(); ?>
	</div>
</section>

<?php if($page_title != 'minimal' && get_header_image() != ''): ?>
<?php $url = get_header_image(); ?>
<div id="banner" class="banner">
	<img class="banner-image" src="<?php echo $url; ?>">
</div>
<?php endif; ?>

<?php } ?>
<?php endif; ?>