<div class="modal fade" id="tambah" role="dialog">
    <div class="modal-dialog" style="width: 1080px;">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Daftar Ujian</h4>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <p><code>Berikut merupakan daftar ujian yang dapat ditambahkan pada kelas</code></p>
          </div>
          <?php $this->load->view('backend/admin/kelas/ujian/modal-ujian/tabel-ujian') ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
