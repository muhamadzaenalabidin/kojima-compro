<main id="main" class="main">
    <div class="flashdata-error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form tambah Product</h5>

                        <!-- General Form Elements -->
                        <?= form_open_multipart('products/tambahProduct'); ?>


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Product</label>
                            <div class="col-sm-9">
                                <input name="namaproduct" type="text" class="form-control <?= form_error('namaproduct') ? 'is-invalid' : '' ?>" value="<?= set_value('namaproduct'); ?>">
                                <?= form_error('namaproduct', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Deskripsi Product</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" class="form-control <?= form_error('deskripsi') ? 'is-invalid' : '' ?>" rows="5"><?= set_value('deskripsi'); ?></textarea>
                                <?= form_error('deskripsi', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Gambar Product</label>
                            <div class="col-sm-9">
                                <input name="gambar" type="file" class="form-control <?= form_error('gambar') ? 'is-invalid' : '' ?>" value="<?= set_value('gambar'); ?>">
                                <?= form_error('gambar', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Hotspot</label>
                            <div class="col-sm-9">
                                <input name="hotspot" type="text" class="form-control <?= form_error('hotspot') ? 'is-invalid' : '' ?>" value="<?= set_value('hotspot'); ?>">
                                <?= form_error('hotspot', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Hotspot Position - Top</label>
                            <div class="col-sm-9">
                                <input name="hotspottop" type="text" class="form-control <?= form_error('hotspottop') ? 'is-invalid' : '' ?>" value="<?= set_value('hotspottop'); ?>">
                                <?= form_error('hotspottop', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Hotspot Position - Left</label>
                            <div class="col-sm-9">
                                <input name="hotspotleft" type="text" class="form-control <?= form_error('hotspotleft') ? 'is-invalid' : '' ?>" value="<?= set_value('hotspotleft'); ?>">
                                <?= form_error('hotspotleft', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                <a href="<?= base_url('products') ?>" class="btn btn-warning btn-sm">Kembali</a>
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