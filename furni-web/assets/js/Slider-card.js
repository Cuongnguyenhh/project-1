const swiperCard = new Swiper('.slide-card-swiper', {
      slidesPerView: 4,
      spaceBetween: 30,
      navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
      },
      breakpoints: {
            1024: {
                  slidesPerView: 4,
                  spaceBetween: 20,
            },
            992: {
                  slidesPerView: 3,
                  spaceBetween: 20,
                },
            768: {
                  slidesPerView: 2,
                   spaceBetween: 20,

            }
      }
});
