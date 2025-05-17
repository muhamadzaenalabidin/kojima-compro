  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?= $active == 'dashboard' ? 'active' : 'collapsed'; ?>" href="<?= base_url('admin'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?= $active == 'pengguna' ? 'active' : 'collapsed'; ?>" href="<?= base_url('admin/pengguna'); ?>">
          <i class="bi bi-people"></i>
          <span>Pengguna</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-heading">Komponen Landing</li>

      <li class="nav-item">
        <a class="nav-link <?= $active == 'kelland' ? 'active' : 'collapsed'; ?>" href="<?= base_url('navbar'); ?>">
          <i class="bi bi-window"></i>
          <span>Navbar</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link <?= $active == 'slider' ? 'active' : 'collapsed'; ?>" href="<?= base_url('slider'); ?>">
          <i class="bi bi-window"></i>
          <span>Slider</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-heading">Data Perusahaan</li>

      <li class="nav-item">
        <a class="nav-link <?= $active == 'profile' ? 'active' : 'collapsed'; ?>" href="<?= base_url('profilecompany'); ?>">
          <i class="bi bi-window"></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= $active == 'categoryproduct' ? 'active' : 'collapsed'; ?>" href="<?= base_url('categoryproducts'); ?>">
          <i class="bi bi-window"></i>
          <span>Category Product</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= $active == 'customers' ? 'active' : 'collapsed'; ?>" href="<?= base_url('customers'); ?>">
          <i class="bi bi-window"></i>
          <span>Customer</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= $active == 'products' ? 'active' : 'collapsed'; ?>" href="<?= base_url('products'); ?>">
          <i class="bi bi-window"></i>
          <span>Products</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?= $active == 'group' ? 'active' : 'collapsed'; ?>" href="<?= base_url('groups'); ?>">
          <i class="bi bi-window"></i>
          <span>Company Group</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed tmbl-logout" href="<?= base_url('auth/logout') ?>">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->