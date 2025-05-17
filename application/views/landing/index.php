<!-- Carousel -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="<?= base_url() ?>/assets/vendor/landingpage/image/slider/slide1.jpeg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption text-start text-white">
                <h1>Two Thousand Thirteen - 2013</h1>
                <p>Our production line is designed to support our manufacturing technology with maximum performance.
                </p>
                <a href="<?= base_url('landing/product') ?>" class="btn kojimacolor me-2">Read More</a>
                <a href="<?= base_url('landing/contact') ?>" class="btn btn-outline-light">Join Us</a>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="<?= base_url() ?>/assets/vendor/landingpage/image/slider/slide2.jpeg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption text-start text-white">
                <h1>Technology & Innovation</h1>
                <p>We bring cutting-edge solutions to meet modern automotive demands.</p>
                <a href="<?= base_url('landing/product') ?>" class="btn kojimacolor me-2">Explore</a>
                <a href="<?= base_url('landing/contact') ?>" class="btn btn-outline-light">Join Us</a>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="<?= base_url() ?>/assets/vendor/landingpage/image/slider/slide1.jpeg" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption text-start text-white">
                <h1>Global Collaboration</h1>
                <p>Working with partners across the globe to deliver quality and efficiency.</p>
                <a href="#ourcust" class="btn kojimacolor me-2">Partnership</a>
                <a href="<?= base_url('landing/contact') ?>" class="btn btn-outline-light">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>

<!-- body -->
<div class="container mt-5 pt-5">
    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h2 class="fw-bold">Welcome to <span class="text-kojima">Kijima Auto Technology</span></h2>
            <p>Your trusted partner in automotive solutions.</p>
        </div>
        <div class="col-md-10 mt-3 mx-auto text-center">
            <img src="<?= base_url() ?>/assets/vendor/landingpage/image/kojima-network.png" class="img-fluid d-block" alt="...">
        </div>
    </div>
    <div class="col-md-5 mt-5 mx-auto">
        <hr>
    </div>
</div>

<!-- product -->
<div class="container py-5 mt-5">
    <h2 class="text-center mb-4 fw-bold">Our Category Product</h2>
    <div class="row g-4 justify-content-center mt-3">


        <?php foreach ($category as $c) : ?>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card h-100 text-center shadow-sm">
                    <img src="<?= base_url() ?>/assets/vendor/landingpage/image/catpart/<?= $c['gambar_category'] ?>" class="card-img-top p-3" alt="<?= $c['nama_category'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $c['nama_category'] ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- end product -->

<!-- our customer -->
<section class="py-5 mb-5" id="ourcust">
    <div class="container mb-5">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-md-12">
                <h2 class="text-center mb-4 fw-bold">Our Customer</h2>
                <hr width="50%" class="mx-auto mb-4" />
                <div class="swiper mySwiperCust">
                    <div class="swiper-wrapper mb-5 align-items-center">

                        <?php foreach ($customers as $cust) : ?>
                            <div class="swiper-slide">
                                <img src="<?= base_url(); ?>assets/vendor/landingpage/image/cust/<?= $cust['logo_cust'] ?>"
                                    alt="<?= $cust['nama_cust'] ?>" class="img-fluid" />
                            </div>
                        <?php endforeach; ?>
                        <!-- Tambah slide lainnya sesuai kebutuhan -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end our customer -->