<div class="form-group">
  <label>Kode Kelas</label>
  <input type="text" class="form-control" placeholder="Ketikkan kode kelas ..." required name="kode_kelas" value="<?= $kel->kode_kelas  ?>">
</div>
<div class="form-group">
  <label>Nama Kelas</label>
  <input type="text" class="form-control" placeholder="Ketikkan nama kelas ..." required name="nama_kelas" value="<?= $kel->nama_kelas  ?>">
</div>
<div class="form-group">
  <label>Tahun Kelas</label>
  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tahun_kelas" required>
      <option value="">Silahkan memilih tahun</option>
      <?php for ($i=2017; $i < 2021; $i++) { ?>
      <option value="<?= $i ?>" <?php if ($i==$kel->tahun_kelas){ echo "selected"; } ?>>
        <?= $i ?>
      </option>
      <?php } ?>
  </select>
</div>
<div class="form-group">
  <label>Status</label>
    <?php foreach ($status as $stat): ?>
      <div class="radio">
        <label>
        <input type="radio" name="status_kelas" value="<?= $stat  ?>" required <?php if ($stat==$kel->status_kelas){ echo "checked"; } ?>>
        <?= ucwords(strtolower($stat))  ?>
        </label>
      </div>
    <?php endforeach; ?>
</div>
<input type="hidden" name="id_kelas" value="<?= $kel->id_kelas  ?>">
