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
			$('.overlay-trigger img').mouseenter( function() {
				$('.overlay').hide();
				$(this).parent().find('.overlay').css({'display':'block','cursor':'pointer'});
			});
			$('.overlay-trigger .overlay').mouseleave( function() {
				$(this).parent().find('.overlay').css('display','none');
			});
		});
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

	
	// Create objects to store the locations of the images
	lemonJuice.leftImages = [];
	lemonJuice.rightImages = [];

	// Initializing document.ready scripts automatically
	lemonJuice.initialize();

}(window.lemonJuice = window.lemonJuice || {}));