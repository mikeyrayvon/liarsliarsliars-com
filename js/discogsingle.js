// DOM Ready
$(function() {

	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	var body = $('body');
	var header= $('header');
	var nav= $('.nav');
	var wrapper= $('div.wrapper');
	var tourbtn = $('#tourbtn');
    var tourclose = $('#tourclose');
    var tour = $('.tour');
    var news = $('.news');
    var promo = $('.promo');
    var insta = $('#instagram');

    var newstop = 0;
    var instatop = 0;
    var promotop = 0;
    var newsscrolltop = 0;
    var instascrolltop = 0;
    var promoscrolltop = 0;

	var navWidth = nav.outerWidth();
	var navHeight = nav.outerHeight();

	var hometop = 100;

	var coverheight = 0;

//position wrapper
//wrapper.css({'margin-top':hometop}); 

//begin tourbox
tourbtn.click(function () {
    tour.fadeIn( "slow" );
    body.css('overflow','hidden');
    if (windowWidth > 768) {
    	$('#bit-widget-0').css('display','none');
    	$('#bit-widget-1').css('display','block');
    }
    if (windowWidth < 768) {
    	$('#bit-widget-1').css('display','none');
    	$('#bit-widget-0').css('display','block');
    }
});
tourclose.click(function () {
    tour.fadeOut( "fast" );
    body.css('overflow','auto');
});
//end tourbox

$('.album-video iframe').attr('height', '100%').attr('width', '100%');

if (windowWidth < 768) {

	$(".album-spotify").contents().find("#outerWidgetContainer").css('width','100%');
		$('.album-spotify iframe').attr('width','100%');
		console.log('done');
	}
if (windowWidth > 769) {
		console.log('done2');
	}
if (windowWidth > 1024) {
		$('.album-video').css('height', (windowHeight*0.7)+40);
		coverheight = $('.wp-post-image').height();
		console.log(coverheight);

	}


	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		for (var i = 0; i < imgs.length; i++) {
			if (/.*\.svg$/.test(imgs[i].src)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + 'png';
			}
		}
	}

});
