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

        <div class="row g-4 align-items-center mb-5">
            <div class="col-md-6 text-center">
                <p class="highlight-quote">
                    "Collaboration and connection drive innovation — let’s build something great together."
                </p>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <h5 class="fw-bold mb-4">Send Us a Message</h5>
                    <!-- Alert Flashdata -->
                    <!-- Alert Flashdata -->
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('success'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php elseif ($this->session->flashdata('error')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('error'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?= base_url('landing/contact') ?>">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>" value="<?= set_value('name') ?>">
                            <div class="invalid-feedback"><?= form_error('name') ?></div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" value="<?= set_value('email') ?>">
                            <div class="invalid-feedback"><?= form_error('email') ?></div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Number Phone</label>
                            <input id="phone" name="phone" type="tel" class="form-control <?= form_error('phone_full') ? 'is-invalid' : '' ?>">
                            <input type="hidden" name="phone_full" id="phone_full" value="<?= set_value('phone_full') ?>">
                            <div class="invalid-feedback"><?= form_error('phone_full') ?></div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-select <?= form_error('country') ? 'is-invalid' : '' ?>" name="country">
                                <option value="">Select Country</option>
                                <option value="Indonesia" <?= set_select('country', 'Indonesia') ?>>Indonesia</option>
                                <option value="Malaysia" <?= set_select('country', 'Malaysia') ?>>Malaysia</option>
                                <option value="Singapure" <?= set_select('country', 'Singapure') ?>>Singapure</option>
                            </select>
                            <div class="invalid-feedback"><?= form_error('country') ?></div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control <?= form_error('message') ? 'is-invalid' : '' ?>" name="message" rows="5"><?= set_value('message') ?></textarea>
                            <div class="invalid-feedback"><?= form_error('message') ?></div>
                        </div>

                        <button type="submit" class="btn kojimacolor w-100">Send Message</button>
                    </form>
                </div>
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
            </div>

            <?php foreach ($groups as $g) : ?>

                <div class="col-md-6">
                    <div class="info-card">
                        <img src="<?= base_url(); ?>assets/vendor/landingpage/image/groups/<?= $g['logo_gcomp'] ?>" class="d-block w-25 mb-3" alt="Kojima Logo">
                        <div class="card-body">
                            <p class="mb-1 fw-bold"><?= $g['nama_gcomp'] ?></p>
                            <p>
                                <?= $g['alamat_group'] ?>
                            </p>
                            <strong><i class="fa-solid fa-phone"></i></strong> <?= $g['contactgroup_1'] ?> <?= ($g['contactgroup_2']) ? '/ ' . $g['contactgroup_2'] : '' ?></p>
                            <div class="map-responsive mt-3">
                                <div class="map-responsive mt-3">
                                    <iframe
                                        width="100%"
                                        height="450"
                                        frameborder="0"
                                        style="border:0"
                                        src="https://www.google.com/maps?q=<?= urlencode($g['nama_gcomp'] . $g['alamat_group']) ?>&output=embed"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- end content contact -->