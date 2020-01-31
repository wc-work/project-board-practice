(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		function isIE () {
			var myNav = navigator.userAgent.toLowerCase();
			return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
		}
		
		window.isIEOld = isIE() && isIE() < 9;
		window.isiPad = navigator.userAgent.match(/iPad/i);
		
		var img = $('.mov').data('placeholder'),
			video = $('.mov').data('video'),
			noVideo = $('.mov').data('src'),
			el = '';
		
		if($(window).width() > 767 && !isIEOld && !isiPad) {
			el +=   '<video class="fullscreen-bg-video" autoplay muted loop poster="' + img + '">';
			el +=       '<source src="' + video + '" type="video/mp4">';
			el +=   '</video>';
		} else {
			el = '<div class="placeholder" style="background-image: url(' + noVideo + ')";></div>';
		}
		
		$('.mov').prepend(el);

	});

})(jQuery, this);