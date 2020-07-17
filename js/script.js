var mySwiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    slidesPerGroup: 1,
    pagination: {
        el: '.swiper-pagination',
        clickable: true
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            slidesPerGroup: 2,
        },
        992: {
            slidesPerView: 3,
            slidesPerGroup: 3,
        }
    }
})
var buttonOpen = document.querySelector(".menu__button--open");
var buttonClose = document.querySelector(".menu__button--close");
buttonOpen.addEventListener("click", function(){
    document.body.classList.add("opened");
});
buttonClose.addEventListener("click", function(){
    document.body.classList.remove("opened");
});