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
			$('.overlay-trigger img').hover( function() {
				$(this).parent().find('.overlay').css({'display':'block','cursor':'pointer'});
			});
			$('.overlay-trigger .overlay').mouseout( function() {
				$(this).parent().find('.overlay').css('display','none');
			});
		});
	};

	// Initializing document.ready scripts automatically
	lemonJuice.initialize();

}(window.lemonJuice = window.lemonJuice || {}));