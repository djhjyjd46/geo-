function swiper() {
    const swiperEl = document.querySelector('.serteficates-swiper');

  

    const serteficatesSwiper = new Swiper(swiperEl, {
        slidesPerView: 4,
        spaceBetween: 10,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            769: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1200: {
                slidesPerView: 4,
            }            
        }
    });
}

document.addEventListener("DOMContentLoaded", swiper);
