// core version + navigation, pagination modules:
import Swiper, {Navigation} from 'swiper';

//import 'swiper/swiper.scss';

// configure Swiper to use modules
Swiper.use([Navigation]);

// export Swiper to global
window.Swiper = Swiper;