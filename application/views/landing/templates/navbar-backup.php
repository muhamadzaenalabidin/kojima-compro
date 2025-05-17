<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top nav-underline">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('landing'); ?>">
            <img src="<?= base_url() ?>/assets/vendor/landingpage/image/kojima-logo.png" alt="Kijima Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item linkvan"><a class="nav-link <?= $active == 'home' ? 'active' : ''; ?>" href="<?= base_url('landing'); ?>">Home</a></li>
                <li class="nav-item linkvan"><a class="nav-link <?= $active == 'about' ? 'active' : ''; ?>" href="<?= base_url('landing/about'); ?>">About Us</a></li>
                <li class="nav-item dropdown linkvan">
                    <a class="nav-link dropdown-toggle linkvan <?= $active == 'information' ? 'active' : ''; ?>" href="#" role="button" data-bs-toggle="dropdown">
                        Information
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item linkvan" href="<?= base_url('landing/milestones'); ?>">Milestone</a></li>
                        <li><a class="dropdown-item linkvan" href="<?= base_url('landing/achievements') ?>">Achievement</a></li>
                    </ul>
                </li>
                <li class="nav-item linkvan"><a class="nav-link <?= $active == 'product' ? 'active' : ''; ?>" href="<?= base_url('landing/product'); ?>">Products</a></li>
                <li class="nav-item linkvan"><a class="nav-link <?= $active == 'contact' ? 'active' : ''; ?>" href="<?= base_url('landing/contact'); ?>">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>