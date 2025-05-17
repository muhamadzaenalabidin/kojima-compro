<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top nav-underline">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url($navbrand['link_brand']); ?>">
            <?php if ($navbrand['brand_image_status'] === 'on') : ?>
                <img src="<?= base_url('assets/vendor/landingpage/image/navbrand/' . $navbrand['image']); ?>" alt="<?= $navbrand['nama_brand']; ?> Logo">
            <?php else : ?>
                <span class="text-<?= $navbrand['warna']; ?> fw-bold"><?= $navbrand['nama_brand']; ?></span>
            <?php endif; ?>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <?php $current_uri = uri_string(); ?>
                <?php foreach ($menu as $m): ?>
                    <?php if ($m['dropdown'] === 'on'): ?>
                        <?php
                        // Cek apakah salah satu submenu aktif
                        $is_parent_active = false;
                        foreach ($submenu as $s) {
                            if ($s['id_menu'] == $m['id_menu'] && $s['link_submenu'] == $current_uri) {
                                $is_parent_active = true;
                                break;
                            }
                        }
                        ?>
                        <li class="nav-item dropdown linkvan">
                            <a class="nav-link dropdown-toggle <?= $is_parent_active ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown">
                                <?= $m['nama_menu']; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php foreach ($submenu as $s): ?>
                                    <?php if ($s['id_menu'] == $m['id_menu']): ?>
                                        <li>
                                            <a class="dropdown-item linkvan <?= $current_uri == $s['link_submenu'] ? 'active' : ''; ?>" href="<?= base_url($s['link_submenu']); ?>">
                                                <?= $s['nama_submenu']; ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item linkvan">
                            <a class="nav-link <?= $m['link'] == $current_uri ? 'active' : ''; ?>" href="<?= base_url($m['link']); ?>">
                                <?= $m['nama_menu']; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>