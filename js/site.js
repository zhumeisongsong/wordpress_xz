//swiper
var swiper_init = function () {
    var mySwiper =new Swiper('.swiper-container',{
        autoplay:5000,
        pagination:'.swiper-pagination',
        prevButton:'.swiper-button-prev',
        nextButton:'.swiper-button-next',
        loop : true,
        preloadImages:false,
        updateOnImagesReady : true,
        // lazyLoading : true,
        lazyLoadingInPrevNext : true

    })
};
$(function () {
    swiper_init();

    $(window).scroll(function () {
        var $animated = $('.navbar');
        if ($animated.length && $animated.offset().top > 5) {
            $animated.addClass('top-nav-collapse');
        } else {
            $animated.removeClass('top-nav-collapse');
        }
    });

    function nav_collapse(){
        var $click_href = $('.nav li a');
        $click_href.click(function(){
            $('.collapse').removeClass('in').attr({'aria-expanded':'false'});
        })
    }
});
