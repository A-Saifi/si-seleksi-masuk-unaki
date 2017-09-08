
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Ujian
      <small>Daftar lengkap ujian</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?= base_url('admin/dashboard')  ?>">Dashboard</a></li>
      <li class="active">Ujian</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-8">
        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <i class="fa fa-table"></i>
            <h3 class="box-title">Tabel</h3>
          </div>
          <div class="box-body">
            <?php $this->load->view('backend/admin/ujian/index/tabel-ujian') ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            Footer
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->
      </div>

      <div class="col-md-4">
        <div class="box">
          <div class="box-header with-border">
            <i class="fa fa-pencil-square"></i>
            <h3 class="box-title">Form</h3>
          </div>
          <form action="<?= base_url('admin/ujian/tambah')  ?>" method="post">
          <div class="box-body">
            <?php $this->load->view('backend/admin/ujian/index/form') ?>
          </div>
          <div class="box-footer">
            <button type="submit" name="button" class="btn btn-primary">Simpan</button>
          </div>
        </form>

        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
