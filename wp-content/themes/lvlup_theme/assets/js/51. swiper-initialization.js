(function ( $ ) {
    document.addEventListener( 'DOMContentLoaded', function () {
        if (document.querySelector('.default-swiper')) {
            let swiperContainer = document.querySelectorAll('.default-swiper');

            swiperContainer.forEach(swiper => {
                let swiperContainerMain = swiper.querySelector('.default-main'),
                    swiperContainerMore = swiper.querySelector('.default-more');

                let swiperMore = new Swiper(swiperContainerMore, {
                    slidesPerView: 'auto',
                    loop: true,
                    speed: 650,
                    initialSlide: 1,
                    allowTouchMove: false,
                    autoplay: {
                        delay: 3000,
                    },
                    navigation: {
                        nextEl: swiper.querySelector('.swiper-manage .swiper-navigation .swiper-next'),
                        prevEl: swiper.querySelector('.swiper-manage .swiper-navigation .swiper-prev'),
                    },
                });
                let swiperMain = new Swiper(swiperContainerMain, {
                    slidesPerView: 'auto',
                    loop: true,
                    speed: 650,
                    allowTouchMove: true,
                    autoplay: {
                        delay: 3000,
                    },
                    navigation: {
                        nextEl: swiper.querySelector('.swiper-manage .swiper-navigation .swiper-next'),
                        prevEl: swiper.querySelector('.swiper-manage .swiper-navigation .swiper-prev'),
                    },
                    thumbs: {
                        swiper: swiperMore,
                    },
                    breakpoints: {
                        1025: {
                            allowTouchMove: false,
                            thumbs: {
                                swiper: null,
                            }
                        },
                    }
                });
            });
        }
    });
})( jQuery );