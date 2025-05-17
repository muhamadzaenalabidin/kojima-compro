<main id="main" class="main">
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Daftar Pengguna</h5>
            <p class="text-sm"><a href="<?= base_url('admin/tambahPengguna'); ?>" class="btn btn-primary btn-sm">Tambah <i class="bi bi-person-plus-fill"></i></a></p>
            <?= $this->session->flashdata('message'); ?>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">User</th>
                  <th scope="col">Section</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1;
                foreach ($pengguna as $p) : ?>
                  <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $p['nama']; ?></td>
                    <td>@<?= $p['username']; ?></td>
                    <td><?= $p['devisi']; ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?= base_url('admin/editPengguna/') . $p['id_user']; ?>" class="btn btn-warning btn-sm tmbl-edit">
                          <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="<?= base_url('admin/hapusPengguna/') . $p['id_user']; ?>" class="btn btn-danger btn-sm tmbl-hapus">
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