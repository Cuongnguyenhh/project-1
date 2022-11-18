const swiperCompany = new Swiper('.slide-company-swiper', {
      slidesPerView: 5,
      loop: true,
      navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
      },
      pagination: {
            el: '.swiper-pagination',
            clickable: true,
      },
      breakpoints: {
            1024: {
                  slidesPerView: 5,
                  spaceBetween: 20,
            },
            992: {
                  slidesPerView: 3,
                  spaceBetween: 20,
                },
            768: {
                  slidesPerView: 3,
                   spaceBetween: 20,

            },
            480: {
                  slidesPerView: 2,
                  spaceBetween: 20,
            }
          }
});
