// preloader
window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");
    if (preloader) {
        preloader.classList.add("hidden");
    }
});
// end preloader

// contact form
// const phoneInput = document.querySelector("#phone");
// const iti = window.intlTelInput(phoneInput, {
//     initialCountry: "id",
//     separateDialCode: true,
//     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
// });

const phoneInput = document.querySelector("#phone");
const iti = window.intlTelInput(phoneInput, {
    initialCountry: "id",
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
});

// Inject full number before submit
document.querySelector("form").addEventListener("submit", function () {
    const fullNumber = iti.getNumber();
    document.getElementById("phone_full").value = fullNumber;
});
// end contact form