<main id="main" class="main">

    <div class="pagetitle mb-4">
        <h1>Profile Perusahaan</h1>
        <?= $this->session->flashdata('message'); ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <div class="flashdata-error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade profile-overview" id="profile-overview">

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Logo Perusahaan</div>
                                    <div class="col-lg-9 col-md-8">
                                        <img src="<?= base_url('assets/vendor/landingpage/image/logo/' . $profile['logo_comp']) ?>" alt="Logo" class="img-fluid" style="width: 150px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nama Perusahaan</div>
                                    <div class="col-lg-9 col-md-8">
                                        <?= $profile['nama_comp']; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Alamat Perusahaan</div>
                                    <div class="col-lg-9 col-md-8 ">
                                        <?= $profile['alamat']; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kontak Perusahaan </div>
                                    <div class="col-lg-9 col-md-8 ">
                                        <?= $profile['contact_1']; ?>
                                    </div>
                                </div>
                                <?php if ($profile['contact_2'] != null) : ?>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Kontak Perusahaan </div>
                                        <div class="col-lg-9 col-md-8 ">
                                            <?= $profile['contact_2']; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>



                            </div>

                            <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <?= form_open_multipart('profilecompany/index'); ?>

                                <div class="row mb-3">
                                    <label for="logocomp" class="col-md-4 col-lg-3 col-form-label">Logo Perusahaan</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="<?= base_url('assets/vendor/landingpage/image/logo/' . $profile['logo_comp']); ?>" alt="Navbrand" class="img-thumbnail mb-2" style="max-height: 80px;">
                                        <input class="form-control" type="file" id="logocomp" name="logocomp">
                                    </div>
                                    <?= form_error('logocomp', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>

                                <div class="row mb-3">
                                    <label for="namacomp" class="col-md-4 col-lg-3 col-form-label">Nama Perusahaan</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="namacomp" type="text" class="form-control <?= form_error('namacomp') ? 'is-invalid' : '' ?>" id="namacomp" value="<?= $profile['nama_comp']; ?>">
                                    </div>
                                    <?= form_error('namacomp', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>

                                <div class="row mb-3">
                                    <label for="alamatcomp" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="alamatcomp" class="form-control <?= form_error('alamatcomp') ? 'is-invalid' : '' ?>" id="alamatcomp" rows="3"><?= $profile['alamat']; ?></textarea>
                                    </div>
                                    <?= form_error('alamatcomp', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>

                                <div class="row mb-3">
                                    <label for="contactcomp1" class="col-md-4 col-lg-3 col-form-label">Kontak Perusahaan - 1</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="contactcomp1" type="text" class="form-control <?= form_error('contactcomp1') ? 'is-invalid' : '' ?>" id="contactcomp1" value="<?= $profile['contact_1']; ?>">
                                    </div>
                                    <?= form_error('contactcomp1', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>

                                <div class="row mb-3">
                                    <label for="contactcomp2" class="col-md-4 col-lg-3 col-form-label">Kontak Perusahaan - 2</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="contactcomp2" type="text" class="form-control <?= form_error('contactcomp2') ? 'is-invalid' : '' ?>" id="contactcomp2" value="<?= $profile['contact_2']; ?>">
                                    </div>
                                    <?= form_error('contactcomp2', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary tmbl-form-edit">Simpan</button>
                                </div>
                                </form>
                            </div>

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
        </div>
    </section>

</main><!-- End #main -->