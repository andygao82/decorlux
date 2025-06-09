jQuery(document).ready(function($){
	$('#burger-icon').click(function () {
		$(this).toggleClass('active');
		$('.site-menu').toggleClass('active');
	});

	$('.menu-item-has-children > a').click(function (e) {
		e.preventDefault();
		$(this).parent().toggleClass('active');
		$(this).siblings('.sub-menu').slideToggle();
	});

	$('.grid').masonry({
		itemSelector: '.grid-item',
		columnWidth: '.grid-sizer',
		percentPosition: true
	});

	inView('.fade-up').on('enter', function(el) {
		$(el).addClass('in-view');
	})

	inView('.fade-left').on('enter', function(el) {
		$(el).addClass('in-view');
	})

	inView('.fade-right').on('enter', function(el) {
		$(el).addClass('in-view');
	})

});
function goBack() {
	window.history.back();
}
