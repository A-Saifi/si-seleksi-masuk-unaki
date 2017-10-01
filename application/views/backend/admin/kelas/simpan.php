<section class="content-header">
  <h1>
    Form Ujian: <?= $ujian->nama_ujian ?>
    <small>Menambahkan waktu ujian</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?= base_url('admin/dashboard')  ?>"> Dashboard</a></li>
    <li><a href=""> Kelas</a></li>
    <li><a href="<?= base_url('admin/Kelas/detail').'?kelas='.$kelas->id_kelas  ?>"><?= strtoupper($kelas->kode_kelas) ?></a></li>
    <li class="active">Form Ujian</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-6">
      <?php $this->load->view('backend/admin/kelas/simpan/detail-ujian') ?>
    </div>
    <div class="col-md-6">
      <?php $this->load->view('backend/admin/kelas/simpan/form-ujian') ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?php $this->load->view('backend/admin/kelas/simpan/jawaban-ujian') ?>
    </div>
  </div>
</section>
