var coworkingSlider = new Swiper('.coworking-slider', {
  slidesPerView: 2,
  spaceBetween: 30,

  // Navigation arrows
  navigation: {
    nextEl: '.coworking-slider__next',
    prevEl: '.coworking-slider__prev',
  },
})

var excursionSlider = new Swiper('.excursion-slider', {
  slidesPerView: 1,
  spaceBetween: 15,

  // Navigation arrows
  navigation: {
    nextEl: '.excursion-slider__next',
    prevEl: '.excursion-slider__prev',
  },
})