<div class="modal fade" id="edit<?= $kel->id_kelas  ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-pencil-square"></i> Form Ubah Data: <?= $kel->nama_kelas  ?></h4>
        </div>
        <form class="" action="<?= base_url('admin/kelas/ubah')  ?>" method="post">
          <div class="modal-body">

            <?php $this->load->view('backend/admin/kelas/index/tabel-kelas/modal-edit/form') ?>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" value="tambah" name="tambah">Ubah</button>
          </div>
        </form>
      </div>

    </div>
  </div>
