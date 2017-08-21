  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kelas
      <small>Daftar Lengkap Kelas</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?= base_url('admin/dashboard')  ?>"> Dashboard</a></li>
      <li class="active">Kelas</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box">
              <div class="box-header">

                <button class="btn btn-primary" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Kelas</button>
                <?php $this->load->view('backend/admin/kelas/index/modal-tambah') ?>

              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <?php if ($kelas!=null): ?>
                  <?php $this->load->view('backend/admin/kelas/index/tabel-kelas') ?>
                <?php else: ?>
                  <div class="callout callout-warning">
                    <h4><i class="fa fa-warning"></i> Perhatian!</h4>
                    <p>Tidak ada data kelas, silahkan tambahkan data kelas terlebih dahulu.</p>
                  </div>
                <?php endif; ?>
                
              </div>
              <!-- /.box-body -->
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
