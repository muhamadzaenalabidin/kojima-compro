<!-- header page -->
<section class="py-5 text-white mt-5" style="background: url('<?= base_url(); ?>assets/vendor/landingpage/image/bg-header.png') center/cover no-repeat;">
    <div class="container">
        <h2 class="fw-bold">Company Milestone</h2>
    </div>
</section>
<!-- end header page -->

<!-- milestone -->
<section style="background-color: #F0F2F5;">
    <div class="container py-5">
        <div class="main-timeline-2">

            <?php $i = 0; ?>
            <?php foreach ($milestones as $datamt) : ?>
                <?php $posisi = ($i % 2 === 0) ? 'left-2' : 'right-2'; ?>
                <div class="timeline-2 <?= $posisi ?> text-center">
                    <div class="card">
                        <img src="<?= base_url(); ?>assets/vendor/landingpage/image/milestone/<?= $datamt['image']; ?>"
                            class="mx-auto w-50 mt-4" alt="Responsive image">
                        <div class="card-body p-4">
                            <h3 class="fw-bold mb-4 text-kojima"><?= $datamt['tahun']; ?></h3>
                            <p class="mb-0 text-secondary">
                                <?= $datamt['deskripsi']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- end milestone -->