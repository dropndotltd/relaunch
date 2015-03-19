<section id="subfooter" class="subfooter secondary-color-bg">
	<div class="container">
		<?php $footer_columns = cpotheme_get_option('layout_subfooter_columns');
		if($footer_columns == '') $footer_columns = 3;
		for($count = 1; $count <= $footer_columns; $count++): ?>
		<?php if(is_active_sidebar('footer-widgets-'.$count)): ?>
		<div class="column col<?php echo $footer_columns; ?><?php if($count == $footer_columns) echo ' col-last'; ?>">
			<?php dynamic_sidebar('footer-widgets-'.$count); ?>
		</div>
		<?php endif; ?>
		<?php endfor; ?>
	</div>
</section>