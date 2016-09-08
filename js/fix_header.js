$(document).ready(function(){
	
	setupHeader();

	$( window ).resize(function(){
		setupHeader();
	});

	// Click function to scroll down the page
	$('#header_down_arrow').click(function(e){
		e.preventDefault();
		$('html body').animate({
			scrollTop: $('.projects').offset().top
		}, 1000);
	});
	$('.top_nav li a[href="#projects"]').click(function(e){
		e.preventDefault();
		$('html body').animate({
			scrollTop: $('.projects').offset().top
		}, 1000);
	});
	$('.top_nav li a[href="#top"]').click(function(e){
		e.preventDefault();
		$('html body').animate({
			scrollTop: $('.upperHead').offset().top
		}, 1000);
	});
	$('.top_nav li a[href="#contact"]').click(function(e){
		e.preventDefault();
		$('html body').animate({
			scrollTop: $('.contact_me').offset().top
		}, 1000);
	});

	setTimeout(function() { $(".form_results").slideUp(); }, 2000);


});

function setupHeader(){
	console.log("in header");
	var originalWindowHeight = $(window).height();
	var brandHeight = $('.upperHead').outerHeight();
	var heroHeight = $('#hero').outerHeight();
	var downArrowWidth = parseInt($('.fa-arrow-circle-down').css('font-size'));
	// Set height of top to fill page
	$('#img_space').css('height', originalWindowHeight);

	//Center arrow on page horizontally
	// $('#header_down_arrow').css({
	// 	'position': 'absolute',
	// 	'left' : (($('header .container').width()/2)-(downArrowWidth/2)), 
	// 	'bottom' : '30px'
	// });

	// Center hero on page vertially
	$('#hero').css({
		'padding-top' : ((originalWindowHeight/2)-85+brandHeight),
		'padding-bottom' : ((originalWindowHeight/2)-120+brandHeight),
	});

	if ( ((brandHeight + heroHeight) < 375)  && ($(window).outerWidth() < 500) ){
		$('#header_down_arrow').hide();
	} else { $('#header_down_arrow').show(); }
}