<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Kojima Groups</h5>
                        <p class="text-sm"><a href="<?= base_url('groups/addgroups'); ?>" class="btn btn-primary btn-sm">Tambah <i class="bi bi-person-plus-fill"></i></a></p>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Logo Perusahaan</th>
                                    <th scope="col">Nama Perusahaan</th>
                                    <th scope="col">Alamat Perusahaan</th>
                                    <th scope="col">Contact Perusahaan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($groups as $perusahaan) : ?>
                                    <tr>
                                        <th scope="row"><?= $no; ?></th>
                                        <td>
                                            <img src="<?= base_url('assets/vendor/landingpage/image/groups/') . $perusahaan['logo_gcomp']; ?>" alt="Logo Perusahaan" class="img-thumbnail" style="width: 50px; height: 50px;">
                                        </td>
                                        <td><?= $perusahaan['nama_gcomp']; ?></td>
                                        <td><?= $perusahaan['alamat_group']; ?></td>
                                        <td>
                                            <?= $perusahaan['contactgroup_1']; ?> <br>
                                            <?= $perusahaan['contactgroup_2']; ?>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="<?= base_url('groups/updategroups/') . $perusahaan['id_group']; ?>" class="btn btn-warning btn-sm tmbl-edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="<?= base_url('groups/deletegroups/') . $perusahaan['id_group']; ?>" class="btn btn-danger btn-sm tmbl-hapus">
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