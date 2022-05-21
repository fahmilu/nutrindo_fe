import $ from "jquery";

// product carousel
document.addEventListener("DOMContentLoaded", function() {
    const $imageSlider = $('#product-sections .product-detail .image-slide');

    $imageSlider.slick({
        arrows: true,
        dots: true
    });

    const $forWhoSlider = $('#product-sections .for-who .slider');

    $forWhoSlider.slick({
        arrows: true,
        dots: true
    });

});