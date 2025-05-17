<main id="main" class="main">
    <div class="pagetitle mb-5">
        <h1>Navbar</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kelola Navbar</h5>

                        <!-- List group With Icons -->
                        <ul class="list-group">
                            <li class="list-group-item">
                                <i class="bi bi-menu-app-fill me-1"></i>
                                Navbrand
                                <a href="<?= base_url('navbar/manageNavbrand') ?>" class="btn btn-sm btn-primary float-end">
                                    <i class="bi bi-gear-fill me-1"></i>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-menu-app-fill me-1"></i>
                                Menu
                                <a href="<?= base_url('navbar/manageNavMenu') ?>" class="btn btn-sm btn-primary float-end">
                                    <i class="bi bi-gear-fill me-1"></i>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <i class="bi bi-menu-app-fill me-1"></i>
                                Submenu
                                <a href="<?= base_url('navbar/manageNavSubmenu') ?>" class="btn btn-sm btn-primary float-end">
                                    <i class="bi bi-gear-fill me-1"></i>
                                </a>
                            </li>

                        </ul><!-- End List group With Icons -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>