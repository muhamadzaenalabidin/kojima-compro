<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form tambah Menu Navbar</h5>

                        <!-- General Form Elements -->
                        <form method="post" action="">

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama Menu</label>
                                <div class="col-sm-9">
                                    <input name="namamenunav" type="text" class="form-control <?= form_error('namamenunav') ? 'is-invalid' : '' ?>" value="<?= set_value('namamenunav'); ?>">
                                    <?= form_error('namamenunav', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Link Menu</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-link-45deg"></i></span>
                                        <input name="linkmenu" type="text" class="form-control <?= form_error('linkmenu') ? 'is-invalid' : '' ?>" value="<?= set_value('linkmenu'); ?>">
                                        <?= form_error('linkmenu', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Dropdown Menu</label>
                                <div class="col-sm-9 mt-2">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" value="on" id="flexSwitchCheckDefault" name="dropdownmenu" <?= set_checkbox('dropdownmenu', 'on'); ?>>
                                        <label class="form-check-label text-sm text-secondary">Secara default opsi off</label>
                                        <?= form_error('dropdownmenu', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                    <a href="<?= base_url('navbar/manageNavMenu') ?>" class="btn btn-warning btn-sm">Kembali</a>
                                </div>
                            </div>

                        </form>
                        <!-- End General Form Elements -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>