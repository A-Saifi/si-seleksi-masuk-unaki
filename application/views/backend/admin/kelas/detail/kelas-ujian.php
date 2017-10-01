<div class="box">
  <div class="box-header with-border">
    <i class="fa fa-file-text-o"></i>
    <h3 class="box-title">Daftar Ujian</h3>
  </div>
  <div class="box-body">
    <?php if (!empty($ujian_kelas)): ?>
      <?php $this->load->view('backend/admin/kelas/detail/tabel-ujian') ?>
    <?php else: ?>
      <div class="callout callout-warning">
        <h4><i class="fa fa-warning"></i> Perhatian!</h4>
        <p>Tidak ada ujian di kelas <?= ucwords(strtolower($kelas->nama_kelas)) ?>.</p>
        <p>Tambahkan ujian terlebih dahulu</p>
      </div>
    <?php endif; ?>
  </div>
  <div class="box-footer">
    <a href="<?= base_url('admin/kelas') ?>" type="button" class="btn btn-default pull-left">
      Kembali
    </a>
    <?php $this->load->view('backend/admin/kelas/ujian/modal-ujian') ?>
    <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#tambah_ujian">
      <i class="fa fa-server"></i> Tambah Ujian
    </button>
  </div>
</div>
