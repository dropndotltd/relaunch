//SLIDESHOW
jQuery(document).ready(function(){
	
	//HOMEPAGE SLIDES
	jQuery('.slider-slides').cycle({
		speed: jQuery('.slider-slides').data("speed"),
		timeout: jQuery('.slider-slides').data("timeout"),
		fx: 'fade',
		next: '.slider-next', 
		prev: '.slider-prev',
		pause: true,
		pauseOnPagerHover: true,
		containerResize: false,
		before: slide_resize,
		after: slide_resize,
		slideResize: false,
		fit: 1
	});

	jQuery('.slider-prev, .slider-next, .slider-pages a').click(function(){
		jQuery('.slider-slides').cycle('pause');
	});

	
	//HOMEPAGE TESTIMONIALS
	jQuery('.testimonial-list').cycle({
		speed: 1000,
		timeout: 6000,
		fx: 'fade',
		pause: true,
		pauseOnPagerHover: true,
		containerResize: false,
		slideResize: false,
		after: slide_resize,
		before: function(curr, next, opts, fwd){
			slide_resize(curr, next, opts, fwd);
			jQuery('.testimonial-page').removeClass('testimonial-page-active');
			element_id = jQuery(next).data('slide');
			jQuery('.testimonial-page[data-slide=' + element_id + ']').addClass('testimonial-page-active');
		},
		fit: 1
	});
	//Clicking on testimonial pagers
	jQuery('.testimonial-page').click(function(e){
		var slide_number = jQuery(this).data('slide');
		jQuery('.testimonial-page').removeClass('testimonial-page-active');
		jQuery(this).addClass('testimonial-page-active');
		jQuery('.testimonial-list').cycle(slide_number);
	});
	
});

function slide_resize(curr, next, opts, fwd) {
	var ht = jQuery(this).height();
	jQuery(this).parent().animate({height: ht});
}