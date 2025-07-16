$(document).ready(function () {
    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    $('[href="#"]').attr("href", "javascript:;");
    $('.menu-Bar').click(function () {
        $(this).toggleClass('open');
        $('.menuWrap').toggleClass('open');
        $('body').toggleClass('ovr-hiddn');
    });

    $('.closePop,.overlay').click(function () {
        $('.popupMain').fadeOut();
        $('.overlay').fadeOut();
    });

    sideLeftBar();
});


$(document).on('click', '.prodSec1-card', function(e) {
    if($(this).hasClass('thisLink')) {

    } else {
        var __this = $(this);
        var parent = __this.parent();

        if($(parent).hasClass('active')) {
            $(parent).removeClass('active');
            $(parent).find('.prodSec1-detailBox').hide();
        } else {
            $(parent).addClass('active');
            $(parent).find('.prodSec1-detailBox').show();
        }

        // $(parent).toggleClass('active');

        // $(parent).find('.prodSec1-detailBox').show();
    }
})



// Slider For
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true
});


// Accordion
$('.acc_title').on('click', function () {
    $(this).parent().parent().find('li').removeClass('active')
    $(this).parent().parent().find('.acc_desc').slideUp();
    $(this).parent('li').addClass('active')
    if (!$(this).next('.acc_desc').is(':visible')) {
        $(this).next('.acc_desc').slideDown();
    } else {
        $(this).parent().parent().find('li').removeClass('active')
    }
});

function sideLeftBar(s) {
    var scroll, ele, target, targetOffset, windowHeight;
    
    ele = $('.sideLeftBar');
    windowHeight  = $(window).outerHeight();
    target = $('.sideLeftBarStarter');
    targetOffset = $(target).offset();
    scroll = s;

    if (scroll > targetOffset.top) {
        ele.addClass('show');
    } else {
        ele.removeClass('show');
    }
}

// Sticky Navigation
$(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".fixed").addClass("sticky");
    } else {
        $(".fixed").removeClass("sticky");
    }

    sideLeftBar($(window).scrollTop());
});

$('.index-slider').on('init', function (event, slick) {
    $(this).append(`<div class="slick-counter"><span class="current">${(slick.currentSlide + 1 < 10) ? '0' + (slick.currentSlide + 1) : slick.currentSlide + 1}</span> / <span class="total">${(slick.slideCount < 10) ? '0' + (slick.slideCount) : slick.slideCount}</span></div>`);
}).slick({
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    fade: true,
    arrows: false,
    dots: true,
    focusOnSelect: false,
    pauseOnFocus: false,
}).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    var x = '';
    if (nextSlide + 1 < 10) {
        x = '0' + (nextSlide + 1)
    } else {
        x = nextSlide + 1;
    }
    $('.current').text(x);
});

$('.hsec2-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
});

$('.ctaSec-main ul').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 8000,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 1,
});


// Navigation Menu 
$(window).on('load', function () {
    var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $('ul.menu li a').each(function () {
        var hrefVal = $(this).attr('href');
        if (hrefVal == currentUrl) {
            $(this).removeClass('active');
            $(this).closest('li').addClass('active')
            $('ul.menu li.first').removeClass('active');
        }
    });

});

// Tabbing JS
$('[data-targetit]').on('click', function (e) {
    $(this).addClass('current');
    $(this).siblings().removeClass('current');
    var target = $(this).data('targetit');
    $('.' + target).siblings('[class^="box-"]').hide();
    $('.' + target).fadeIn();
    $(".tab-slider").slick("setPosition");
});

/* RESPONSIVE JS */
if ($(window).width() < 825) {
}