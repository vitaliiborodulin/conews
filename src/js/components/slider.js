if($('body').hasClass('home')){
  var swiper = new Swiper('.swiper-container', {
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    // mousewheel: true,
    breakpoints: {
      992: {
        slidesPerView: 5,
        spaceBetween: 20,
        centeredSlides: true
      },
      600: {
        slidesPerView: 3,
        spaceBetween: 20,
        centeredSlides: true
      },
      
    }
  });
}