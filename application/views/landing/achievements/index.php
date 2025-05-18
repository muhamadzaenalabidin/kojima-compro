<!-- header page -->
<section class="py-5 text-white mt-5" style="background: url('<?= base_url(); ?>assets/vendor/landingpage/image/bg-header.png') center/cover no-repeat;">
    <div class="container">
        <h2 class="fw-bold">Achievements</h2>
    </div>
</section>
<!-- content achievement -->
<section class="py-5">
    <div class="container">
        <!-- Highlight Latest Award(s) with Swiper -->
        <?php if (!empty($lastach)) : ?>
            <div class="mb-5">
                <h3 class="text-uppercase fw-bold text-kojima mb-4 text-center mb-5 mt-5">Latest Achievement</h3>
                <?php if (count($lastach) > 1): ?>
                    <!-- Swiper untuk banyak achievement -->
                    <div class="swiper myLatestSwiper mb-5">
                        <div class="swiper-wrapper">
                            <?php foreach ($lastach as $ach) : ?>
                                <div class="swiper-slide">
                                    <div class="row align-items-center p-5">
                                        <div class="col-lg-6 text-center mb-4 mb-lg-0">
                                            <img src="<?= base_url('assets/vendor/landingpage/image/achievement/' . $ach['dokumen']); ?>" alt="<?= $ach['nama_ach']; ?>" class="img-fluid rounded w-75 preview-img" data-caption="<?= $ach['nama_ach']; ?>">
                                        </div>
                                        <div class="col-lg-6">
                                            <h2 class="display-6"><?= $ach['nama_ach']; ?></h2>
                                            <p class="lead"><?= $ach['deskripsi']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-pagination mt-3"></div>
                    </div>
                <?php else: ?>
                    <!-- Tampilkan satu achievement saja -->
                    <?php $ach = $lastach[0]; ?>
                    <div class="row mb-5 align-items-center">
                        <div class="col-lg-6 text-center mb-4 mb-lg-0">
                            <img src="<?= base_url('assets/vendor/landingpage/image/achievement/' . $ach['dokumen']); ?>" alt="<?= $ach['nama_ach']; ?>" class="img-fluid rounded shadow w-75 preview-img" data-caption="<?= $ach['nama_ach']; ?>">
                        </div>
                        <div class="col-lg-6">
                            <h2 class="display-6"><?= $ach['nama_ach']; ?></h2>
                            <p class="lead"><?= $ach['deskripsi']; ?></p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>


        <!-- Awards Slider - ALL Achievements -->
        <div class="text-center mt-5">
            <h4 class="fw-bold">Our Awards</h4>
            <hr width="50%" class="mx-auto mb-4" />
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($allach as $award) : ?>
                        <div class="swiper-slide text-center">
                            <img src="<?= base_url('assets/vendor/landingpage/image/achievement/' . $award['dokumen']); ?>" alt="<?= $award['nama_ach']; ?>" class="preview-img img-fluid w-50 rounded shadow-sm mb-2" data-caption="<?= $award['nama_ach']; ?>">
                            <p class="fw-semibold text-muted"><?= $award['nama_ach']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="swiper-pagination mt-3"></div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Preview -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="" alt="Preview" class="modal-img" id="previewImage" />
                <p class="mt-2" id="previewCaption"></p>
            </div>
        </div>
    </div>
</div>