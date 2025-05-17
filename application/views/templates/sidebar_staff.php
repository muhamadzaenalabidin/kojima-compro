  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?= $active == 'dashboard' ? 'active' : 'collapsed'; ?>" href="<?= base_url('staff'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link <?= $active == 'kelland' ? 'active' : 'collapsed'; ?>" href="pages-contact.html">
          <i class="bi bi-window"></i>
          <span>Kelola Landing</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed tmbl-logout" href="<?= base_url('auth/logout') ?>">
          <i class="bi bi-box-arrow-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->