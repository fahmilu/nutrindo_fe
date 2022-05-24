import $ from "jquery";

const $win = $(window),
        $header = $('header');

let $lastScrollTop = 0;

// scroll top
document.addEventListener("DOMContentLoaded", function() {
    $win.scroll(function () { 
        const $scrollTop = $(this).scrollTop();
        const $headerHeight = $header.height();

        $('.toggler[aria-expanded="true"]').click();
        $('.search-area').removeClass('active');

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

    $('body').on('click', '.search-btn, .close-search', function (e) {
        e.preventDefault();
        if($('.search-area').hasClass('active')) {
            $('.search-area').removeClass('active');
        } else {
            $('.search-area').addClass('active');
        }
    });

    const collapseMenu = document.getElementById('navbar');
    collapseMenu.addEventListener('hide.bs.collapse', function () {
    // do something...
        $('body').removeAttr('style');
    })
    collapseMenu.addEventListener('show.bs.collapse', function () {
    // do something...
        $('body').css({
            'overflow': 'hidden',
            'padding-right': '0px'
        });
    })
});