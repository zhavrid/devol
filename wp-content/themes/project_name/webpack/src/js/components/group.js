document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        spaceBetween: 20, // Опциональное расстояние между слайдами
        breakpoints: {
            0: {
                slidesPerView: 1, // Для ширины экрана менее 425px листаем по одному слайду
                slidesPerGroup: 1, // По одному слайду при ширине экрана менее 425px
            },
        },
    });
});