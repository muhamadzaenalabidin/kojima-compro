// tombol eye password
$(document).ready(function () {
    $('.toggle-password').on('click', function () {
        const targetId = $(this).data('target');
        const input = $('#' + targetId);
        const icon = $(this).find('i');

        if (input.attr('type') === 'password') {
            input.attr('type', 'text');
            icon.removeClass('bi-eye-slash').addClass('bi-eye');
        } else {
            input.attr('type', 'password');
            icon.removeClass('bi-eye').addClass('bi-eye-slash');
        }
    });
});

// Alert halaman login
const flashLogin = $('.flash-login').data('flashlogin');
if (flashLogin) {
    Swal.fire({
        title: "Perhatian!",
        text: flashLogin,
        icon: "warning",
    });
}


document.addEventListener("DOMContentLoaded", function () {
    const flashError = document.querySelector('.flashdata-error').dataset.error;

    if (flashError) {
        Swal.fire({
            icon: 'error',
            title: 'Kesalahan!',
            html: flashError,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Tutup'
        });
    }
});


// Tombol Keluar
$('.tmbl-logout').on('click', function (e) {

    e.preventDefault();

    Swal.fire({
        title: "Keluar sistem ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, Keluar!",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = $(this).attr('href');
        }
    });

});

// Alert halaman pengguna
const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swal.fire({
        title: "Sukses!",
        text: "Data berhasil " + flashData,
        icon: "success",
    });
}


// Tombol Ubah pengguna
$('.tmbl-edit').on('click', function (e) {

    e.preventDefault();

    Swal.fire({
        title: "Ubah data ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = $(this).attr('href');
        }
    });

});

// Tombol Hapus pengguna
$('.tmbl-hapus').on('click', function (e) {

    e.preventDefault();

    Swal.fire({
        title: "Hapus data ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = $(this).attr('href');
        }
    });

});

// Tombol konfirm simpan perubahan pengguna
$('.tmbl-form-edit').on('click', function (e) {
    e.preventDefault();

    Swal.fire({
        title: "Simpan perubahan?",
        text: "Data akan diperbarui jika kamu menyetujuinya.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "Ya, simpan!",
        cancelButtonText: "Batal"
    }).then((result) => {
        if (result.isConfirmed) {
            $(this).closest('form').submit();
        }
    });
});





// switch on off navbrand
document.getElementById('navbrandstatus').addEventListener('change', function () {
    const label = document.getElementById('statusLabel');
    const isChecked = this.checked;

    label.textContent = isChecked ? 'On' : 'Off';
    this.value = isChecked ? 'on' : 'off';
});

// choices select color
document.addEventListener('DOMContentLoaded', function () {
    const select = document.getElementById('textcolor');

    const choices = new Choices(select, {
        searchEnabled: false,
        itemSelectText: '',
        callbackOnCreateTemplates: function (template) {
            return {
                option: (classNames, data) => {
                    const props = data.customProperties || {};
                    const el = document.createElement('div');
                    el.className = 'd-flex align-items-center';
                    el.innerHTML = `<span class="badge ${props.class || ''} me-2">&nbsp;</span> ${data.label}`;
                    return el;
                },
                item: (classNames, data) => {
                    const props = data.customProperties || {};
                    const el = document.createElement('div');
                    el.className = 'd-flex align-items-center';
                    el.innerHTML = `<span class="badge ${props.class || ''} me-2">&nbsp;</span> ${data.label}`;
                    return el;
                }
            };
        }
    });
});

