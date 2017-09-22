<section class="content-header">
  <h1>
    Pilih Soal
    <small>Menambahkan soal pada ujian: <?= ucwords($ujian->nama_ujian) ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?= base_url('admin/dashboard')  ?>">Dashboard</a></li>
    <li><a href="<?= base_url('admin/ujian')  ?>">Ujian</a></li>
    <li><a href="<?= base_url('admin/ujian/soal?ujian=').$ujian->id_ujian  ?>">Soal ujian</a></li>
    <li class="active">Pilih soal</li>
  </ol>
</section>

<section class="content">

  <!-- <pre><?= print_r($ujian,1) ?></pre>
  <pre><?= print_r($soal,1) ?></pre> -->

  <div class="row">
    <div class="col-md-12">
      <?php $this->load->view('backend/admin/ujian/pilih-soal/tabel-soal') ?>
    </div>
  </div>
</section>
