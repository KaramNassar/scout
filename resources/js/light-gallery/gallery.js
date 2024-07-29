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
