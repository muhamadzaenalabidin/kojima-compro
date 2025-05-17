<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Products</h5>
                        <p class="text-sm"><a href="<?= base_url('products/tambahProduct'); ?>" class="btn btn-primary btn-sm">Tambah <i class="bi bi-file-earmark-plus-fill"></i></a></p>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Hotspot</th>
                                    <th scope="col">Hotspot Position</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($products as $p) : ?>
                                    <tr>
                                        <th scope="row"><?= $no; ?></th>
                                        <td><?= $p['nama_product']; ?></td>
                                        <td><?= $p['deskripsi_product']; ?></td>
                                        <td>
                                            <img src="<?= base_url('assets/vendor/landingpage/image/part/') . $p['image_product']; ?>" class="img-thumbnail" alt="<?= $p['nama_product']; ?>">
                                        </td>
                                        <td><?= $p['hotspot']; ?></td>
                                        <td>
                                            top <?= $p['right_hotspot']; ?>% <br> left <?= $p['left_hotspot']; ?>%
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="<?= base_url('products/editProduct/' . $p['id_product']); ?>" class="btn btn-warning btn-sm tmbl-edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="<?= base_url('products/hapusProduct/' . $p['id_product']); ?>" class="btn btn-danger btn-sm tmbl-hapus">
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