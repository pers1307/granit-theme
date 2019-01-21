$(document).ready(function(){

    $('.bx-slider-main').bxSlider({
        pager: false,
        minSlides: 3,
        maxSlides: 3,
        moveSlides: 1,
        slideWidth: 60,
        slideMargin: 10
    });
    $('.main-slider-modal').bxSlider({
        pager: false,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        slideWidth: 600
    });
    $('.main-slider-index').bxSlider({
        pager: true,
        minSlides: 1,
        maxSlides: 1,
        moveSlides: 1,
        slideWidth: 590,
        slideMargin: 10
    });

});



