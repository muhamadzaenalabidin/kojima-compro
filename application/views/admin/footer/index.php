<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Groups di Footer</h5>

                        <?= $this->session->flashdata('message'); ?>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Logo Perusahaan</th>
                                    <th scope="col">Nama Perusahaan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($footerstatus as $footer) : ?>
                                    <tr>
                                        <th scope="row"><?= $no; ?></th>
                                        <td>
                                            <img src="<?= base_url('assets/vendor/landingpage/image/groups/') . $footer['logo_gcomp']; ?>" alt="Logo footer" class="img-thumbnail" style="width: 50px; height: 50px;">
                                        </td>
                                        <td><?= $footer['nama_gcomp']; ?></td>
                                        <td>
                                            <?= $footer['status']; ?>
                                            <i class="bi bi-lightbulb-fill <?= $footer['status'] == 'on' ? 'text-success' : 'text-secondary'; ?>"></i>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="<?= base_url('footer/ubahfooter/') . $footer['id_footer']; ?>" class="btn btn-warning btn-sm tmbl-edit">
                                                    <i class="bi bi-pencil-square"></i>
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