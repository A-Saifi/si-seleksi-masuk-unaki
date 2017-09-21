<div class="modal fade" id="detail_<?= $soal->id_soal ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-newspaper-o"></i> Detail Soal</h4>
        </div>
          <div class="modal-body">
            <?php $this->load->view('backend/admin/soal/index/tabel-soal/modal-detail/detail') ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Kembali</button>
          </div>
      </div>

    </div>
  </div>
