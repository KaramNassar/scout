import './bootstrap';
import lozad from 'lozad';
import AOS from 'aos';
import 'aos/dist/aos.css';
import Swiper from 'swiper';
import {Navigation} from 'swiper/modules';

import lightGallery from 'lightgallery';
import 'lightgallery/css/lightgallery-bundle.min.css';

import lgThumbnail from 'lightgallery/plugins/thumbnail';
import lgFullScreen from 'lightgallery/plugins/fullscreen';
import lgZoom from 'lightgallery/plugins/zoom';
import lgAutoPlay from 'lightgallery/plugins/autoplay';


lightGallery(document.getElementById('lightgallery'), {
    plugins: [lgZoom, lgThumbnail, lgFullScreen, lgAutoPlay],
    licenseKey: 'GPLv3',
    speed: 300,
    mode: 'lg-fade',
    selector: '.item',
    toggleThumb: true,
    allowMediaOverlap: true,

});

const observer = lozad();
observer.observe();

AOS.init({
    duration: 700,
    once: true
});

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
