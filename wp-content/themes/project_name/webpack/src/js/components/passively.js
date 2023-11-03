document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiperq", {
        pagination: {
            el: ".swiper-pagination",
        },
        spaceBetween: 0,
        breakpoints: {
            0: {
                spaceBetween: 1,
                slidesPerView: 1,
                slidesPerGroup: 1,
            },
            867: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
        },
    });
});