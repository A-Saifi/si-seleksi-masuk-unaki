
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kategori Ujian
      <small>Daftar Lengkap Kategori Ujian</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?= base_url('admin/dashboard')  ?>">Dashboard</a></li>
      <li class="active">Kategori Ujian</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">

      <div class="col-md-6">

        <?php $this->load->view('backend/admin/kategori_ujian/index/tabel') ?>

      </div>

      <div class="col-md-6">

        <?php $this->load->view('backend/admin/kategori_ujian/index/form') ?>

      </div>

    </div>

  </section>
  <!-- /.content -->
