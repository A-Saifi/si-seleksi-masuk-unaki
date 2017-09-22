<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Petugas
    <small>Daftar Petugas</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?= base_url('admin/dashboard')  ?>">Dashboard</a></li>
    <li class="active">Petugas</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
            <div class="box-header with-border">

              <i class="fa fa-table"></i>

              <h3 class="box-title">Tabel</h3>

              <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Petugas</button>

              <?php $this->load->view('backend/admin/petugas/index/modal-tambah') ?>

            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <?php $this->load->view('backend/admin/petugas/index/tabel-petugas') ?>

            </div>
            <!-- /.box-body -->
          </div>

    </div>
  </div>
</section>
