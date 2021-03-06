
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Peserta Ujian
      <small>Daftar Lengkap Peserta Ujian</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= base_url('admin')  ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?= base_url('admin/dashboard')  ?>"> Dashboard</a></li>
      <li class="active">Peserta</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box">
              <div class="box-header with-border">
                <i class="fa fa-table"></i>
                <h3 class="box-title">Tabel Semua Peserta</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                <?php if ($peserta==null): ?>
                  <div class="callout callout-warning">
                    <h4><i class="fa fa-warning"></i> Perhatian!</h4>
                    <p>Mohon maaf tidak ada peserta.</p>
                  </div>
                <?php else: ?>
                  <?php $this->load->view('backend/admin/peserta/index/tabel-peserta') ?>
                <?php endif; ?>
              </div>
              <!-- /.box-body -->
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
