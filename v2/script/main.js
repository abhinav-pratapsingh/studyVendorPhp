
// aos script
AOS.init();

// hero sec slider js
var swiper = new Swiper(".heroSlider", {
    slidesPerView: 3,
    spaceBetween: 10,
    speed: 1000,
    autoplay: {
        enabled: true,
        delay: 500,
        disableOnInteraction: false

    },
    loop: true,
});


// partner slider js
var swiper = new Swiper(".partnerSlider", {
    spaceBetween: 10,
    slidesPerView: 2,
    loop: true,
    autoplay: {
        delay: 2600,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        600: {
            slidesPerView: 2,
        },
        900: {
            slidesPerView: 4,
        }
    }
});

// testimonial slider js
var swiper = new Swiper(".testimonialSlider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3600,
        disableOnInteraction: false
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
        },
        800: {
            slidesPerView: 1,
        },
        1000: {
            slidesPerView: 2,
        },
        1400: {
            slidesPerView: 2,
        }
    }
});

// scholarship slider js
var swiper = new Swiper(".dreamSlider", {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2600,
        disableOnInteraction: false
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 40
        },
        940: {
            slidesPerView: 3,
            spaceBetween: 40
        }
    }
});

// accordian js
let accordian_box = document.querySelectorAll(".toggle-title")
let flat_accordion = document.querySelector('.flat-accordion')
accordian_box.forEach((e) => {
    e.addEventListener('click', () => {
        if (e.parentNode.classList.contains('active')) {
            accordian_box.forEach((e) => {
                e.parentNode.classList.remove('active')
            })
        } else {
            accordian_box.forEach((e) => {
                e.parentNode.classList.remove('active')
            })
            e.parentNode.classList.add('active')
        }
    })
})


// scroll hide show js
window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
        $(".whatsapp-float").css("display", "block")
        $(".top-float .top-btn").css("display", "flex")
    } else {
        $(".whatsapp-float").css("display", "none")
        $(".top-float .top-btn").css("display", "none")
    }
})


// go to top js
$(document).ready(function () {
    $(".top-float .top-btn").click(() => {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth",
        });

    })
})


