<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Customers</h5>
                        <p class="text-sm"><a href="<?= base_url('customers/tambahcust'); ?>" class="btn btn-primary btn-sm">Tambah <i class="bi bi-file-earmark-plus-fill"></i></a></p>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($customers as $cust) : ?>
                                    <tr>
                                        <th scope="row"><?= $no; ?></th>
                                        <td>
                                            <img src="<?= base_url('assets/vendor/landingpage/image/cust/') . $cust['logo_cust']; ?>" class="img-thumbnail w-50" alt="<?= $cust['logo_cust']; ?>">
                                        </td>
                                        <td><?= $cust['nama_cust']; ?></td>
                                        <td><?= $cust['alamat_cust']; ?></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="<?= base_url('customers/editcustomers/' . $cust['id_cust']); ?>" class="btn btn-warning btn-sm tmbl-edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="<?= base_url('customers/hapuscustomers/' . $cust['id_cust']); ?>" class="btn btn-danger btn-sm tmbl-hapus">
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