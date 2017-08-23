<div class="modal fade" id="editkontak" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-pencil"></i> Edit Kontak Informasi</h4>
        </div>
        <form class="" action="<?= base_url('admin/peserta/ubah?kontak=y&id='.$peserta->id_peserta.'&username='.$peserta->username_peserta.'&kelas='.$kelas->id_kelas)  ?>" method="post">
          <div class="modal-body">

            <?php $this->load->view('backend/admin/peserta/detail-kelas/biodata/kontak-informasi/modal-edit/form') ?>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary" value="tambah" name="tambah">Simpan</button>
          </div>
        </form>
      </div>

    </div>
  </div>
