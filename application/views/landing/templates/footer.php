<!-- footer -->

<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row align-items-center justify-content-between text-center">
            <!-- Kojima Auto Technology Logo & Address -->
            <div class="col-12 col-md-3 mt-3">
                <img src="<?= base_url() ?>/assets/vendor/landingpage/image/logo/<?= $footercomp['logo_comp']; ?>" class="img-fluid mb-3 footer-logo"
                    alt="<?= $footercomp['nama_comp']; ?>">
                <h5 class="mb-3">
                    <?= $footercomp['nama_comp']; ?>
                </h5>
                <p class="mb-0 small">
                    <?= $footercomp['alamat']; ?>
                </p>
            </div>

            <!-- EATI Logo & Address -->
            <?php foreach ($footergcomp as $group) : ?>
                <div class="col-12 col-md-3 mt-3">
                    <img src="<?= base_url() ?>/assets/vendor/landingpage/image/groups/<?= $group['logo_gcomp']; ?>" class="img-fluid mb-3 footer-logo" alt="<?= $group['nama_gcomp']; ?>">
                    <h5 class="mb-3">
                        <?= $group['nama_gcomp']; ?>
                    </h5>
                    <p class="mb-0 small">
                        <?= $group['alamat_group']; ?>
                    </p>
                </div>
            <?php endforeach; ?>

            <!-- Google Maps -->
            <div class="col-12 col-md-3 mt-3">
                <iframe
                    src="https://www.google.com/maps?q=<?= urlencode($footercomp['nama_comp'] . $footercomp['alamat']) ?>&output=embed"
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row mt-4 align-items-center">
            <hr>
            <div class="col text-center">
                <small class="text-white-50">&copy; 2025 Kojima Auto Technology (Indonesia) Co., Ltd. All Rights
                    Reserved.</small>
            </div>
        </div>
    </div>
</footer>

<!-- end footer -->

<!-- end body -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>
<!-- custom js -->
<script src="<?= base_url() ?>/assets/vendor/landingpage/js/myjs.js"></script>
<script src="<?= base_url() ?>/assets/vendor/landingpage/js/milestones.js"></script>
<script src="<?= base_url() ?>/assets/vendor/landingpage/js/achieve.js"></script>
<script src="<?= base_url() ?>/assets/vendor/landingpage/js/product.js"></script>
<script src="<?= base_url() ?>/assets/vendor/landingpage/js/contact.js"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url() ?>/assets/vendor/landingpage/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>



<!-- end custom js -->

</body>

</html>