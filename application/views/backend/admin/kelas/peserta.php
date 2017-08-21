<section class="content-header">
  <h1>
    Peserta
    <small>Daftar Lengkap Peserta Pada Kelas</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?= base_url('admin/dashboard')  ?>"> Dashboard</a></li>
    <li><a href="<?= base_url('admin/Kelas')  ?>"> Kelas</a></li>
    <li class="active"><?= ucwords(strtolower($kelas->nama_kelas)) ?></li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= ucwords(strtolower($kelas->nama_kelas)).': '.$kelas->tahun_kelas ?></h3>

          <?php $this->load->view('backend/admin/kelas/peserta/modal-tambah') ?>
          <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambah">
            <i class="fa fa-plus"></i> Tambah Peserta
          </button>

        </div>
        <div class="box-body">

          <?php if ($peserta==null): ?>
            <div class="callout callout-warning">
              <h4><i class="fa fa-warning"></i> Perhatian!</h4>
              <p>Tidak ada peserta di kelas <?= ucwords(strtolower($kelas->nama_kelas)) ?>.</p>
            </div>
          <?php else: ?>
            <?php $this->load->view('backend/admin/kelas/peserta/tabel-peserta') ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>
