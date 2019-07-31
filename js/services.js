$(function() {
	var scroll = new SmoothScroll('#navbar-example3 a',{
		speed:1000,
		easing: 'easeInQuad'
	});
	var spy = new Gumshoe('#navbar-example3 a');
	var startHeight = $('.header').height() + $('.page-intro').height() +120;
	$(window).scroll(function(event) {
		var width = $(this).innerWidth();
		var mobileDisplay = 768;

		console.log(startHeight);
		if (width > mobileDisplay) {
			var  currentScroll =  window.scrollY;
			console.log(currentScroll);
			if (currentScroll > startHeight) {
				$('#navbar-example3 >.nav').addClass('fixed-nav');
			}
			else{
				$('#navbar-example3 >.nav').removeClass('fixed-nav');
			}
		}
	});
});