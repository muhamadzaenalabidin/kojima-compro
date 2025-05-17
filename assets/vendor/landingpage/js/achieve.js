// preloader
window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");
    if (preloader) {
        preloader.classList.add("hidden");
    }
});
// end preloader

// echievement
const swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true, // agar bisa berputar tanpa berhenti
    autoplay: {
        delay: 3000, // delay antar slide dalam milidetik (3000ms = 3 detik)
        disableOnInteraction: false, // tetap autoplay meskipun user interaksi
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 1.2,
        },
        768: {
            slidesPerView: 2.5,
        },
        992: {
            slidesPerView: 3,
        },
    },
});


document.querySelectorAll(".preview-img").forEach((img) => {
    img.addEventListener("click", function () {
        const src = this.getAttribute("src");
        const caption = this.getAttribute("data-caption");
        document.getElementById("previewImage").setAttribute("src", src);
        document.getElementById("previewCaption").textContent = caption;
        new bootstrap.Modal(document.getElementById("previewModal")).show();
    });
});


// swipper home
// cust
// echievement
const swipercust = new Swiper(".mySwiperCust", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: {
            slidesPerView: 0.2,
        },
        576: {
            slidesPerView: 1.2,
        },
        768: {
            slidesPerView: 2.2,
        },
        992: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        },
    },
});

