<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Achievement Kojima</h5>
                        <p class="text-sm"><a href="<?= base_url('achievement/addachieve') ?>" class="btn btn-primary btn-sm">Tambah <i class="bi bi-person-plus-fill"></i></a></p>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Achievement</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($achievements as $ach) : ?>
                                    <tr>
                                        <th scope="row"><?= $no; ?></th>
                                        <td><?= $ach['tahun']; ?></td>
                                        <td>
                                            <img src="<?= base_url('assets/vendor/landingpage/image/achievement/') . $ach['dokumen']; ?>" alt="Logo Achievement" class="img-thumbnail" style="width: 100px; height: 100px;">
                                        </td>
                                        <td><?= $ach['nama_ach']; ?></td>
                                        <td><?= $ach['deskripsi']; ?></td>

                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="<?= base_url('achievement/editachieve/') . $ach['id_ach']; ?>" class="btn btn-warning btn-sm tmbl-edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="<?= base_url('achievement/deleteachieve/') . $ach['id_ach']; ?>" class="btn btn-danger btn-sm tmbl-hapus">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>