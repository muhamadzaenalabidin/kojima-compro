<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form tambah Submenu Navbar</h5>

                        <!-- General Form Elements -->
                        <form method="post" action="">

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama Submenu</label>
                                <div class="col-sm-9">
                                    <input name="submenunav" type="text" class="form-control <?= form_error('submenunav') ? 'is-invalid' : '' ?>" value="<?= set_value('submenunav'); ?>">
                                    <?= form_error('submenunav', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Link Submenu</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-link-45deg"></i></span>
                                        <input name="linksubmenu" type="text" class="form-control <?= form_error('linksubmenu') ? 'is-invalid' : '' ?>" value="<?= set_value('linksubmenu'); ?>">
                                        <?= form_error('linksubmenu', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Menu Induk</label>
                                <div class="col-sm-9">
                                    <select name="menuinduk" class="form-select <?= form_error('menuinduk') ? 'is-invalid' : '' ?>">
                                        <option value="">Pilih Menu Induk</option>
                                        <?php foreach ($menunav as $menu) : ?>
                                            <option value="<?= $menu['id_menu']; ?>" <?= set_select('menuinduk', $menu['id_menu']) ?>>
                                                <?= $menu['nama_menu']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('menuinduk', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                    <a href="<?= base_url('navbar/manageNavSubmenu') ?>" class="btn btn-warning btn-sm">Kembali</a>
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