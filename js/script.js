var base_url = $('#baseurl').val();

// remap jQuery to $
(function($) {

})(this.jQuery);

// usage: log('inside coolFunc',this,arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function() {
	log.history = log.history || [];
	// store logs to an array for reference
	log.history.push(arguments);
	if (this.console) {
		console.log(Array.prototype.slice.call(arguments));
	}
};

function pageLoader(id) {
	$('.mainbody').fadeOut(401);

	$('#page' + id).delay(400).slideDown();

}

function sunglow() {

	$('.sunglow').fadeOut(5000);
	$('.sunglow').fadeIn(5000);
	$('.sunglow').fadeOut(5000);
	$('.sunglow').fadeIn(5000);
	
}


$(document).ready(function() {

	sunglow();

	// Declare parallax on layers
	$('.parallax-layer').parallax({
		mouseport : jQuery("#spaceport"),

	});

	// Declare parallax on layers
	$('.parallax-thumbs').parallax({
		mouseport : jQuery("#port"),
		yparallax : false
	});

	//planet hover target
	$('.planet').hover(function() {
sunglow();
		$(this).children('.target').stop().animate({opacity:1});
		$(this).children('.target_text').stop().animate({opacity:1});

	}, function() {
		$(this).children('.target').stop().animate({opacity:0.3});
		$(this).children('.target_text').stop().animate({opacity:0.3});
	});

});
