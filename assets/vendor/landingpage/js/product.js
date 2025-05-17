
document.addEventListener("DOMContentLoaded", function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
});

window.addEventListener("hashchange", function () {
    const id = location.hash.substring(1);
    const target = document.getElementById(id);
    if (target) {
        const card = target.querySelector(".card");

        if (card) {
            card.classList.add("highlight-card");

            setTimeout(() => {
                card.classList.remove("highlight-card");
            }, 2100); // Sesuaikan dengan animasi durasi (2s + sedikit buffer)
        }
    }
});




// preloader
window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");
    if (preloader) {
        preloader.classList.add("hidden");
    }
});