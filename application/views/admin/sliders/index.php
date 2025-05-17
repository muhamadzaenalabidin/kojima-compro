<main id="main" class="main">
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Slider</h5>
                        <p class="text-sm"><a href="<?= base_url('slider/addslider'); ?>" class="btn btn-primary btn-sm">Tambah <i class="bi bi-file-earmark-plus-fill"></i></a></p>
                        <?= $this->session->flashdata('message'); ?>
                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">image</th>
                                    <th scope="col">Text Utama</th>
                                    <th scope="col">Text Tambahan</th>
                                    <th scope="col">Text Tombol</th>
                                    <th scope="col">Link Tombol</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($slider as $slide) : ?>
                                    <tr>
                                        <th scope="row"><?= $no; ?></th>
                                        <td>
                                            <img src="<?= base_url('assets/vendor/landingpage/image/slider/') . $slide['image_slide']; ?>" class="img-thumbnail w-50" alt="<?= $slide['image_slide']; ?>">
                                        </td>
                                        <td><?= $slide['headline']; ?></td>
                                        <td><?= $slide['desk']; ?></td>
                                        <td>
                                            1. <?= $slide['tombol_text1']; ?> <br>
                                            2. <?= $slide['tombol_text2']; ?>
                                        </td>
                                        <td>
                                            1. <?= $slide['tombol_link1']; ?> <br>
                                            2. <?= $slide['tombol_link2']; ?>
                                        </td>
                                        <td>
                                            <?= $slide['aktif']; ?>
                                            <i class="bi bi-lightbulb-fill <?= $slide['aktif'] == 'on' ? 'text-success' : 'text-secondary'; ?>"></i>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="<?= base_url('slider/editslider/' . $slide['id_slider']); ?>" class="btn btn-warning btn-sm tmbl-edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="<?= base_url('slider/hapusslider/' . $slide['id_slider']); ?>" class="btn btn-danger btn-sm tmbl-hapus">
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