<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form ubah data Pengguna</h5>

                        <!-- General Form Elements -->
                        <form method="post" action="">

                            <input type="hidden" name="id_user" value="<?= $pengguna['id_user']; ?>">

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input name="nama" type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" value="<?= $pengguna['nama']; ?>">
                                    <?= form_error('nama', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input name="username" type="text" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" value="<?= $pengguna['username']; ?>">
                                        <?= form_error('username', '<div class="invalid-feedback">', '</div>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Section</label>
                                <div class="col-sm-9">
                                    <select name="section" class="form-select <?= form_error('section') ? 'is-invalid' : '' ?>">
                                        <option value="">Pilih Section</option>
                                        <option value="hrd" <?= $pengguna['devisi'] == 'hrd' ? 'selected' : ''; ?>>HRD</option>
                                        <option value="marketing" <?= $pengguna['devisi'] == 'marketing' ? 'selected' : ''; ?>>Marketing</option>
                                        <option value="painting" <?= $pengguna['devisi'] == 'painting' ? 'selected' : ''; ?>>Painting</option>
                                    </select>
                                    <?= form_error('section', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Role</label>
                                <div class="col-sm-9">
                                    <select name="role" class="form-select <?= form_error('role') ? 'is-invalid' : '' ?>">
                                        <option value="">Pilih Role</option>
                                        <option value="1" <?= $pengguna['role_id'] == '1' ? 'selected' : ''; ?>>Admin</option>
                                        <option value="2" <?= $pengguna['role_id'] == '2' ? 'selected' : ''; ?>>Staff</option>
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
                                    <button type="submit" class="btn btn-primary btn-sm tmbl-form-edit">Simpan</button>
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