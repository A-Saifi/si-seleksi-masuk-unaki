<div class="form-group">
  <label>Kode Kelas</label>
  <input type="text" class="form-control" placeholder="Ketikkan kode kelas ..." required name="kode_kelas" value="<?= $this->input->get('kode_kelas')  ?>">
</div>
<div class="form-group">
  <label>Nama Kelas</label>
  <input type="text" class="form-control" placeholder="Ketikkan nama kelas ..." required name="nama_kelas" value="<?= $this->input->get('nama_kelas')  ?>">
</div>
<div class="form-group">
  <label>Tahun Kelas</label>
  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tahun_kelas" required>
      <option value="">Silahkan memilih tahun</option>
      <?php for ($i=2017; $i < 2021; $i++) { ?>
      <option value="<?= $i ?>" <?php if ($this->input->get('tahun_kelas')==$i) {echo "selected";} ?>><?= $i ?></option>
      <?php } ?>
  </select>
</div>
<div class="form-group">
  <label>Status</label>
    <?php foreach ($status as $stat): ?>
        <div class="radio">
          <label>
            <input type="radio" name="status_kelas" value="<?= $stat  ?>" required <?php if ($this->input->get('status_kelas')==$stat) {echo "checked";} ?>>
            <?= ucwords(strtolower($stat))  ?>
          </label>
        </div>
    <?php endforeach; ?>
</div>
