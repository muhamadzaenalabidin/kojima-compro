<main id="main" class="main">

    <div class="pagetitle mb-4">
        <h1>Navbar Brand</h1>
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
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Navbrand</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade profile-overview" id="profile-overview">

                                <h5 class="card-title">Navbrand Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Navbrand Text</div>
                                    <div class="col-lg-9 col-md-8">
                                        <?= $navbrand['nama_brand']; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Navbrand Warna Text</div>
                                    <div class="col-lg-9 col-md-8 ">
                                        <span class="badge bg-<?= $navbrand['warna']; ?> text-light">
                                            <?= $navbrand['warna']; ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Navbrand Image</div>
                                    <div class="col-lg-9 col-md-8">
                                        <img src="<?= base_url('assets/vendor/landingpage/image/navbrand/' . $navbrand['image']) ?>" alt="Logo" class="img-fluid" style="width: 150px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Status Navbrand Image</div>
                                    <?php
                                    $isActive = $navbrand['brand_image_status'] === 'on';

                                    // Status properties
                                    $badgeProps = [
                                        'class' => $isActive ? 'bg-success' : 'bg-secondary',
                                        'icon'  => $isActive ? 'bi-check-circle' : 'bi-x-circle',
                                        'label' => $isActive ? 'Aktif' : 'Nonaktif'
                                    ];
                                    ?>
                                    <div class="col-lg-9 col-md-8">
                                        <span class="badge <?= $badgeProps['class']; ?>">
                                            <i class="bi <?= $badgeProps['icon']; ?>"></i>
                                            <?= $badgeProps['label']; ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Link Navbrand</div>
                                    <div class="col-lg-9 col-md-8 fst-italic text-decoration-underline">
                                        <?= $navbrand['link_brand']; ?>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <?= form_open_multipart('navbar/manageNavbrand'); ?>
                                <input type="hidden" name="id_brand" value="<?= $navbrand['id_brand']; ?>">


                                <div class="row mb-3">
                                    <label for="navbrandimg" class="col-md-4 col-lg-3 col-form-label">Navbar Brand Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="<?= base_url('assets/vendor/landingpage/image/navbrand/' . $navbrand['image']); ?>" alt="Navbrand" class="img-thumbnail mb-2" style="max-height: 80px;">
                                        <input class="form-control" type="file" id="navbrandimg" name="navbrandimg">
                                    </div>
                                    <?= form_error('navbrandimg', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>

                                <div class="row mb-3 align-items-center">
                                    <label class="col-md-4 col-lg-3 col-form-label" for="navbrandstatus">Navbar Status</label>
                                    <div class="col-md-8 col-lg-9 d-flex align-items-center">
                                        <div class="form-check form-switch">
                                            <?php
                                            // cek status
                                            $is_checked = ($navbrand['brand_image_status'] === 'on');
                                            echo form_checkbox([
                                                'name'    => 'navbrandstatus',
                                                'id'      => 'navbrandstatus',
                                                'value'   => $is_checked ? 'on' : 'off',
                                                'checked' => $is_checked,
                                                'class'   => 'form-check-input'
                                            ]);
                                            ?>
                                            <label class="form-check-label ms-2" id="statusLabel" for="navbrandstatus">
                                                <?= $is_checked ? 'On' : 'Off'; ?>
                                            </label>
                                        </div>
                                    </div>
                                    <?= form_error('navbrandstatus', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>


                                <div class="row mb-3">
                                    <label for="navbrandtext" class="col-md-4 col-lg-3 col-form-label">Navbar Text</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="navbrandtext" type="text" class="form-control <?= form_error('navbrandtext') ? 'is-invalid' : '' ?>" id="navbrandtext" value="<?= $navbrand['nama_brand']; ?>">
                                    </div>
                                    <?= form_error('navbrandtext', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>

                                <div class="row mb-3">
                                    <label for="textcolor" class="col-md-4 col-lg-3 col-form-label">Text Color</label>
                                    <div class="col-md-8 col-lg-9">
                                        <select name="textcolor" id="textcolor" class="form-select <?= form_error('textcolor') ? 'is-invalid' : '' ?>">
                                            <?php foreach ($colors as $value => $label): ?>
                                                <option value="<?= $value ?>" data-custom-properties='{"class":"bg-<?= $value ?> text-white"}'
                                                    <?= ($navbrand['warna'] === $value) ? 'selected' : '' ?>>
                                                    <?= $label ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <?= form_error('textcolor', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>


                                <div class="row mb-3">
                                    <label for="linknavbrand" class="col-md-4 col-lg-3 col-form-label">Navbar Text</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="linknavbrand" type="text" class="form-control <?= form_error('linknavbrand') ? 'is-invalid' : '' ?>" id="linknavbrand" value="<?= $navbrand['link_brand']; ?>">
                                    </div>
                                    <?= form_error('linknavbrand', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>



                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary tmbl-form-edit">Save Changes</button>
                                </div>
                                </form>
                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->