import $ from "jquery";

const $sliderTransitionDelay = 300,
    $bannerSlider = $('#home-sections .banner-carousel'),
    $actions = $('#home-sections .animated-hero-products .actions'); 

let $slidesNumber = $bannerSlider.children().length,
    deg = 0,
    duration = 800;

const doAnimations = (elements, direction) => {
    const animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    elements.each(function() {
        
        const $this = $(this);
        const $animationDelay = $this.data('delay');
        const $animationType = 'animated ' + $this.data('animation-' + direction);
        $this.removeClass('opacity-100');
        $this.addClass('opacity-0');
         
        if (direction === 'in') {
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
        }

        $this.addClass($animationType).one(animationEndEvents, function() {
            $this.removeClass($animationType);
            $this.removeAttr('style');

            if (direction === 'in') {
                $this.removeClass('opacity-0');
                $this.addClass('opacity-100');
            }
        });
    });
}

const productRotations = (direction, steps = 1) => {
    if (direction === 'back') {
        deg += (90 * steps);
    } else {
        deg -= (90 * steps);
    }
    setTimeout(() => {        
        $('.masking').animate(
            { deg: deg },
            {
              duration: duration,
              step: function(now) {
                $(this).css({ transform: 'rotate(' + now + 'deg)' });
              }
            }
        );
    }, $sliderTransitionDelay);
}

// home top banner
document.addEventListener("DOMContentLoaded", function() {

    $bannerSlider.on('init', function(e, slick) {
        const $firstAnimatingElements = $('div.banner-carousel .slick-slide:first-child').find('[data-animation-in]');
        doAnimations($firstAnimatingElements, 'in');    
    });

    $bannerSlider.on('beforeChange', function(e, slick, currentSlide, nextSlide) {  
        $('.slider__dots .slider__dot[data-slide-index="'+ currentSlide +'"]').removeClass('active');
        $('.slider__dots .slider__dot[data-slide-index="'+ nextSlide +'"]').addClass('active');
    });

    $bannerSlider.on('afterChange', function(e, slick, currentSlide) {  
        const $animatingElementsIn = $('div.banner-carousel .slick-slide[data-slick-index="' + currentSlide + '"]').find('[data-animation-in]');
        doAnimations($animatingElementsIn, 'in');    

        $('.slider__dots .slider__dot').removeClass('active');
        $('.slider__dots .slider__dot[data-slide-index="'+ currentSlide +'"]').addClass('active');
    });

	$bannerSlider.slick({
        arrows: false,
        dots: false,
        fade: true
    });


    $actions.append('<a href="#" class="slider__prev">Prev</a>');

    // Creating the dots buttons
    $actions.append('<ul class="slider__dots"></ul>');
    for (let i = 0; i < $slidesNumber; i++) {
        let page = i + 1;
        let dot = '';
        if(i === 0) {
            dot = '<li><a class="slider__dot active" href="#" data-slide-index="' + i + '">' + page + '</a></li>';
        } else {
            dot = '<li><a class="slider__dot" href="#" data-slide-index="' + i + '">' + page + '</a></li>';
        }
        $('.slider__dots').append(dot);
    }

    $actions.append('<a href="#" class="slider__next">Next</a>');
    
    // Dot click actions
    $('body').on('click', '.slider__dots .slider__dot', function(e) {
        e.preventDefault();

        // Getting an index of a target slide
        let slideIndex = $(this).attr('data-slide-index');
        let prevSlideIndex = $('div.banner-carousel .slick-active').attr('data-slick-index');
        let steps;

        if(slideIndex === prevSlideIndex) {
            return false;
        }

        const $animatingElementsOut = $('div.banner-carousel .slick-current').find('[data-animation-out]');
        doAnimations($animatingElementsOut, 'out');  

        if(slideIndex > prevSlideIndex) {
            steps = slideIndex - prevSlideIndex;
            productRotations('fort', steps);
        } else {
            steps = prevSlideIndex - slideIndex;
            productRotations('back', steps);
        }

        console.log(prevSlideIndex, steps);

        setTimeout( () => {
            $bannerSlider.slick('slickGoTo', slideIndex);
        }, $sliderTransitionDelay);
    });


    // Next button actions
    $('body').on('click', '.slider__next', function(e) {
        e.preventDefault();

        // Doing some actions here, i.e. animations
        const $animatingElementsOut = $('div.banner-carousel .slick-current').find('[data-animation-out]');
        doAnimations($animatingElementsOut, 'out');  

        // Delay until the slide is changed
        productRotations('fort');
        setTimeout( () => {
            $bannerSlider.slick('slickNext');
        }, $sliderTransitionDelay)
    });


    // Prev button actions
    $('body').on('click', '.slider__prev', function(e) {
        e.preventDefault();
        
        // Doing some actions here, i.e. animations
        const $animatingElementsOut = $('div.banner-carousel .slick-current').find('[data-animation-out]');
        doAnimations($animatingElementsOut, 'out');  

        // Delay until the slide is changed
        productRotations('back');
        setTimeout( () => {
            $bannerSlider.slick('slickPrev');
        }, $sliderTransitionDelay)
    });

});

// home product promo
document.addEventListener("DOMContentLoaded", function() {
    const $promoSlider = $('#home-sections .promo-slider');

    $promoSlider.slick({
        arrows: true,
        dots: false,
        nextArrow: '<a href="#" class="slick-next">next</a>',
        prevArrow: '<a href="#" class="slick-prev">prev</a>',
    });

});

// product carousel
document.addEventListener("DOMContentLoaded", function() {
    const $promoSlider = $('#home-sections .product-carousel .products');

    $promoSlider.slick({
        arrows: true,
        dots: false,
        appendArrows: $('#home-sections .product-carousel .actions'),
        nextArrow: '<a href="#" class="slick-next">next</a>',
        prevArrow: '<a href="#" class="slick-prev">prev</a>',
        // infinite: false,
        variableWidth: true
    });

});