<input type="hidden" name="id_ujian" value="<?= $ujian->id_ujian ?>">

<div class="form-group">
  <label>Nama Ujian</label>
  <input type="text" name="nama_ujian" class="form-control" required value="<?= $ujian->nama_ujian ?>">
</div>

<div class="form-group">
  <label>Kategori Ujian</label>
  <select class="form-control" name="kategori_ujian" required>
    <option value="">Silahkan Pilih</option>
    <?php foreach ($kategori as $kat): ?>
      <option value="<?= $kat->id_kategori_ujian  ?>" <?php if ($ujian->kategori_ujian==$kat->id_kategori_ujian) {echo "selected";} ?>>
        <?= strtoupper($kat->nama_kategori_ujian)  ?>
      </option>
    <?php endforeach; ?>
  </select>
</div>

<div class="form-group">
  <label>Deskripsi Ujian</label>
  <textarea class="form-control" name="deskripsi_ujian" rows="4" placeholder="Tuliskan deskripsi ..."><?= $ujian->deskripsi_ujian ?></textarea>
</div>
