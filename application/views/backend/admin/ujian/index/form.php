  <div class="form-group">
    <label>Nama Ujian</label>
    <input type="text" name="nama_ujian" class="form-control" required>
  </div>

  <div class="form-group">
    <label>Kategori Ujian</label>
    <select class="form-control" name="kategori_ujian" required>
      <option value="">Silahkan Pilih</option>
      <?php foreach ($kategori as $kat): ?>
        <option value="<?= $kat->id_kategori_ujian  ?>"><?= strtoupper($kat->nama_kategori_ujian)  ?></option>
      <?php endforeach; ?>
    </select>
  </div>
