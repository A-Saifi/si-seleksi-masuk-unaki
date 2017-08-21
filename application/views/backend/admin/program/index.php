
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Program Studi
      <small>Daftar Lengkap Program Studi</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?= base_url('admin/dashboard')  ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active">Program Studi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-8">
        <div class="box">
              <div class="box-header">
                <h3 class="box-title"><i class="fa fa-table"></i> Tabel</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <?php if ($program_studi!=null): ?>
                  <?php $this->load->view('backend/admin/program/index/tabel-program') ?>
                <?php else: ?>
                  <div class="callout callout-warning">
                    <h4><i class="fa fa-warning"></i> Perhatian!</h4>
                    <p>Tidak ada data program studi, silahkan tambahkan data program studi terlebih dahulu.</p>
                  </div>
                <?php endif; ?>

              </div>
              <!-- /.box-body -->
        </div>
      </div>

      <div class="col-md-4">
        <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-pencil-square"></i> Form Program Studi</h3>
              </div>
              <form class="" action="<?= base_url('admin/program/tambah')  ?>" method="post">
              <!-- /.box-header -->
              <div class="box-body">

              <?php $this->load->view('backend/admin/program/index/form-tambah') ?>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right" name="tambah">
                  Simpan
                </button>
              </div>
              </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
