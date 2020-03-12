'use strict';
import MobileMenu from './modules/MobileMenu';
import { tns } from '../../node_modules/tiny-slider/src/tiny-slider.js';
// import ToTop from './modules/toTop';

const mobileMenu = new MobileMenu();


// new ToTop();

if(document.querySelector('.aboutus__staff')) {
    const slider = new tns({
        container: '.my-slider',
        mode: "carousel",
        items: 1,
        controls: true,
        nav: false,
        controlsContainer: '.my-slider__nav',
        fixedWidth: 265,
        gutter: 10,
        responsive: {
          640: {
            items: 2,
            gutter: 25
          },
          700: {
          },
          900: {
            items: 4
          }
        }
      });
}
