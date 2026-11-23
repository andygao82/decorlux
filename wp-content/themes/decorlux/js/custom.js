$(document).ready(function($){
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
