<main id="main" class="main">
    <div class="flashdata-error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form tambah Category Product</h5>

                        <!-- General Form Elements -->
                        <?= form_open_multipart('categoryproducts/tambahCategory'); ?>


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Category Product</label>
                            <div class="col-sm-9">
                                <input name="namacategory" type="text" class="form-control <?= form_error('namacategory') ? 'is-invalid' : '' ?>" value="<?= set_value('namacategory'); ?>">
                                <?= form_error('namacategory', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Gambar Product</label>
                            <div class="col-sm-9">
                                <input name="gambarcategory" type="file" class="form-control <?= form_error('gambarcategory') ? 'is-invalid' : '' ?>" value="<?= set_value('gambarcategory'); ?>">
                                <?= form_error('gambarcategory', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                <a href="<?= base_url('categoryproducts') ?>" class="btn btn-warning btn-sm">Kembali</a>
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