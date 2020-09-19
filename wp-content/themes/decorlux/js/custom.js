jQuery(document).ready(function($){
    $('#burger-icon').click(function () {
        $(this).toggleClass('open');
        $('.site-menu').toggleClass('down');
        $('body').toggleClass('fixed')
    });

    $('ul#primary-menu > li.menu-item > a').on('click', function (e) {

        $('ul#primary-menu > li.menu-item').removeClass('expanded');
        $(this).parent('li.menu-item').addClass('expanded');
    });

    $('ul#primary-menu > li#menu-item-199 > a').on('click', function (e) {
        e.preventDefault();
    });
    $('ul#primary-menu > li#menu-item-203 > a').on('click', function (e) {
        e.preventDefault();
    });
    $('ul#primary-menu > li#menu-item-207 > a').on('click', function (e) {
        e.preventDefault();
    });

    $('#primary-menu > li.menu-item:nth-child(1)').mouseenter(function () {
        $('.site-menu').css('background-image','url(http://localhost/decourlux/wp-content/themes/decorlux/images/curtain.jpg)');
    });

    $('#primary-menu > li.menu-item:nth-child(2)').mouseenter(function () {
        $('.site-menu').css('background-image','url(http://localhos/decourlux/t/wp-content/themes/decorlux/images/sofa.jpg)');
    });

    $('#primary-menu > li.menu-item:nth-child(3)').mouseenter(function () {
        $('.site-menu').css('background-image','url(http://localhost/decourlux//wp-content/themes/decorlux/images/decoration.jpg)');
    });

    $('#primary-menu > li.menu-item').click(function () {
        $(this).siblings().removeClass('active');
        $(this).toggleClass('active');
    });

});
function goBack() {
    window.history.back();
}
