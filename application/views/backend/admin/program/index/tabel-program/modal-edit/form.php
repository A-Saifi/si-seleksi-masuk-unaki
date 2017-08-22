<div class="form-group">
  <label>Kode Program Studi</label>
  <input type="text" class="form-control" placeholder="Ketikkan kode program studi ..." required name="kode_program_studi" value="<?= $program->kode_program_studi ?>">
</div>
<div class="form-group">
  <label>Nama Program Studi</label>
  <input type="text" class="form-control" placeholder="Ketikkan nama program studi ..." required name="nama_program_studi" value="<?= $program->nama_program_studi ?>">
</div>
<div class="form-group">
  <label>Status</label>
    <?php foreach ($status as $stat): ?>
        <div class="radio">
        <label>
        <input type="radio" name="status_program_studi" value="<?= $stat ?>" required <?php if ($program->status_program_studi==$stat) {echo "checked";} ?>>
        <?= ucwords(strtolower($stat))  ?>
        </label>
        </div>
    <?php endforeach; ?>
</div>
<input type="hidden" name="id_program_studi" value="<?= $program->id_program_studi ?>">
