<div class="form-group">
  <label>Nama Program Studi</label>
  <input type="text" class="form-control" placeholder="Ketikkan nama program studi ..." required name="nama_program_studi" value="<?= $program->nama_program_studi ?>">
</div>
<div class="form-group">
  <label>Status</label>
    <?php foreach ($status as $stat): ?>
        <br>
        <label>
        <input type="radio" name="status_program_studi" value="<?= $stat  ?>" class="flat-red" required <?php if ($program->status_program_studi==$stat) {echo "checked";} ?>>
        <?= ucwords(strtolower($stat))  ?>
        </label>
    <?php endforeach; ?>
</div>
<input type="hidden" name="id_program_studi" value="<?= $program->id_program_studi ?>">