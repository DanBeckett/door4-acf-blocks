jQuery(document).ready(function(){
	if(jQuery('.testimonial-slider .slide').length>=2) { 
		jQuery('.testimonial-slider').flexslider({
			animation: "slide",
			animationLoop: false,
			animationSpeed: 600,
			 directionNav: false
		});
	} else if(jQuery('.testimonial-slider .slide').length>0) {
		jQuery('.testimonial-slider').removeClass('flexslider').addClass('inactive');
	};
});