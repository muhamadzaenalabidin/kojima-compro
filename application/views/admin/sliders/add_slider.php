<main id="main" class="main">
    <div class="flashdata-error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form tambah Slider</h5>



                        <!-- General Form Elements -->
                        <?= form_open_multipart('slider/addslider', ['class' => 'row g-3']); ?>

                        <div class="col-md-12">
                            <label class="form-label">Text Utama</label>
                            <input name="headline" type="text" class="form-control <?= form_error('headline') ? 'is-invalid' : '' ?>" value="<?= set_value('headline'); ?>">
                            <?= form_error('headline', '<div class="invalid-feedback">', '</div>'); ?>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Text Tambahan</label>
                            <input name="desk" type="text" class="form-control <?= form_error('desk') ? 'is-invalid' : '' ?>" value="<?= set_value('desk'); ?>">
                            <?= form_error('desk', '<div class="invalid-feedback">', '</div>'); ?>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Text Tombol</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">Tombol-1</span>
                                <input name="tombol_text1" type="text" class="form-control <?= form_error('tombol_text1') ? 'is-invalid' : '' ?>" value="<?= set_value('tombol_text1'); ?>">
                                <?= form_error('tombol_text1', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Text Tombol</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">Tombol-2</span>
                                <input name="tombol_text2" type="text" class="form-control <?= form_error('tombol_text2') ? 'is-invalid' : '' ?>" value="<?= set_value('tombol_text2'); ?>">
                                <?= form_error('tombol_text2', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Link Tombol</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">Link-1</span>
                                <input name="tombol_link1" type="text" class="form-control <?= form_error('tombol_link1') ? 'is-invalid' : '' ?>" value="<?= set_value('tombol_link1'); ?>">
                                <?= form_error('tombol_link1', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Link Tombol</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">Link-2</span>
                                <input name="tombol_link2" type="text" class="form-control <?= form_error('tombol_link2') ? 'is-invalid' : '' ?>" value="<?= set_value('tombol_link2'); ?>">
                                <?= form_error('tombol_link2', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Status Slider</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="aktifSwitch" name="aktif">
                                <label class="form-check-label ms-2" for="aktifSwitch">
                                    <span id="statusLabel">Off</span>
                                </label>
                                <?= form_error('aktif', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">Gambar Slider</label>
                            <input name="image_slide" type="file" class="form-control <?= form_error('image_slide') ? 'is-invalid' : '' ?>" value="<?= set_value('image_slide'); ?>">
                            <?= form_error('image_slide', '<div class="invalid-feedback">', '</div>'); ?>
                        </div>

                        <div class="col-md-12 mt-3">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a href="<?= base_url('slider') ?>" class="btn btn-warning btn-sm">Kembali</a>
                        </div>

                        </form>
                        <!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>