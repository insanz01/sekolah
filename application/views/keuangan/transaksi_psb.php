<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Sistem Keuangan
      <small>Transaksi Penerimaan Siswa Baru</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Transaksi masuk</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Tabel Transaksi Siswa Baru</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="pmb" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Siswa</th>
                  <th>Username</th>
                  <th>Tanggal Bayar</th>
                  <th>Bukti Pembayaran</th>
                  <th>Pembayaran</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Palui</td>
                  <td>palui01</td>
                  <td>Fri, 17 Aug 1945</td>
                  <td><img src="" alt="foto bukti pembayaran"></td>
                  <td>Pendaftaran</td>
                  <td>
                    <a href="<?= base_url('keuangan/verifikasi/') ?>" class="btn btn-primary">Verifikasi</a>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Siswa</th>
                  <th>Username</th>
                  <th>Tanggal Bayar</th>
                  <th>Bukti Pembayaran</th>
                  <th>Pembayaran</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>
  </section>
</div>