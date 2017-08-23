<div class="form-group">
  <label>Nama Lengkap</label>
  <input type="text" class="form-control" placeholder="Ketikkan telepon ..." name="nama_peserta" required value="<?= $peserta->nama_peserta  ?>">
</div>
<div class="form-group">
  <label>Jenis Kelamin</label>
  <select class="form-control" name="gender_peserta" required>
    <option value="">Silahkan Pilih</option>
    <option value="L" <?php if ($peserta->gender_peserta=='L') {echo 'selected';}  ?>>Laki-laki</option>
    <option value="P" <?php if ($peserta->gender_peserta=='P') {echo 'selected';}  ?>>Perempuan</option>
  </select>
</div>
<div class="form-group">
  <label>Agama</label>
  <select class="form-control" name="agama_peserta" required>
    <option value="">Silahkan Pilih</option>
    <option value="Islam" <?php if ($peserta->agama_peserta=='Islam') {echo 'selected';}  ?>>Islam</option>
    <option value="Kristen" <?php if ($peserta->agama_peserta=='Kristen') {echo 'selected';}  ?>>Kristen</option>
    <option value="Hindu" <?php if ($peserta->agama_peserta=='Hindu') {echo 'selected';}  ?>>Hindu</option>
    <option value="Budha" <?php if ($peserta->agama_peserta=='Budha') {echo 'selected';}  ?>>Budha</option>
  </select>
</div>
<div class="form-group">
  <label>Tempat Lahir</label>
  <input type="text" class="form-control" placeholder="Ketikkan tempat ..." name="tempat_lahir_peserta" required value="<?= $peserta->tempat_lahir_peserta  ?>">
</div>
<div class="form-group">
  <label>Tanggal Lahir</label>
  <input type="date" class="form-control" name="tanggal_lahir_peserta" value="<?= $peserta->tanggal_lahir_peserta  ?>" required>
</div>
<div class="form-group">
  <label>Alamat</label>
  <textarea name="alamat_peserta" rows="3" cols="30" class="form-control" required><?= $peserta->alamat_peserta  ?></textarea>
</div>
