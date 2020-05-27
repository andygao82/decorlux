jQuery(document).ready(function($){
    $('#burger-icon').click(function () {
        $(this).toggleClass('open');
        $('.site-menu').toggleClass('down');
    });

    $('ul#primary-menu > li.menu-item > a').mouseenter(function () {
        $(this).parent('li.menu-item').addClass('expanded');
    });

    $('ul#primary-menu > li.menu-item').mouseleave(function () {
        $(this).removeClass('expanded')
    });

    $('#primary-menu > li.menu-item:nth-child(1)').mouseenter(function () {
        $('.site-menu').css('background-image','url(http://decorlux.gtechsolution.com.au/wp-content/themes/decorlux/images/curtain.jpg)');
    });

    $('#primary-menu > li.menu-item:nth-child(2)').mouseenter(function () {
        $('.site-menu').css('background-image','url(http://decorlux.gtechsolution.com.au/wp-content/themes/decorlux/images/sofa.jpg)');
    });

    $('#primary-menu > li.menu-item:nth-child(3)').mouseenter(function () {
        $('.site-menu').css('background-image','url(http://decorlux.gtechsolution.com.au/wp-content/themes/decorlux/images/decoration.jpg)');
    });

    $('#primary-menu > li.menu-item').click(function () {
        $(this).siblings().removeClass('active');
        $(this).toggleClass('active');
    });
});
