<header class="main-header">
  <!-- Logo -->
  <a href="<?= base_url('home'); ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>S</b>S</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Sistem</b>Sekolah</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- <img src="<?= base_url() ?>assets/img/cici.png" class="user-image" alt="User Image"> -->
            <span class="hidden-xs">Halo, <?= $username; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?= base_url() ?>assets/img/cici.png" class="img-circle" alt="User Image">

              <p>
                <?= $username ?> - <?= $role ?>
                <small>Sistem Manajemen Sekolah</small>
              </p>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>