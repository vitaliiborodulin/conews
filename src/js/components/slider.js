if ($('body').hasClass('home')) {
    var sliderHome = new Swiper('.slider__home', {
        direction: 'horizontal',
        slidesPerView: 1,
        loop: false,
        // centeredSlides: true,
        preloadImages: false,
        lazy: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        // mousewheel: true,
        breakpoints: {
            992: {
                slidesPerView: 5,
                spaceBetween: 20,
                // centeredSlides: true
            },
            600: {
                slidesPerView: 3,
                spaceBetween: 20,
                // centeredSlides: true
            },

        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            // dynamicBullets: true,
            // type: 'fraction'
        },
    });
}

if ($('body').hasClass('single')) {
    var sliderSame = new Swiper('.same__list', {
        direction: 'horizontal',
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        preloadImages: false,
        lazy: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
                // centeredSlides: true
            },
            414: {
                slidesPerView: 2,
                spaceBetween: 20,
                // centeredSlides: true
            },
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}