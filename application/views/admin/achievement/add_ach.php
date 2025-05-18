<main id="main" class="main">
    <div class="flashdata-error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form tambah Achievement Kojima</h5>

                        <!-- General Form Elements -->
                        <?= form_open_multipart('achievement/addachieve'); ?>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tahun</label>
                            <div class="col-sm-9">
                                <select name="tahun" id="tahun" class="form-select <?= form_error('tahun') ? 'is-invalid' : '' ?>">
                                    <option value="">Pilih tahun</option>
                                    <?php foreach ($tahun_list as $th) : ?>
                                        <option value="<?= $th ?>" <?= set_value('tahun') == $th ? 'selected' : '' ?>><?= $th ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('tahun', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Achievement</label>
                            <div class="col-sm-9">
                                <input name="nama_ach" type="text" class="form-control <?= form_error('nama_ach') ? 'is-invalid' : '' ?>" value="<?= set_value('nama_ach'); ?>">
                                <?= form_error('nama_ach', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Deskripsi Achievement</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" class="form-control <?= form_error('deskripsi') ? 'is-invalid' : '' ?>" rows="5"><?= set_value('deskripsi'); ?></textarea>
                                <?= form_error('deskripsi', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Dokumen/Gambar Sertifikat</label>
                            <div class="col-sm-9">
                                <input name="image" type="file" class="form-control <?= form_error('image') ? 'is-invalid' : '' ?>">
                                <?= form_error('image', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                <a href="<?= base_url('achievement') ?>" class="btn btn-warning btn-sm">Kembali</a>
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