(function ($) {
	'use strict';

	jQuery(document).ready(function () {

		/*=== For Slider ===*/
		$('.slider-area').owlCarousel({
			items: 1,
			nav: false,
			dots: true,
			loop: true,
			autoplay: false,
			animateIn: 'fadeIn',
  			animateOut: 'fadeOut'
		});

		/*=== For clickable table row ===*/
		$(".clickable-row").click(function()
		 {
		   window.location = $(this).data("href");
		 });

		/*=== For clickable div ===*/
		$(".clickable-div").click(function()
		 {
		   window.location = $(this).data("href");
		 });

		/*=== Confirmation of delete ===*/
		$('.delete').on("click", function (e) {
		    e.preventDefault();

		    var choice = confirm($(this).attr('data-confirm'));

		    if (choice) {
		        window.location.href = $(this).attr('href');
		    }
		});

		/*=== Confirmation Alert ===*/
		$('.confirm-alert').on("click", function (e) {
		    e.preventDefault();

		    var choice = confirm($(this).attr('data-confirm'));

		    if (choice) {
		        window.location.href = $(this).attr('href');
		    }
		});

		
	});


})(jQuery);