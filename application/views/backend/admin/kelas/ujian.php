<section class="content-header">
  <h1>
    Daftar Ujian
    <small>Daftar Ujian Pada Kelas: <?= ucwords(strtolower($kelas->nama_kelas)) ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?= base_url('admin/dashboard')  ?>"> Dashboard</a></li>
    <li><a href="<?= base_url('admin/kelas')  ?>"> Kelas</a></li>
    <li><a href="<?= base_url('admin/kelas/detail?kelas=').$kelas->id_kelas  ?>"><?= strtoupper($kelas->kode_kelas) ?></a></li>
    <li class="active">Pilih Ujian</li>
  </ol>
</section>
<section class="content">
  <div class="row">
      <div class="col-md-12">
        <?php $this->load->view('backend/admin/kelas/ujian/kelas-ujian') ?>
      </div>
  </div>
</section>
