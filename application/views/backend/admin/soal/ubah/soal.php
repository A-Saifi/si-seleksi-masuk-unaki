<div class="box">
  <div class="box-header with-border">
    <i class="fa fa-pencil-square-o"></i>
    <h3 class="box-title">Soal</h3>
    <a href="#" class="btn btn-default btn-xs pull-right">
      <i class="fa fa-trash"></i>
    </a>
  </div>
  <form action="<?= base_url('admin/soal/ubah?soal=').$soal->id_soal.'&simpan=ya' ?>" method="post" enctype="multipart/form-data">
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <input type="hidden" name="id_soal" value="<?= $soal->id_soal ?>">
          <div class="form-group">
            <label>Soal</label>
            <textarea rows="4" name="pertanyaan_soal" class="form-control" required><?= $soal->pertanyaan_soal ?></textarea>
          </div>

          <?php if ($soal->gambar_soal==null): ?>
            <div class="form-group">
              <label>Gambar</label>
              <input type="file" id="gambar_soal" name="gambar_soal">
              <p class="help-block">Maksimal file 4MB (JPG, PNG)</p>
            </div>
          <?php else: ?>
            <div class="form-group">
              <label>Gambar</label><br>
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#imagemodal">
                <i class="fa fa-picture-o"></i> Lihat Gambar
              </button>

              <p class="help-block">Klik untuk melihat gambar</p>
            </div>

            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Gambar</h4>
                  </div>
                  <div class="modal-body">
                    <center>
                      <img src="<?= base_url('assets/images/soal/').$soal->gambar_soal ?>" class="img-responsive" id="imagepreview" alt="Gambar pada soal">
                    </center>
                  </div>
                  <div class="modal-footer">
                    <a href="<?= base_url('admin/soal/hapus_gambar?id_soal=').$soal->id_soal ?>" class="btn btn-danger pull-left" onclick="return confirm('Yakin ingin menghapus gambar pada soal ini ?');">
                      <i class="fa fa-trash"></i> Hapus Gambar
                    </a>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-reply"></i> Tutup</button>
                  </div>
                </div>
              </div>
            </div>

          <?php endif; ?>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Jawaban</label>
            <?php $i=0; foreach ($this->jawaban->tampil($soal->id_soal) as $jawaban): ?>
              <div class="input-group">
                <?php ++$i ?>
                <input type="hidden" name="id_jawaban_<?= $i ?>" value="<?= $jawaban->id_jawaban ?>">
                <input type="text" name="jawaban_<?= $i ?>" class="form-control" required value="<?= $jawaban->pernyataan_jawaban ?>">
                <span class="input-group-addon">
                  <input type="radio" name="benar" value="<?= $i ?>" required <?php if ($jawaban->status_jawaban=='true') {echo "checked";} ?>>
                </span>
              </div>
              <br>
            <?php endforeach; ?>
            <p class="help-block">Centang pada pilihan yang benar</p>
          </div>
        </div>
      </div>
    </div>
    <div class="box-footer">
      <button class="btn btn-primary pull-right" type="submit" name="simpan" value="simpan">Simpan</button>
      <a href="<?= base_url('admin/soal')  ?>" class="btn btn-default pull-left">Kembali</a>
    </div>
  </form>
</div>
