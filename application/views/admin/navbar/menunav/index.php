<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Menu Navbar</h5>

                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                            <a href="<?= base_url('navbar/addMenuNav'); ?>" class="btn btn-primary btn-sm">Tambah <i class="bi bi-file-earmark-plus-fill"></i></a>
                            <a href="<?= base_url('navbar'); ?>" class="btn btn-secondary btn-sm">Kembali</a>
                        </div>

                        <?= $this->session->flashdata('message'); ?>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Menu</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Dropdown</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($menunav as $menus) : ?>
                                    <tr>
                                        <th scope="row"><?= $no; ?></th>
                                        <td><?= $menus['nama_menu']; ?></td>
                                        <td>
                                            <?= $menus['link']; ?> <i class="bi bi-link-45deg"></i>

                                        </td>
                                        <td>
                                            <?= $menus['dropdown']; ?>
                                            <i class="bi bi-lightbulb-fill <?= $menus['dropdown'] == 'on' ? 'text-success' : 'text-secondary'; ?>"></i>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="<?= base_url('navbar/editMenuNav/' . $menus['id_menu']); ?>" class="btn btn-warning btn-sm tmbl-edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="<?= base_url('navbar/hapusMenuNav/' . $menus['id_menu']); ?>" class="btn btn-danger btn-sm tmbl-hapus">
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