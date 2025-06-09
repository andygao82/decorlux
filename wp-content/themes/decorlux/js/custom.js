jQuery(document).ready(function($){
	$('#burger-icon').click(function () {
		$(this).toggleClass('open');
		$('.site-menu').toggleClass('down');
		$('body').toggleClass('fixed')
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
