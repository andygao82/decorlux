$(document).ready(function($){
	// Expose the sticky header height so the home banner video can fill the rest of the screen
	function setHeaderHeight() {
		var header = document.getElementById('masthead');
		if (header) {
			document.documentElement.style.setProperty('--header-h', header.offsetHeight + 'px');
		}
	}
	setHeaderHeight();
	$(window).on('resize', setHeaderHeight);

	// Read the banner video's real aspect ratio from Vimeo so the CSS can make it cover the screen without side bars
	var bannerVideo = document.querySelector('.home-banner iframe');
	var bannerVideoId = bannerVideo && (bannerVideo.src.match(/video\/(\d+)/) || [])[1];
	if (bannerVideoId) {
		fetch('https://vimeo.com/api/oembed.json?url=https://vimeo.com/' + bannerVideoId)
			.then(function (res) { return res.json(); })
			.then(function (data) {
				if (data.width && data.height) {
					bannerVideo.style.setProperty('--video-ar', data.width / data.height);
				}
			})
			.catch(function () {});
	}

	$('#burger-icon').click(function () {
		$(this).toggleClass('active');
		$('.site-menu').toggleClass('active');
	});

	$('.menu-item-has-children > a').click(function (e) {
		$(this).parent().toggleClass('active');
		$(this).siblings('.sub-menu').slideToggle();
	});

  const grid = document.querySelector('.grid')
	if (grid) {
		imagesLoaded(grid, function() {
			new Masonry(grid, {
				itemSelector: '.grid-item',
				columnWidth: '.grid-sizer',
				percentPosition: true
			})
		})
	}
    

	inView('.fade-up').on('enter', function(el) {
		$(el).addClass('in-view');
	})

	inView('.fade-left').on('enter', function(el) {
		$(el).addClass('in-view');
	})

	inView('.fade-right').on('enter', function(el) {
		$(el).addClass('in-view');
	})

	const homeBannerHeight = $('.home-banner').height()
	$(window).scroll(function() {
		const scrollTop = $(this).scrollTop();
		if (scrollTop > homeBannerHeight) {
			$('.site-header').addClass('scrolled');
		} else {
			$('.site-header').removeClass('scrolled');
		}
	});

	const swiper = new Swiper('.swiper', {
		autoplay: {
			delay: 3000,
			disableOnInteraction: false
		},
		effect: 'slide'
	});

});
function goBack() {
	window.history.back();
}
