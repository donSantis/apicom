
    var swiper = new Swiper(".mySwiper", {
    pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
},
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
});

    var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
