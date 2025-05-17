<main id="main" class="main">
    <div class="flashdata-error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form tambah Category Product</h5>

                        <!-- General Form Elements -->
                        <?= form_open_multipart('categoryproducts/editCategory/' . $category['id_category']); ?>

                        <input type="hidden" name="id_product" value="<?= $category['id_category']; ?>">
                        <input type="hidden" name="old_gambar" value="<?= $category['gambar_category']; ?>">


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Category Product</label>
                            <div class="col-sm-9">
                                <input name="namacategory" type="text" class="form-control <?= form_error('namacategory') ? 'is-invalid' : '' ?>" value="<?= $category['nama_category']; ?>">
                                <?= form_error('namacategory', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Gambar Product</label>
                            <div class="col-sm-4">
                                <img src="<?= base_url('assets/vendor/landingpage/image/catpart/') . $category['gambar_category']; ?>" class="img-thumbnail" alt="<?= $category['nama_category']; ?>">
                            </div>
                            <div class="col-sm-5">
                                <input name="gambarcategory" type="file" class="form-control <?= form_error('gambarcategory') ? 'is-invalid' : '' ?>" value="<?= $category['gambar_category']; ?>">
                                <?= form_error('gambarcategory', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-sm tmbl-form-edit">Simpan</button>
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