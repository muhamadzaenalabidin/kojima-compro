<main id="main" class="main">
    <div class="flashdata-error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <?php if ($this->session->flashdata('message')) : ?>
                            <?= $this->session->flashdata('message'); ?>
                        <?php endif; ?>
                        <h5 class="card-title">Form ubah data Kojima Group</h5>

                        <!-- General Form Elements -->
                        <?= form_open_multipart('groups/updategroups/' . $group['id_group']); ?>

                        <input type="hidden" name="idgcomp" value="<?= $group['id_group']; ?>">
                        <input type="hidden" name="logo_gcomp_lama" value="<?= $group['logo_gcomp']; ?>">

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-9">
                                <input name="namagcomp" type="text" class="form-control <?= form_error('namagcomp') ? 'is-invalid' : '' ?>" value="<?= $group['nama_gcomp']; ?>">
                                <?= form_error('namagcomp', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Contact Perusahaan</label>
                            <div class="col-sm-9">
                                <input name="contactgcomp1" type="text" class="form-control <?= form_error('contactgcomp1') ? 'is-invalid' : '' ?>" value="<?= $group['contactgroup_1']; ?>">
                                <?= form_error('contactgcomp1', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Contact Perusahaan</label>
                            <div class="col-sm-9">
                                <input name="contactgcomp2" type="text" class="form-control <?= form_error('contactgcomp2') ? 'is-invalid' : '' ?>" value="<?= $group['contactgroup_2']; ?>">
                                <?= form_error('contactgcomp2', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Alamat Perusahaan</label>
                            <div class="col-sm-9">
                                <textarea name="alamatperusahaan" class="form-control <?= form_error('alamatperusahaan') ? 'is-invalid' : '' ?>" rows="5"><?= $group['alamat_group']; ?></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Logo Perusahaan</label>
                            <div class="col-sm-9">
                                <img src="<?= base_url('assets/vendor/landingpage/image/groups/' . $group['logo_gcomp']); ?>" class="img-thumbnail mb-2" width="150">
                                <input name="logo_gcomp" type="file" class="form-control <?= form_error('logo_gcomp') ? 'is-invalid' : '' ?>">
                                <?= form_error('logo_gcomp', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-sm tmbl-form-edit">Simpan</button>
                                <a href="<?= base_url('groups') ?>" class="btn btn-warning btn-sm">Kembali</a>
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