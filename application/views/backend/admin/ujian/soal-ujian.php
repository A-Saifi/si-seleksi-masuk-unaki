<section class="content-header">
  <h1>
    <?= ucwords($ujian->nama_ujian) ?>
    <small>Data lengkap dan Soal pada ujian</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?= base_url('admin/dashboard')  ?>">Dashboard</a></li>
    <li><a href="<?= base_url('admin/ujian')  ?>">Ujian</a></li>
    <li class="active">Soal ujian</li>
  </ol>
</section>

<section class="content">

  <!-- <pre><?= print_r($ujian,1) ?></pre>
  <pre><?= print_r($soal,1) ?></pre> -->

  <div class="row">
    <div class="col-md-12">
      <?php $this->load->view('backend/admin/ujian/soal-ujian/tabel-soal') ?>
    </div>
  </div>
</section>
