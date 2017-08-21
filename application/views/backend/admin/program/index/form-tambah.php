<div class="form-group">
  <label>Nama Program Studi</label>
  <input type="text" class="form-control" placeholder="Ketikkan nama program studi ..." required name="nama_program_studi">
</div>
<div class="form-group">
  <label>Status</label>
    <?php foreach ($status as $stat): ?>
      <div class="radio">
        <label>
          <input type="radio" name="status_program_studi" value="<?= $stat  ?>" required>
          <?= ucwords(strtolower($stat))  ?>
        </label>
      </div>
    <?php endforeach; ?>
</div>
