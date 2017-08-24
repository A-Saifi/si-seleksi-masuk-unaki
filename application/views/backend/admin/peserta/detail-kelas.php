<section class="content-header">
  <h1>
    Biodata
    <small>Detail Lengkap Peserta: <?= ucwords(strtolower($kelas->nama_kelas)) ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?= base_url('admin/dashboard')  ?>"> Dashboard</a></li>
    <li><a href="<?= base_url('admin/Kelas')  ?>"> Kelas</a></li>
    <li><a href="<?= base_url('admin/kelas/detail?kelas='.$kelas->id_kelas)  ?>"><?= strtoupper($kelas->kode_kelas) ?></a></li>
    <li class="active">Peserta</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-widget">
        <div class="box-body">
          <?php $this->load->view('backend/admin/peserta/detail-kelas/biodata') ?>
        </div>
        <div class="box-footer">
          <?php if ($this->input->get('daftar')!=null): ?>
            <a href="<?= base_url('admin/kelas/detail?kelas='.$kelas->id_kelas)  ?>" class="btn btn-primary pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>
          <?php endif; ?>
          <?php if ($this->input->get('peserta')!=null): ?>
            <a href="<?= base_url('admin/peserta')  ?>" class="btn btn-primary pull-left"><i class="fa fa-arrow-left"></i> Kembali</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
