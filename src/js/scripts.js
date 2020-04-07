'use strict';
import MobileMenu from './modules/MobileMenu';
import { tns } from '../../node_modules/tiny-slider/src/tiny-slider.js';
import Filter from './modules/Filter';
import ToTop from './modules/toTop';
import SmoothOnAnchors from './modules/smoothOnAnchors';

const mobileMenu = new MobileMenu();
const filter = new Filter();

new ToTop();


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
        mouseDrag: true,
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

if(document.querySelector('.clients__slider')) {
    const slider = new tns({
        container: '.clients-slider',
        mode: "carousel",
        items: 1,
        // autoplay: true,
        nav: true,
        navContainer: '.clients__dots',
        controls: false,
        autoplay: true,
        autoplayButtonOutput: false,
        speed: 350,
        navPosition: 'bottom',
        mouseDrag: true,
        responsive: {
          640: {
            // items: 2,
            // gutter: 25
          },
          700: {
          },
          900: {
            items: 1
          }
        }
      });
}


new SmoothOnAnchors();
