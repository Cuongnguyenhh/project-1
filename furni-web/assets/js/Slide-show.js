const swiperSlide = new Swiper('.slide-show-swiper', {
      slidesPerView: 1,
      autoplay: {
            delay: 3000,
      },
      loop: true,
      pagination: {
            el: '.swiper-pagination',
            clickable: true,
      },
      navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
      },
});


