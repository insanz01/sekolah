<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url() ?>assets/img/cici.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Modul <?= $role; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">APLIKASI UTAMA</li>
      <?php foreach ($menu as $m) : ?>
        <li>
          <a href="<?= base_url($m['path']); ?>">
            <i class="<?= $m['icon'] ?>"></i> <span><?= $m['nama']; ?></span>
          </a>
        </li>
      <?php endforeach; ?>
      <li class="header">LABELS</li>
      <li><a href="<?= base_url('home/stok_habis'); ?>"><i class="fa fa-circle-o text-red"></i> <span>Stok Habis</span></a></li>
      <li><a href="<?= base_url('home/stok_hampir_habis'); ?>"><i class="fa fa-circle-o text-yellow"></i> <span>Stok Hampir Habis</span></a></li>
      <li><a href="<?= base_url('home/best_seller'); ?>"><i class="fa fa-circle-o text-aqua"></i> <span>Best Seller</span></a></li>
      <li class="header">LAINNYA</li>
      <li><a href="#" data-toggle="modal" data-target="#modal-logout">Keluar</a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<div class="modal fade" id="modal-logout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Keluar dari sistem ?</h4>
      </div>
      <div class="modal-body">
        <p>Tekan tombol "keluar" jika ingin keluar dari sistem dan menghapus session.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <a href="<?= base_url('auth/logout') ?>" class="btn btn-primary">Keluar</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->