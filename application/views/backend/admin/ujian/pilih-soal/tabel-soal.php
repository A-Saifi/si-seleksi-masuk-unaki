<!-- Default box -->
<div class="box">
  <div class="box-header">
    <i class="fa fa-question-circle"></i>
    <h3 class="box-title">Daftar Soal</h3>
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i> Tambah Soal</button>

    <?php $this->load->view('backend/admin/ujian/pilih-soal/tabel-soal/modal-tambah') ?>

  </div>
  <div class="box-body">
    <div class="text-center">
      <p><code>Berikut merupakan daftar soal yang dapat ditambahkan pada ujian</code></p>
    </div>
    <?php $this->load->view('backend/admin/ujian/pilih-soal/tabel-soal/tabel-soal') ?>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <a href="<?= base_url('admin/ujian/soal?ujian=').$ujian->id_ujian  ?>" class="btn btn-default">
      Kembali
    </a>
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->
