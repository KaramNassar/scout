import './bootstrap';
import lozad from 'lozad';
import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles

const observer = lozad();
observer.observe();

AOS.init({
    duration: 700
});
