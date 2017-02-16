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

//position wrapper
//wrapper.css({'margin-top':hometop}); 

var blockimgheight = $('.block img').height();
$('.block img').css('margin-top',-(blockimgheight/2));

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

$('.promo iframe').attr('height', '100%').attr('width', '100%');

//begin mobile
if (windowWidth < 768) {

	var instaHeight = insta.outerWidth();
	insta.css('height',instaHeight);

	}
//end mobile

//begin browser
if (windowWidth > 768) {

	$('#wrap').css('margin-top',windowHeight*1.1);

	insta.css('width', wrapper.width()*0.4);

	$(window).scroll(function() {
			promotop = promo.offset().top;
			promoscrolltop = promotop - $(window).scrollTop();
			instatop = insta.offset().top;
			instascrolltop = instatop - $(window).scrollTop();
			newstop = news.offset().top;
			newsscrolltop = newstop - $(window).scrollTop();

		if ($(this).scrollTop() > windowHeight) {
            promo.css('position','fixed');
        } else {
            promo.css('position','relative');
        }

		if (instascrolltop < hometop) {
		insta.css({
		'position': 'fixed',
		'top': hometop,
		'right': '2.5%'
		});
		}

		if  (newsscrolltop > instascrolltop) {
		insta.css({
		'position': 'relative',
		'top': '0',
		'right': '0'
		});
		}

	});
	//end scroll function

	//begin scrollorama
	var scrollorama = $.scrollorama({
        blocks:'.block'
	});
	scrollorama.animate('#liars',{
		delay: 0, duration: 800, property:'left', start:0, end: -700, easing:'easeInQuad'
	})
	scrollorama.animate('#mess',{
		delay: 0, duration: 800, property:'right', start:0, end: -700, easing:'easeInQuad'
	})
	//end scrollorama

}
//end browser


//begin Instagram feed
    var userFeed = new Instafeed({
        get: 'user',
        userId: 175639808,
        accessToken: '175639808.467ede5.44012c7378024f46bdf4254595542abd',
        template: '<div class="item"><a href="{{link}}"><img src="{{image}}" /><span class="instacap">{{caption}}</span></a></div>',
	target: 'slides',
	resolution: 'standard_resolution',
	after: function (){
		$('#slides div:first').addClass('active');}
    });
    userFeed.run();
//end Instagram feed


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
