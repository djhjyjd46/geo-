function swiper() {
    new Swiper('.swiper-project', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.project-swiper-button-next',
            prevEl: '.project-swiper-button-prev'
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            }
        }
    });
    new Swiper('.swiper-garant', {
        slidesPerView: 5,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.garant-swiper-button-next',
            prevEl: '.garant-swiper-button-prev'
        },
        breakpoints: {
            0: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 3
            },
            1024: {
                slidesPerView: 5
            }
        }
    });
}

document.addEventListener("DOMContentLoaded", swiper);
