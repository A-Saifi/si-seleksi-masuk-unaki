<div class="form-group">
  <label>Kode Program Studi</label>
  <input type="text" class="form-control" placeholder="Ketikkan kode program studi ..." required name="kode_program_studi" value="<?= $this->input->get('kode')  ?>">
</div>
<div class="form-group">
  <label>Nama Program Studi</label>
  <input type="text" class="form-control" placeholder="Ketikkan nama program studi ..." required name="nama_program_studi" value="<?= $this->input->get('nama')  ?>">
</div>
<div class="form-group">
  <label>Status</label>
    <?php foreach ($status as $stat): ?>
      <div class="radio">
        <label>
          <input type="radio" name="status_program_studi" value="<?= $stat  ?>" required <?php if ($this->input->get('status')==$stat) { echo "checked"; } ?>>
          <?= ucwords(strtolower($stat))  ?>
        </label>
      </div>
    <?php endforeach; ?>
</div>
