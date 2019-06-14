<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <div class="text-center">
      <?= $this->session->flashdata('pesan'); ?>
    </div>
  </div>
  <div class="col-md-4"></div>
</div>
<div class="login-box">
  <div class="login-logo">
    <b>Sekolah</b>Yogyakarta
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan masuk ke dalam sistem</p>

    <form action="<?= base_url('auth') ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username') ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?= form_error('username', '<small class="text-danger">', '</small>') ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->