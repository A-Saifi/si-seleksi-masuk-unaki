
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Soal
      <small>Daftar Lengkap Soal</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?= base_url('admin/dashboard')  ?>">Dashboard</a></li>
      <li class="active">Soal</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <?php $this->load->view('backend/admin/soal/index/tabel-soal') ?>
      </div>
    </div>

  </section>
  <!-- /.content -->
