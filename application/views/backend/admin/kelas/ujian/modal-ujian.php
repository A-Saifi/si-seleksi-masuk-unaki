<div class="modal fade" id="tambah_ujian" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-calendar-plus-o"></i> Pilih Ujian</h4>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <p><code>Berikut merupakan daftar ujian yang dapat ditambahkan pada kelas</code></p>
          </div>
          <?php $this->load->view('backend/admin/kelas/ujian/tabel-ujian') ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        </div>
      </div>

    </div>
  </div>
