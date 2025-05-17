<!-- header page -->
<section class="py-5 text-white mt-5" style="background: url('<?= base_url() ?>assets/vendor/landingpage/image/bg-header.png') center/cover no-repeat;">
    <div class="container">
        <h2 class="fw-bold">Contact Us</h2>
    </div>
</section>
<!-- end header page -->

<!-- content contact -->
<section class="py-5 mt-5">
    <div class="container">

        <!-- Kata-kata dan Gambar Pemanis -->
        <div class="row align-items-center mb-5">
            <div class="col-md-12 text-center">
                <p class="highlight-quote">
                    "Collaboration and connection drive innovation — let’s build something great together."
                </p>
            </div>
            <div class="col-md-5 mx-auto">
                <hr>
            </div>
        </div>

        <!-- Konten Utama: Alamat & Form -->
        <div class="row g-4">
            <!-- Kiri: Alamat -->
            <div class="col-md-6">
                <!-- KATI -->
                <div class="info-card">
                    <img src="<?= base_url(); ?>assets/vendor/landingpage/image/logo/<?= $profile['logo_comp'] ?>" class="d-block w-25 mb-3" alt="<?= $profile['nama_comp'] ?>">
                    <div class="card-body">
                        <p class="mb-1 fw-bold"><?= $profile['nama_comp'] ?></p>
                        <p>
                            <?= $profile['alamat'] ?>
                        </p>
                        <p>
                            <strong><i class="fa-solid fa-phone"></i></strong> <?= $profile['contact_1'] ?> / <?= $profile['contact_2'] ?>
                        </p>



                        <div class="map-responsive mt-3">
                            <iframe
                                width="100%"
                                height="450"
                                frameborder="0"
                                style="border:0"
                                src="https://www.google.com/maps?q=<?= urlencode($profile['nama_comp'] . $profile['alamat']) ?>&output=embed"
                                allowfullscreen>
                            </iframe>

                        </div>
                    </div>
                </div>


                <!-- EATI -->
                <div class="info-card">
                    <img src="<?= base_url(); ?>assets/vendor/landingpage/image/logo/eati.png" class="d-block w-25 mb-3" alt="Kojima Logo">
                    <div class="card-body">
                        <p class="mb-1 fw-bold">PT Echo Advanced Technology Indonesia</p>
                        <p>KIM, Jl. Mitra Raya II Blok E3, Parungmulya, Kec. Ciampel, Karawang, Jawa Barat 41363</p>
                        <strong><i class="fa-solid fa-phone"></i></strong> (0267) 8631685</p>
                        <div class="map-responsive mt-3">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.137550659418!2d107.31264467378232!3d-6.376238462368442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6975dd461c22ad%3A0x6711747ed75b7f1e!2sPT%20Echo%20Advanced%20Technology%20Indonesia!5e0!3m2!1sen!2sid!4v1746900834167!5m2!1sen!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kanan: Form -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h5 class="fw-bold mb-4">Send Us a Message</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="you@example.com">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Number Phone</label>
                            <div class="input-group">
                                <div class="input-group-text p-0 border-0">
                                    <input id="phone" name="phone" type="tel" class="form-control border-end-0"
                                        style="width: 90px;">
                                </div>
                                <input type="text" class="form-control" placeholder="nomor"
                                    aria-label="Phone number only">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select Country</option>
                                <option value="1">Indonesia</option>
                                <option value="2">Malaysia</option>
                                <option value="3">Singapure</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="5"
                                placeholder="Write your message here..."></textarea>
                        </div>
                        <button type="submit" class="btn kojimacolor w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end content contact -->