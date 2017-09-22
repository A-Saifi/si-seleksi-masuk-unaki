<div class="form-group">
  <label>Ujian</label>
  <input type="text" class="form-control" name="nama_ujian" value="<?= $ujian->nama_ujian ?>" disabled>
</div>

<div class="form-group">
  <label>Soal</label>
  <textarea rows="3" name="pertanyaan_soal" class="form-control" required></textarea>
</div>

<div class="form-group">
  <label for="exampleInputFile">Gambar</label>
  <input type="file" id="exampleInputFile" name="gambar_soal">
  <p class="help-block">Maksimal file 4MB (JPG, PNG)</p>
</div>

<div class="form-group">
  <label>Jawaban</label>
  <?php for ($i=1; $i <= 4; $i++) { ?>
    <div class="input-group">
      <input type="text" name="jawaban_<?= $i ?>" class="form-control" required>
      <span class="input-group-addon">
        <input type="radio" name="benar" value="<?= $i ?>" required>
      </span>
    </div>
    <br>
  <?php } ?>
</div>
<p class="help-block">Catatan: </p>
<p class="help-block">Soal yang disimpan akan langsung ditambahkan ke daftar soal pada ujian: <b><?= $ujian->nama_ujian ?></b></p>
