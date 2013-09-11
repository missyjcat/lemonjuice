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

	// Prevent exception in IE for console.log
	if (typeof console === "undefined" || typeof console.log === "undefined") {
     console = {};
     console.log = function() {};
   }

	lemonJuice.initialize = function() {
		// This is where I put all document.ready scripts
		addEvent(window, 'load', function() {

			// Listen for mouseover event when mousing over a tile on the homepage
			// Trigger the span, and on mouseout hide it again.
			$('.overlay-trigger span, .overlay-trigger img').mouseenter( function() {
				$('.overlay').hide();
				$(this).parent().find('.overlay').css({'display':'block','cursor':'pointer'});
			});
			$('.overlay-trigger .overlay').mouseleave( function() {
				$(this).parent().find('.overlay').css('display','none');
			});

			// Add target='_blank' to the interactive section links
			$('.interactive-section a').attr('target', '_blank');
				
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

	lemonJuice.fade = function(imageArrayLeft,imageArrayRight) {

		function doTheFade(i,imageArray,sectionName,imgFile) {
			setTimeout( function() {
				console.log(imageArray[i]);
				console.log('i is ' + i + ' and image ArrayLeft.length is ' + imageArray.length + ' img name is ' + imageArray[i] + ' timeout is' + imgTimeout);
				var imgSpan = $(sectionName + ' .next-img');
				var imgImage = $(sectionName + ' .current-img');
				imgSpan.css({'background-image': 'url("img/work-top/' + imageArray[i] + '")', 'display':'none'});
				imgSpan.fadeIn(1000, function() {imgImage.css({'background-image': 'url("img/work-top/' + imageArray[i] + '")'});});
			}, imgTimeout);
		}

		for ( var i=0, imgTimeout=1000,imgFile=imageArrayLeft[i]; i<imageArrayLeft.length; i++) {
			doTheFade(i,imageArrayLeft,'.work-section-left');
			imgTimeout += 5000;
		}

		for ( var i=0, imgTimeout=0,imgFile=imageArrayRight[i]; i<imageArrayRight.length; i++) {
			doTheFade(i,imageArrayRight,'.work-section-right');
			imgTimeout += 5000;
		}
	};

	var windowW = document.width;
	var windowH = document.height;
	var screenW = null, screenH = null;
	
	function updateWindow() {
		screenW = $(window).width();
		screenH = $(window).height();
	}

	updateWindow();
	addEvent(window, 'resize', updateWindow);

	lemonJuice.whiteOut = function(imageFilePath,width,height) {

		// $('body').prepend('<div class="whiteout"></div>');
		// $('.whiteout').css({ 'width' : windowW + 'px', 'height' : windowH + 'px' });
		// $('.whiteout').fadeIn(700, function() {
		// 	$('.whiteout').after('<div style="top: ' + (screenH - height)/2 + 'px; left: ' + (screenW - width)/2 + 'px; display: none;" " class="detail-image"><img src="' + imageFilePath + '"></div>');
		// 	$('.detail-image').fadeIn(700);
		// });
		// $('.whiteout').after('<span class="close-box">CLOSE</span>');

		// $('.whiteout, .close-box').click( function() {
		// 	$('.whiteout, .detail-image, .close-box').fadeOut(1000, function() {$('.whiteout, .detail-image, .close-box').remove();});
		// } );
		 
		$('body').prepend('<div style="top: ' + (screenH - height)/2 + 'px; left: ' + (screenW - width)/2 + 'px; display: none;" " class="detail-image"><img src="' + imageFilePath + '"></div>');
		$('.detail-image').fadeIn(700);
		$('.detail-image').after('<span class="close-box" style="top: ' + ((screenH-height)/2-20) + 'px; right: ' + ((screenW - width)/2-20) + 'px;">CLOSE</span>');
		$('.close-box, body').click( function() {
			$('.detail-image, .close-box').fadeOut(1000, function() {$('.detail-image, .close-box').remove();});
		})

		addEvent(window, 'resize', function() {
			$('.detail-image').css({ 'top': (screenH-height)/2 + 'px', 'left' : (screenW - width)/2 + 'px'});
			$('.close-box').css({ 'right' : (screenW - width)/2 + 'px'});
			// $('.whiteout').css({ 'width' : windowW + 'px', 'height' : windowH + 'px' });
		});


	};
	
	// Initializing document.ready scripts automatically
	// lemonJuice.initialize();

}(window.lemonJuice = window.lemonJuice || {}));