const coworkingSlider = new Swiper('.coworking-slider', {
  slidesPerView: 1,
  spaceBetween: 30,

  navigation: {
    nextEl: '.coworking-slider__next',
    prevEl: '.coworking-slider__prev',
  },

  breakpoints: {
    420: {
      slidesPerView: 2,
    },
  }
});

const excursionSlider = new Swiper('.excursion-slider', {
  slidesPerView: 1,

  navigation: {
    nextEl: '.excursion-slider__next',
    prevEl: '.excursion-slider__prev',
  },
});

const serviceSlider = new Swiper('.service-slider', {
  slidesPerView: 1,

  navigation: {
    nextEl: '.service-slider__next',
    prevEl: '.service-slider__prev',
  },
});

const residentThumbContainer = document.querySelector('.resident-thumb__slider');
const residentContainer = document.querySelector('.resident-slider');

const residentThumbSlider = new Swiper(residentThumbContainer, {
  direction: 'vertical',
  autoHeight: true,

  slideActiveClass: 'resident-thumb--active',

  spaceBetween: 15,

  loop: true,
  loopedSlides: 3,

  slidesPerView: 3,
  centeredSlides: true,

  slideToClickedSlide: true,

  navigation: {
    nextEl: '.resident-slider__next',
    prevEl: '.resident-slider__prev',
  },
});

const residentSlider = new Swiper(residentContainer, {
  direction: 'vertical',
  autoHeight: true,

  loop: true,
  loopedSlides: 3,

  centeredSlides: true,
});

if (residentThumbContainer && residentContainer) {
  residentSlider.controller.control = residentThumbSlider;
  residentThumbSlider.controller.control = residentSlider;
}

