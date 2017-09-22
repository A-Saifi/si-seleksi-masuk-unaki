<!-- Default box -->
<div class="box">
  <div class="box-header with-border">
    <i class="fa fa-question-circle"></i>
    <h3 class="box-title">Daftar Soal</h3>
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Soal</button>

    <?php $this->load->view('backend/admin/soal/index/tabel-soal/modal-tambah') ?>

  </div>
  <div class="box-body">
    <?php $this->load->view('backend/admin/soal/index/tabel-soal/tabel-soal') ?>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    Footer
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->
