<!-- header page -->
<section class="py-5 text-white mt-5" style="background: url('<?= base_url(); ?>assets/vendor/landingpage/image/bg-header.png') center/cover no-repeat;">
    <div class="container">
        <h2 class="fw-bold">Our Product</h2>
    </div>
</section>
<!-- end header page -->

<!-- image hotspot -->
<section class="py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="position-relative" style="max-width: 1000px; margin: auto;">
                    <!-- Gambar interior mobil -->
                    <img src="<?= base_url(); ?>assets/vendor/landingpage/image/cars.jpg" alt="Interior" class="img-fluid">

                    <?php foreach ($product as $spot) : ?>

                        <!-- Hotspot 1 -->
                        <div class="hotspot" style="top: <?= $spot['right_hotspot']; ?>%; left: <?= $spot['left_hotspot']; ?>%;" data-bs-toggle="tooltip" title="<?= $spot['nama_product']; ?>">
                            <a href="#<?= $spot['hotspot']; ?>"><i class="bi bi-circle-fill"></i></a>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end image hotspor -->

<!-- product list -->
<section class="py-5 bg-light">
    <div class="container mb-5">
        <h2 class="text-center mb-5 fw-bold">Our Products</h2>
        <div class="row g-4">

            <?php foreach ($product as $part) : ?>
                <div class="col-12 col-md-4" id="<?= $part['hotspot']; ?>">
                    <div class="card h-100 shadow-sm">
                        <img src="<?= base_url(); ?>assets/vendor/landingpage/image/part/<?= $part['image_product']; ?>" class="card-img-top" alt="<?= $part['nama_product']; ?>" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $part['nama_product']; ?></h5>
                            <p class="card-text"><?= $part['deskripsi_product']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>