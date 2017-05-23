//swiper
var swiper_init = function () {
    var mySwiper = new Swiper('.swiper-container', {
        autoplay: 5000,
        pagination: '.swiper-pagination',
        prevButton: '.swiper-button-prev',
        nextButton: '.swiper-button-next',
        loop : true,
        preloadImages: false,
        updateOnImagesReady: true

    })
};

var nav_collapse = function () {
    var $click_href = $('.nav li a');
    $click_href.click(function () {
        $('.collapse').removeClass('in').attr({'aria-expanded': 'false'});
    })
};
$(function () {
    swiper_init();
    nav_collapse();
});
