<main id="main" class="main">
    <div class="flashdata-error" data-error="<?= $this->session->flashdata('error'); ?>"></div>
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form tambah Milestones Kojima Project</h5>

                        <!-- General Form Elements -->
                        <?= form_open_multipart('milestones/updatemilestones/' . $milestones['id_milestone']); ?>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Tahun</label>
                            <div class="col-sm-9">
                                <select name="tahun" id="tahun" class="form-select <?= form_error('tahun') ? 'is-invalid' : '' ?>">
                                    <option value="">Pilih tahun</option>
                                    <?php foreach ($tahun_list as $th) : ?>
                                        <option value="<?= $th ?>" <?= $milestones['tahun']  == $th ? 'selected' : '' ?>><?= $th ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('tahun', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>

                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Deskripsi Project</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" class="form-control <?= form_error('deskripsi') ? 'is-invalid' : '' ?>" rows="5"><?= $milestones['deskripsi']; ?></textarea>
                                <?= form_error('deskripsi', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Gambar</label>
                            <div class="col-sm-4">
                                <img src="<?= base_url('assets/vendor/landingpage/image/milestone/') . $milestones['image']; ?>" alt="Logo mdata" class="img-thumbnail" style="width: 150px; height: 100px;">
                            </div>
                            <div class="col-sm-5">
                                <input name="image" type="file" class="form-control <?= form_error('image') ? 'is-invalid' : '' ?>">
                                <?= form_error('image', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-sm tmbl-form-edit">Simpan</button>
                                <a href="<?= base_url('milestones') ?>" class="btn btn-warning btn-sm">Kembali</a>
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