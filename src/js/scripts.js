'use strict';
import MobileMenu from './modules/MobileMenu';
import { tns } from '../../node_modules/tiny-slider/src/tiny-slider.js';
import Filter from './modules/Filter';
import ToTop from './modules/toTop';
import SmoothOnAnchors from './modules/smoothOnAnchors';
import SendForm from './modules/sendForm';
import GLightbox from '../../node_modules/glightbox';
import isEmail from '../../node_modules//lib/isEmail';

const mobileMenu = new MobileMenu();
const filter = new Filter();
const sendForm = new SendForm({
  form: ".contactus-form",
  inputs: ".contactus-form__input",
  submit: ".contactus-form__submit",
  popup: '.common-popup'
});

new ToTop();

new isEmail();

const lightbox = GLightbox( {
  selector: 'glightbox3',
  touchNavigation: true,
    loop: true,
    autoplayVideos: true
});

const glightbox = GLightbox({
  openEffect: 'zoom',
  closeEffect: 'fade',
  cssEfects: {
    // This are some of the animations included, no need to overwrite
    fade: { in: 'fadeIn', out: 'fadeOut' },
    zoom: { in: 'zoomIn', out: 'zoomOut' }
  }
});


const nav = document.createElement('div');
nav.classList.add('gcounter');
nav.dataset.indicator = '/';

const slides = GLightbox({
	onOpen: () => slides.modal.appendChild(nav),
	afterSlideChange: function(prev, next) {
		nav.dataset.indicator = `${next.index + 1} / ${slides.elements.length}`;
		nav.classList.add('gcounter-added');
	}
});


if(document.querySelector('.aboutus__staff')) {
    const slider = new tns({
        container: '.my-slider',
        mode: "carousel",
        items: 1,
        controls: false,
        nav: false,
        autoplayButtonOutput: false,
        // controlsContainer: '.my-slider__nav',
        fixedWidth: 265,
        autoplay: true,
        speed: 300,
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
        nav: false,
        // navContainer: '.clients__dots',
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
