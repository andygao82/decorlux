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

    

});
function goBack() {
    window.history.back();
}
