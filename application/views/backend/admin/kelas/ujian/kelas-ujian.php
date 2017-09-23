<div class="box">
  <div class="box-header with-border">
    <i class="fa fa-file-text-o"></i>
    <h3 class="box-title">Daftar Ujian</h3>

    <?php $this->load->view('backend/admin/kelas/ujian/modal-ujian') ?>
    <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambah">
      <i class="fa fa-plus"></i> Pilih Ujian
    </button>

  </div>
  <div class="box-body">
    <?php $this->load->view('backend/admin/kelas/ujian/tabel-ujian') ?>
  </div>
  <div class="box-footer">
    <a href="<?= base_url('admin/kelas/detail?kelas=').$kelas->id_kelas ?>" type="button" class="btn btn-default pull-left">
      Kembali
    </a>
  </div>
</div>
