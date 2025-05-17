<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form tambah Pengguna baru</h5>

                        <!-- General Form Elements -->
                        <form method="post" action="">

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input name="nama" type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" value="<?= set_value('nama'); ?>">
                                    <?= form_error('nama', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input name="username" type="text" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" value="<?= set_value('username'); ?>">
                                        <?= form_error('username', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Section</label>
                                <div class="col-sm-9">
                                    <select name="section" class="form-select <?= form_error('section') ? 'is-invalid' : '' ?>">
                                        <option value="">Pilih Section</option>
                                        <option value="hrd" <?= set_select('section', 'hrd') ?>>HRD</option>
                                        <option value="marketing" <?= set_select('section', 'marketing') ?>>Marketing</option>
                                        <option value="painting" <?= set_select('section', 'painting') ?>>Painting</option>
                                    </select>
                                    <?= form_error('section', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Role</label>
                                <div class="col-sm-9">
                                    <select name="role" class="form-select <?= form_error('role') ? 'is-invalid' : '' ?>">
                                        <option value="">Pilih Role</option>
                                        <option value="1" <?= set_select('role', '1') ?>>Admin</option>
                                        <option value="2" <?= set_select('role', '2') ?>>Staff</option>
                                    </select>
                                    <?= form_error('role', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input name="password1" type="password" class="form-control <?= form_error('password1') ? 'is-invalid' : '' ?>">
                                    <?= form_error('password1', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Retype Password</label>
                                <div class="col-sm-9">
                                    <input name="password2" type="password" class="form-control <?= form_error('password2') ? 'is-invalid' : '' ?>">
                                    <?= form_error('password2', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                    <a href="<?= base_url('admin/pengguna') ?>" class="btn btn-warning btn-sm">Kembali</a>
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