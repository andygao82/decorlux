jQuery(document).ready(function($){
    $('#burger-icon').click(function () {
        $(this).toggleClass('open');
        $('.site-menu').toggleClass('down');
        $('body').toggleClass('fixed')
    });

    // $('#primary-menu > li.menu-item').click(function () {
    //     $(this).siblings().removeClass('active');
    //     $(this).toggleClass('active');
    // });

});
function goBack() {
    window.history.back();
}
