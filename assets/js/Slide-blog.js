const swiperBlog = new Swiper('.slide-blog-swiper', {
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
      },
      breakpoints: {
            1024: {
                  slidesPerView: 3,
                  spaceBetween: 30,
            },
            992: {
                  slidesPerView: 3,
                  spaceBetween: 30,
            },
            768: {
                  slidesPerView: 3,
                  spaceBetween: 30,
            },
            480: {
                  slidesPerView: 2,
                  spaceBetween: 30,
            },
            0: {
                  slidesPerView: 1,
                  spaceBetween: 30,
            }
      }
});
