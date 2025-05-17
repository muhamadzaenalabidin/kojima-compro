<main id="main" class="main">
    <div class="flashdata-error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form tambah Customers</h5>

                        <!-- General Form Elements -->
                        <?= form_open_multipart('customers/tambahcust'); ?>


                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Nama Customer</label>
                            <div class="col-sm-9">
                                <input name="namacust" type="text" class="form-control <?= form_error('namacust') ? 'is-invalid' : '' ?>" value="<?= set_value('namacust'); ?>">
                                <?= form_error('namacust', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Alamat Customer</label>
                            <div class="col-sm-9">
                                <textarea name="alamatcust" class="form-control <?= form_error('alamatcust') ? 'is-invalid' : '' ?>" rows="5"><?= set_value('alamatcust'); ?></textarea>
                                <?= form_error('alamatcust', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Logo Cust</label>
                            <div class="col-sm-9">
                                <input name="logo_cust" type="file" class="form-control <?= form_error('logo_cust') ? 'is-invalid' : '' ?>" value="<?= set_value('logo_cust'); ?>">
                                <?= form_error('logo_cust', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                                <a href="<?= base_url('customers') ?>" class="btn btn-warning btn-sm">Kembali</a>
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