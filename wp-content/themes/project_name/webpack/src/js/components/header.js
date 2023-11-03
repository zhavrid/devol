document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.header_nav');
    const body = document.body;
    const overlay = document.querySelector('.overlay');

    burger.addEventListener('click', () => {
        nav.classList.toggle('show');
        body.classList.toggle('nav-open');
        overlay.classList.toggle('show-overlay');
    });

    overlay.addEventListener('click', () => {
        nav.classList.remove('show');
        body.classList.remove('nav-open');
        overlay.classList.remove('show-overlay');
    });
});


$(document).ready(function() {
    var header = $('header');
    var nav = $('.header_nav');
    function handleScroll() {
        if ($(this).scrollTop() > 50) {
            header.addClass('scrolled');
            nav.addClass('scrolled');
        } else {
            header.removeClass('scrolled');
            nav.removeClass('scrolled');
        }
    }
    handleScroll();
    $(window).scroll(handleScroll);
});