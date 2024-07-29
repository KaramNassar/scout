import './bootstrap';
import lozad from 'lozad';
import Swiper from 'swiper';
import {Navigation} from 'swiper/modules';

const observer = lozad();
observer.observe();

const swiper = new Swiper(".multiple-slide-carousel", {
    modules: [Navigation],
    navigation: {
        nextEl: ".multiple-slide-carousel .swiper-button-next",
        prevEl: ".multiple-slide-carousel .swiper-button-prev",
    },
    breakpoints: {
        1920: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        1028: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        990: {
            slidesPerView: 2,
            spaceBetween: 30
        }
    }
});
