(function(lemonJuice,undefined) {

	// Adding event listeners without using JQuery
	function addEvent(element,evnt,funct) {
		if (element.attachEvent) {
			return element.attachEvent('on'+evnt, funct);
		}
			else {
				return element.addEventListener(evnt, funct, false);
			}
	}

	lemonJuice.initialize = function() {
		// This is where I put all document.ready scripts
		addEvent(window, 'load', function() {

			// Listen for mouseover event when mousing over a tile on the homepage
			// Trigger the span, and on mouseout hide it again.
			$('.overlay-trigger img').mouseenter( function() {
				$('.overlay').hide();
				$(this).parent().find('.overlay').css({'display':'block','cursor':'pointer'});
			});
			$('.overlay-trigger .overlay').mouseleave( function() {
				$(this).parent().find('.overlay').css('display','none');
			});
				
		});
	};

	lemonJuice.autoScroll = function(sectionName) {
		// If there is a parameter called "interactive" in the URL, scroll to that div and activate the menu item
			if (window.location.search.substring(1) == sectionName ) {
				$('html,body').animate(
				{
					scrollTop: ($('.' + sectionName ).offset().top - 120) + 'px'
				});

				$('.nav li').removeClass('active');
				$('.interactive-menu-item').addClass('active');
			}
	};

	lemonJuice.menuHighlight = function() {
		// On load and while the window scrolls, apply the appropriate classes based on window position
		
		// Making this work for IE
		function workHighlight() {
			if (!window.pageYOffset) {
				window.pageYOffset = document.documentElement.scrollTop;
			}

			if ( window.pageYOffset < $('.interactive').offset().top ) {
				$('.nav li').removeClass('active');
				$('.work-menu-item').addClass('active');
			}

			if ( window.pageYOffset >= $('.interactive').offset().top - 120 ) {
				$('.nav li').removeClass('active');
				$('.interactive-menu-item').addClass('active');
			}
		}
		workHighlight();
		addEvent(window, 'scroll', workHighlight);
	};

	lemonJuice.fade = function() {
		// Create an array for the work left images
		// 
		// Create an array for the work right images
		// 
		// Add the "active" class to the next image and remove from current while changing opacity to 0
		// 
		// Animate the "active" image to opacity 1
	};

	// Initializing document.ready scripts automatically
	// lemonJuice.initialize();

}(window.lemonJuice = window.lemonJuice || {}));