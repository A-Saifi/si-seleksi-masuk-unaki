<section class="content-header">
  <h1>
    Form Ubah Soal
    <small>Kode Soal <?= $soal->id_soal ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?= base_url('admin/dashboard')  ?>">Dashboard</a></li>
    <li><a href="<?= base_url('admin/soal')  ?>">Soal</a></li>
    <li class="active">Ubah</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-12">
      <?php $this->load->view('backend/admin/soal/ubah/soal') ?>
    </div>
  </div>
</section>
