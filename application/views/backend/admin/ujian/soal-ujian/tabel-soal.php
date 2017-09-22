<!-- Default box -->
<div class="box">
  <div class="box-header">
    <i class="fa fa-list-alt"></i>
    <h3 class="box-title">Daftar Soal Pada : <?= ucwords(strtolower($ujian->nama_ujian)) ?></h3>
    <a href="<?= base_url('admin/ujian/pilih?ujian=').$ujian->id_ujian ?>" class="btn btn-primary pull-right"><i class="fa fa-thumb-tack"></i> Pilih Soal</a>
  </div>
  <div class="box-body">
    <?php $this->load->view('backend/admin/ujian/soal-ujian/tabel-soal/tabel-soal') ?>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <a href="<?= base_url('admin/ujian')  ?>" class="btn btn-default">
      Kembali
    </a>
  </div>
  <!-- /.box-footer-->
</div>
<!-- /.box -->
