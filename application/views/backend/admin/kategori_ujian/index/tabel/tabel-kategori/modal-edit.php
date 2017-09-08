<div class="modal fade" id="edit<?= $kategori->id_kategori_ujian  ?>" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><i class="fa fa-pencil-square"></i> Form Ubah Data: </h4>
        </div>
        <form class="" action="<?= base_url('admin/kategori_ujian/ubah')  ?>" method="post">
          <div class="modal-body">

            <div class="form-group">
              <label>Nama Kategori</label>
              <input type="text" class="form-control" name="nama_kategori_ujian" placeholder="Tuliaskan nama kategori ..." required value="<?= $kategori->nama_kategori_ujian ?>">
            </div>

            <input type="hidden" name="id_kategori_ujian" value="<?= $kategori->id_kategori_ujian ?>">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>

            <button type="submit" class="btn btn-primary" value="ubah" name="ubah">Ubah</button>
          </div>
        </form>
      </div>

    </div>
  </div>
