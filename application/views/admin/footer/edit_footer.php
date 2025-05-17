<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="">
                            <h5 class="card-title">Ubah Status info footer</h5>
                            <p class="text-sm text-muted">Ubah statu untuk tampil atau tidak di halaman footer</p>
                            <div class="row mb-3 mt-5 align-items-center">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('assets/vendor/landingpage/image/groups/') . $footerstatus['logo_gcomp']; ?>" alt="Logo footer" class="img-fluid rounded" style="width:60">
                                </div>
                                <div class="col-sm-8">
                                    <h3 class="text-sm text-muted"><?= $footerstatus['nama_gcomp']; ?></h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <div class="form-check form-switch">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="flexSwitchCheckDefault"
                                            name="status"
                                            value="on"
                                            <?= $footerstatus['status'] === 'on' ? 'checked' : '' ?>>
                                        <label>
                                            Tampil / Tidak tampilkan di footer
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary tmbl-form-edit btn-sm">Simpan</button>
                                    <a href="<?= base_url('footer') ?>" class="btn btn-warning btn-sm">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>