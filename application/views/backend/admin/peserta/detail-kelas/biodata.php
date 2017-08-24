<div class="row">
  <div class="col-md-6">
    <div class="box box-widget widget-user-2">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-teal">
            <div class="widget-user-image">
              <img class="img-circle" src="<?= base_url('assets/images/avatars/')  ?>user-11.png" alt="User Avatar">
            </div>
            <!-- /.widget-user-image -->
            <h3 class="widget-user-username"><?= $peserta->nama_peserta ?></h3>
            <h5 class="widget-user-desc">Peserta</h5>
          </div>
          <div class="box-footer no-padding">

          </div>
        </div>
        <?php $this->load->view('backend/admin/peserta/detail-kelas/biodata/informasi-login') ?>

        <?php $this->load->view('backend/admin/peserta/detail-kelas/biodata/kontak-informasi') ?>
  </div>

  <div class="col-md-6">
    <?php $this->load->view('backend/admin/peserta/detail-kelas/biodata/informasi-umum') ?>
  </div>
</div>
