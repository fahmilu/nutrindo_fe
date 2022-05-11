import $ from "jquery";

const $win = $(window),
        $header = $('header');

let $lastScrollTop = 0;

// scroll top
document.addEventListener("DOMContentLoaded", function() {
    $win.scroll(function () { 
        const $scrollTop = $(this).scrollTop();
        const $headerHeight = $header.height();

        if($scrollTop > $headerHeight) {
            if($scrollTop > $lastScrollTop) {
                $header.attr('data-scroll', 'down');
            } else {
                $header.attr('data-scroll', 'up');
            }
            $header.addClass('scrolling');
        } else {
            $header.removeClass('scrolling');
            $header.attr('data-scroll', '');

        }

        $lastScrollTop = $scrollTop;
    });
});