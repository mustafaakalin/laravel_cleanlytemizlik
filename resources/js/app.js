import './bootstrap';

// swiper js
// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';


// init Swiper:
const swiper = new Swiper('.swiper', {
  // configure Swiper to use modules
  // modules: [Navigation, Pagination],
  // Optional parameters
  direction: 'horizontal',
  // loop: true,

  centeredSlides: true,
  slidesPerView: 2,
  
  effect: 'coverflow',

  autoHeight: true,

  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },



  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

