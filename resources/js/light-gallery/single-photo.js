import lightGallery from "lightgallery";
import 'lightgallery/css/lightgallery-bundle.min.css';

import lgZoom from 'lightgallery/plugins/zoom';

lightGallery(document.getElementById('singlePhoto'), {
    plugins: [lgZoom],
    licenseKey: 'GPLv3',
    mode: 'lg-fade',
});
