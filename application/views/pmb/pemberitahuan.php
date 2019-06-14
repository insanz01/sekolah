<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sistem Penerimaan Siswa Baru
      <small>Berita dan Notifikasi</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Notifikasi</a></li>
      <li class="active">Pemberitahuan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12" style="padding: 10px">
        <button type="button" data-toggle="modal" data-target="#modal-pemberitahuan" class="btn btn-primary pull-right">Tambah Pemberitahuan</button>
      </div>
    </div>
    <div class="row">
      <?php for ($i = 0; $i < 4; $i++) : ?>
        <div class="col-md-4">
          <div class="box box-solid">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Headline <?= $i + 1; ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex nostrum expedita repellat placeat quibusdam, sint, quas mollitia est ut possimus porro. Eveniet repudiandae dolores ex ipsam amet, doloribus vero error!</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      <?php endfor; ?>

    </div>
  </section>

</div>

<div class="modal fade" id="modal-pemberitahuan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Pemberitahuan</h4>
      </div>
      <form action="<?= base_url('home/tambah_pemberitahuan'); ?>" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" placeholder="Ketik di sini...">
          </div>
          <label for="isi">Isi Konten</label>
          <textarea class="textarea" name="isi" rows="10" cols="80" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->