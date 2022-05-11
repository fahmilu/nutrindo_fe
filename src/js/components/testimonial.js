import $ from "jquery";

const $sliderTestimonial = $('.slider-testimonial');

document.addEventListener("DOMContentLoaded", function() {
    $sliderTestimonial.slick({
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 1,
    });

    $('.slider-testimonial .ratings').each(function (index, element) {
        const $dataRating = $(this).data('rating');
        const $dataRatingFloor = Math.floor($dataRating);

        for (let i = 0; i < $dataRatingFloor; i++) {
            $(this).append('<div class="star"><div class="fill" style="--star-width: 1;"></div></div>');
        }

        if($dataRatingFloor !== $dataRating) {
            const $restStar = $dataRating - $dataRatingFloor;

            $(this).append('<div class="star"><div class="fill" style="--star-width: '+ $restStar +';"></div></div>');
        }

    });
});
