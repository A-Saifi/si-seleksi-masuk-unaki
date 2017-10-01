<div class="box">
  <div class="box-header with-border">
    <i class="fa fa-question-circle"></i>
    <h3 class="box-title">Soal</h3>
  </div>
  <div class="box-body">
    <?php $this->load->view('backend/admin/ujian/soal-ujian/tabel-soal/tabel-soal') ?>
  </div>
  <div class="box-footer">
    <a href="<?= base_url('admin/Kelas/detail').'?kelas='.$kelas->id_kelas  ?>" class="btn btn-default pull-left">Kembali</a>
  </div>
</div>
