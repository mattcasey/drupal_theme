// When DOM is fully loaded
jQuery(document).ready(function($) {


	/* ---------------------------------------------------------------------- */
	/*	Colorbox
	/* ---------------------------------------------------------------------- */

		$('.colorbox').colorbox({
			overlayClose: true,
			opacity: 0.5,
			maxHeight: 560,
			maxWidth: 560,
			width:'100%'
		});

	/* ---------------------------------------------------------------------- */
	/*	Carousel
	/* ---------------------------------------------------------------------- */

		$('.products-carousel').elastislide({

			speed       : 450,	// animation speed
			easing      : 'jswing',	// animation easing effect
			imageW		: 180, 	// the images width
			minItems	: 2,
			border		: 1,
		});

		$('.banner-carousel').elastislide({

			speed       : 450,
			easing      : 'jswing',
			imageW		: 299,
			minItems	: 1,
			border		: 1,

		});

		//Fix to adjust on windows resize
		$(window).triggerHandler('resize.elastislide');

	/* ---------------------------------------------------------------------- */
	/*	Category Accordion
	/* ---------------------------------------------------------------------- */


		$(document).ready(function() {
			$('#cat_accordion').dcAccordion({
				classExpand : 'cid59',
				menuClose: false,
				autoClose: true,
				saveState: false,
				disableLink: false,		
				autoExpand: true
			});
		});


	/* ---------------------------------------------------------------------- */
	/*	Forms Validation
	/* ---------------------------------------------------------------------- */

		jQuery.validator.setDefaults({
			errorClass: "error",  
			validClass: "success",  
			errorElement: "span",  
			highlight: function(element, errorClass, validClass) {	
				if (element.type === 'radio') { 
					this.findByName(element.name).parent("div").parent("div").removeClass(validClass).addClass(errorClass);	
				} else { $(element).parent("div").parent("div").removeClass(validClass).addClass(errorClass);	}  
			},  
			unhighlight: function(element, errorClass, validClass) { 
				if (element.type === 'radio') { this.findByName(element.name).parent("div").parent("div").removeClass(errorClass).addClass(validClass);	
				} else { $(element).parent("div").parent("div").removeClass(errorClass).addClass(validClass);	}  
			},
			errorPlacement: function(error, element) {
				error.insertAfter(element);
			}
		});

		$("#checkout-login-form").validate();
		$("#checkout-billing-form").validate();
		$("#checkout-shipping-form").validate();

		$("#contact-form").validate();

	/* end Forms Validation */

});
	
	/* ---------------------------------------------------------------------- */
	/*	Flexslider - responsive slider
	/* ---------------------------------------------------------------------- */

	$(window).load(function() {
	    $('.flexslider').flexslider({

	    	animation: "fade",            //String: Select your animation type, "fade" or "slide"
			slideDirection: "horizontal", //String: Select the sliding direction, "horizontal" or "vertical"
			slideshow: true,              //Boolean: Animate slider automatically
			slideshowSpeed: 7000,         //Integer: Set the speed of the slideshow cycling, in milliseconds
			animationDuration: 600,       //Integer: Set the speed of animations, in milliseconds
			directionNav: true,           //Boolean: Create navigation for previous/next navigation? (true/false)
			controlNav: true,             //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
			keyboardNav: true,            //Boolean: Allow slider navigating via keyboard left/right keys
			mousewheel: false,            //Boolean: Allow slider navigating via mousewheel
			prevText: "Previous",         //String: Set the text for the "previous" directionNav item
			nextText: "Next",             //String: Set the text for the "next" directionNav item
			pausePlay: false,             //Boolean: Create pause/play dynamic element
			pauseText: 'Pause',           //String: Set the text for the "pause" pausePlay item
			playText: 'Play',             //String: Set the text for the "play" pausePlay item
			randomize: false,             //Boolean: Randomize slide order
			slideToStart: 0,              //Integer: The slide that the slider should start on. Array notation (0 = first slide)
			animationLoop: true,          //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
			pauseOnAction: true,          //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
			pauseOnHover: false,          //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
			controlsContainer: "",        //Selector: Declare which container the navigation elements should be appended too. Default container is the flexSlider element. Example use would be ".flexslider-container", "#container", etc. If the given element is not found, the default action will be taken.
			manualControls: "",           //Selector: Declare custom control navigation. Example would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
			start: function(){},          //Callback: function(slider) - Fires when the slider loads the first slide
			before: function(){},         //Callback: function(slider) - Fires asynchronously with each slider animation
			after: function(){},          //Callback: function(slider) - Fires after each slider animation completes
			end: function(){}             //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)

	    });

	  });
	
	/* end Flexslider */


	/* ---------------------------------------------------------------------- */
	/*	Elastislide - responsive carousel
	/* ---------------------------------------------------------------------- */

		$('#carousel').elastislide({
			speed       : 450,	// animation speed
			easing      : '',	// animation easing effect
			imageW      : 290,	// the images width
			margin      : 3,	// image margin right
			border      : 2,	// image border 
			minItems    : 1,	// the minimum number of items to show. When we resize the window, this will make sure minItems are always shown (unless of course minItems is higher than the total number of elements)
			current     : 0,	// index of the current item when we resize the window, the plugin will make sure that this item is visible 
			onClick     : function() { return false; }	// click item callback
		});

		$(window).triggerHandler('resize.elastislide'); // Fix to adjust when screen is resized

	/* end Elastislide */

	/* ---------------------------------------------------------------------- */
	/*	Opacity animation on hover
	/* ---------------------------------------------------------------------- */

		if ($.browser.msie && ($.browser.version == 8 || $.browser.version == 7 || $.browser.version == 6)) {

		} else {
		 
			$(".box-product > div").hover(function() {
				$(this).siblings().stop().animate({ opacity: .85 }, 300)}, function () {
					$(this).siblings().stop().animate({ opacity: 1 }, 300)}
			);

			$(".product-grid > div").hover(function() { 
				$(this).siblings().stop().animate({ opacity: .85 }, 500)}, function () {
					$(this).siblings().stop().animate({ opacity: 1 }, 300) }
			);

			$(".es-carousel > ul > li").hover(function() { 
				$(this).siblings().stop().animate({ opacity: .85 }, 500)}, function () {
					$(this).siblings().stop().animate({ opacity: 1 }, 300) }
			);

			$(".image-additional > a").hover(function() { 
				$(this).siblings().stop().animate({ opacity: .85 }, 500)}, function () {
					$(this).siblings().stop().animate({ opacity: 1 }, 300) }
			);

			$("#toggle_sidebar").hover(function() {
				$(".sidebar").stop().animate({ opacity: .55 }, 300)}, function () {
					$(".sidebar").stop().animate({ opacity: 1 }, 300)}
			);
		}

	/* ---------------------------------------------------------------------- */
	/*	Language/Currency dropdowns
	/* ---------------------------------------------------------------------- */

		$('.dropd').click(function() {

			$(this).find('.options').slideDown('fast');
			$(this).addClass('active');

			$(this).bind('mouseleave', function() {
				$(this).find('.options').slideUp('fast');
				$(this).removeClass('active');
			});

		});

	/* ---------------------------------------------------------------------- */
	/*	Footer menu
	/* ---------------------------------------------------------------------- */

		$(".column .header").click(function () {

			$screensize = $(window).width();

			if ($screensize < 767) {
				$(this).toggleClass("active");  
				$(this).parent().find(".content").slideToggle('medium');
			}

		});

	/* ---------------------------------------------------------------------- */
	/*	Scroll to top
	/* ---------------------------------------------------------------------- */
	
		$().UItoTop({ 
			easingType: 'easeOutQuart',
			scrollSpeed: 1200
		});


	/* ---------------------------------------------------------------------- */
	/*	Toggle sidebar
	/* ---------------------------------------------------------------------- */
		
		$("#toggle_sidebar").click(function () {

			$(this).toggleClass("collapse");

			$("#column-left").toggleClass("close");

			$("#maincontent").toggleClass('span9 span12');

		});

	/* ---------------------------------------------------------------------- */
	/*	Add to Cart
	/* ---------------------------------------------------------------------- */


	$('#button-cart').bind('click', function() {

		$('#notification').html('<div class="alert alert-success fade in"><b>Success:</b>You have added Samsung Galaxy Tab to your <a href="cart.html">shopping cart!</a> <a class="close" data-dismiss="alert" href="#">&times;</a></div>');
			
		$('.alert-success').fadeIn('slow');
		
		$('html, body').animate({ scrollTop: 0 }, 'slow'); 

	});


	/* ---------------------------------------------------------------------- */
	/*	Mini cart
	/* ---------------------------------------------------------------------- */

	$('#minicart > .heading a').live('click', function() {
		$('#minicart').addClass('active');
		$('#minicart > .content').fadeIn('slow');
		
		$('#minicart').live('mouseleave', function() {
			$('#minicart > .content').fadeOut('slow');
			$(this).removeClass('active');
		});
	});

	/* end Mini Cart */

		/* ---------------------------------------------------------------------- */
		/*	jquery.cookie.js Apache mod_security blocks the file in some servers.
		/* ---------------------------------------------------------------------- */


			/**
			 * jQuery Cookie plugin
			 *
			 * Copyright (c) 2010 Klaus Hartl (stilbuero.de)
			 * Dual licensed under the MIT and GPL licenses:
			 * http://www.opensource.org/licenses/mit-license.php
			 * http://www.gnu.org/licenses/gpl.html
			 *
			 */

			/**
			 *
			 * @name $.cookie
			 * @cat Plugins/Cookie
			 * @author Klaus Hartl/klaus.hartl@stilbuero.de
			 */
			jQuery.cookie = function (key, value, options) {

			    // key and value given, set cookie...
			    if (arguments.length > 1 && (value === null || typeof value !== "object")) {
			        options = jQuery.extend({}, options);

			        if (value === null) {
			            options.expires = -1;
			        }

			        if (typeof options.expires === 'number') {
			            var days = options.expires, t = options.expires = new Date();
			            t.setDate(t.getDate() + days);
			        }

			        return (document.cookie = [
			            encodeURIComponent(key), '=',
			            options.raw ? String(value) : encodeURIComponent(String(value)),
			            options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
			            options.path ? '; path=' + options.path : '',
			            options.domain ? '; domain=' + options.domain : '',
			            options.secure ? '; secure' : ''
			        ].join(''));
			    }

			    // key and possibly options given, get cookie...
			    options = value || {};
			    var result, decode = options.raw ? function (s) { return s; } : decodeURIComponent;
			    return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
			};


	/* ---------------------------------------------------------------------- */
	/*	Category Grid/List view
	/* ---------------------------------------------------------------------- */

		function display(view) {

			if (view == 'list') {

				$('#list').addClass('active');

				$('.product-grid').attr('class', 'product-list');
				
				$('.product-list > div').each(function(index, element) {

					$(this).removeClass('alpha alpha3 alpha4 odd grid-box');

					$(this).addClass('product-row');

					var special = $(element).find('.onsale').html();
					
					if (special != null) {
						html = '<span class="onsale">' + special  + '</span>';
						html += '<div class="row-fluid">';
					} else {
						html = '<div class="row-fluid">';
					}

					
				
					var image = $(element).find('.image').html();

					if (image != null) { 
						html += '<div class="image span3">' + image + '</div>';
					} else {
						html += '<div class="image span3">&nbsp;</div>';
					}
										
					html += '<div class="name-desc span4">';

					html += '<div class="name">' + $(element).find('.name').html() + '</div>';
					var rating = $(element).find('.rating').html();
					
					if (rating != null) {
						html += '<div class="rating">' + rating + '</div>';
					}
					html += '<div class="description">' + $(element).find('.description').html() + '</div>';

					html += '</div>';
					
					var price = $(element).find('.price').html();
					
					if (price != null) {
						html += '<div class="price span2">' + price  + '</div>';
					} else {
						html += '<div class="price span2">&nbsp;</div>';
					}

					html += '<div class="actions span3">';
					html += '  <div class="cart">' + $(element).find('.cart').html() + '</div>';
					
					var wishlist = $(element).find('.wishlist').html();
					if (wishlist != null) {
						html += '  <div class="wishlist">' + wishlist + '</div>';
					}

					var compare = $(element).find('.compare').html();
					if (compare != null) {
						html += '  <div class="compare">' + compare + '</div>';
					}

					html += '</div>';

					html += '</div>';

					$(element).html(html);
				});
				
				$.cookie('display', 'list'); 

			} else {

				$('#grid').addClass('active');
				
				$('.product-list').attr('class', 'product-grid row');
				
				$('.product-grid > div').each(function(index, element) {

					$(this).removeClass('row-fluid');
					
					$(this).addClass('grid-box');

					if (index == 0 ) {	$(this).addClass('alpha');	}
					else if ((index+3) % 3 == 0 ) {	$(this).addClass('alpha3');	}
					else if ((index+4) % 4 == 0 ) {	$(this).addClass('alpha4');	}

					if ((index+2) % 2 == 0 ) { $(this).addClass('odd');	}

					html = '';
					
					var image = $(element).find('.image').html();

					html += '<div class="inner">';

					var special = $(element).find('.onsale').html();
					
					if (special != null) {
						html += '<span class="onsale">' + special  + '</span>';
					}
					
					if (image != null) {
						html += '<div class="image">' + image + '</div>';
					}
					
					html += '<div class="name">' + $(element).find('.name').html() + '</div>';

					var rating = $(element).find('.rating').html();
					
					if (rating != null) {
						html += '<div class="rating">' + rating + '</div>';
					}

					html += '<div class="description">' + $(element).find('.description').html() + '</div>';
					
					var price = $(element).find('.price').html();
					
					if (price != null) {
						html += '<div class="price">' + price  + '</div>';
					}
								
					html += '<div class="cart">' + $(element).find('.cart').html() + '</div>';
					
					var wishlist = $(element).find('.wishlist').html();
					if (wishlist != null) {
						html += '  <div class="wishlist">' + wishlist + '</div>';
					}

					var compare = $(element).find('.compare').html();
					if (compare != null) {
						html += '  <div class="compare">' + compare + '</div>';
					}

					html += '</div>';
					
					$(element).html(html);

				});
										
				$.cookie('display', 'grid');

			}

		}

		view = $.cookie('display');

		if (view) {	display(view);	} 
		else { display('grid'); }

	/* end Category Grid/List view */

