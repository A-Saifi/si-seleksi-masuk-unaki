<div class="box">
  <div class="box-header with-border">
    <i class="fa fa-pencil-square"></i>
    <h3 class="box-title">Form</h3>
  </div>
  <form action="<?= base_url('admin/kategori_ujian/tambah') ?>" method="post">
    <div class="box-body">
      <?php $this->load->view('backend/admin/kategori_ujian/index/form/form') ?>
    </div>

    <div class="box-footer">
      <button type="submit" name="button" class="btn btn-primary">Simpan</button>
    </div>
  </form>

</div>
