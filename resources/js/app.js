window.$ = window.jQuery = require('jquery');

require('./bootstrap');

import { slick } from 'slick-carousel';

console.log($);

$(document).ready(function(){
    $('.fade').slick({
        pauseOnHover:false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4550,
        fade: true,
        cssEase: 'linear',
        dots: false,
        prevArrow: false,
        nextArrow: false,
        variableWidth: false
    });
});
