// resources/js/app.js

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'bootstrap';
import 'jquery-nice-select';
import 'jquery-ui/ui/widgets/datepicker.js';
import 'jquery-ui/ui/widgets/slider.js';
import 'slicknav/dist/jquery.slicknav.min.js';
import 'mixitup';
import 'owl.carousel/dist/owl.carousel.js';

import 'slicknav/dist/slicknav.min.css';

$(document).ready(function() {
    $('select').niceSelect();
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 1
    });
    $('#menu').slicknav();
});
