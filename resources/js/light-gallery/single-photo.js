import lightGallery from "lightgallery";
import lgZoom from 'lightgallery/plugins/zoom';

lightGallery(document.getElementById('singlePhoto'), {
    plugins: [lgZoom],
    licenseKey: 'GPLv3',
    mode: 'lg-fade',
});
