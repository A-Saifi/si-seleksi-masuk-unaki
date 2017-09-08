  <div class="form-group">
    <label>Nama Ujian</label>
    <input type="text" name="nama_ujian" class="form-control" placeholder="Tuliskan nama ujian ..." required>
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

  <div class="form-group">
    <label>Deskripsi Ujian</label>
    <textarea class="form-control" name="deskripsi_ujian" rows="4" placeholder="Tuliskan deskripsi ..."></textarea>
  </div>
