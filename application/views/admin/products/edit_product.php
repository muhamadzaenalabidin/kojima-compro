<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form tambah Product</h5>
                        <div class="flashdata-error" data-error="<?= $this->session->flashdata('error'); ?>"></div>


                        <!-- General Form Elements -->
                        <?= form_open_multipart('products/editProduct/' . $product['id_product']); ?>




                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Product</label>

                            <!-- Hidden -->
                            <input type="hidden" name="id_product" value="<?= $product['id_product']; ?>">
                            <input type="hidden" name="old_gambar" value="<?= $product['image_product']; ?>">

                            <div class="col-sm-9">
                                <input name="namaproduct" type="text" class="form-control <?= form_error('namaproduct') ? 'is-invalid' : '' ?>" value="<?= $product['nama_product']; ?>">
                                <?= form_error('namaproduct', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Deskripsi Product</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" class="form-control <?= form_error('deskripsi') ? 'is-invalid' : '' ?>" rows="5">
                                    <?= $product['deskripsi_product']; ?>
                                </textarea>
                                <?= form_error('deskripsi', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <!-- Gambar -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Gambar Product</label>
                            <div class="col-sm-4">
                                <img src="<?= base_url('assets/vendor/landingpage/image/part/') . $product['image_product']; ?>" class="img-thumbnail" alt="<?= $product['nama_product']; ?>">
                            </div>
                            <div class="col-sm-5">
                                <input name="gambar" type="file" class="form-control">
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Hotspot</label>
                            <div class="col-sm-9">
                                <input name="hotspot" type="text" class="form-control <?= form_error('hotspot') ? 'is-invalid' : '' ?>" value="<?= $product['hotspot']; ?>">
                                <?= form_error('hotspot', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Hotspot Position - Top</label>
                            <div class="col-sm-9">
                                <input name="hotspottop" type="text" class="form-control <?= form_error('hotspottop') ? 'is-invalid' : '' ?>" value="<?= $product['right_hotspot']; ?>">
                                <?= form_error('hotspottop', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Hotspot Position - Left</label>
                            <div class="col-sm-9">
                                <input name="hotspotleft" type="text" class="form-control <?= form_error('hotspotleft') ? 'is-invalid' : '' ?>" value="<?= $product['left_hotspot']; ?>">
                                <?= form_error('hotspotleft', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-sm tmbl-form-edit">Simpan</button>
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