import $ from "jquery";

// product carousel
document.addEventListener("DOMContentLoaded", function() {
    const $newsSlider = $('#news-sections .news-banner .news-carousel');

    $newsSlider.slick({
        arrows: true,
        dots: true
    });

});