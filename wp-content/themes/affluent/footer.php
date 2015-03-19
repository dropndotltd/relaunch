			<?php $page_footer = cpotheme_layout_footer(); ?>
			<?php if($page_footer != 'none'): ?>
			
			<?php if($page_footer != 'minimal'): ?>
			<?php get_sidebar('footer'); ?>
			<?php endif; ?>
		
			<footer id="footer" class="footer primary-color-bg dark">
				<div class="container">
					<?php if($page_footer != 'minimal'): ?>
					<div id="footermenu" class="footermenu">
						<?php wp_nav_menu(array('menu_class' => 'menu-footer', 'theme_location' => 'footer_menu', 'depth' => '2', 'fallback_cb' => false)); ?>
					</div>
					<?php endif; ?>
					
					<?php cpotheme_footer(); ?>
				</div>
			</footer>
			<?php endif; ?>
			
			<div class="clear"></div>
		</div><!-- wrapper -->
	</div><!-- outer -->
	<?php wp_footer(); ?>
</body>
</html>
