<div class="box">
  <div class="box-header with-border">
    <i class="fa fa-file-text-o"></i>
    <h3 class="box-title">Daftar Ujian</h3>
  </div>
  <div class="box-body">
    <?php $this->load->view('backend/admin/kelas/detail/tabel-ujian') ?>
  </div>
  <div class="box-footer">
    <!-- <a href="<?= base_url('admin/kelas/detail?kelas=').$kelas->id_kelas ?>" type="button" class="btn btn-default pull-left">
      Kembali
    </a> -->
    <a href="<?= base_url('admin/kelas') ?>" type="button" class="btn btn-default pull-left">
      Kembali
    </a>
    <?php $this->load->view('backend/admin/kelas/ujian/modal-ujian') ?>
    <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#tambah_ujian">
      <i class="fa fa-server"></i> Tambah Ujian
    </button>
  </div>
</div>
