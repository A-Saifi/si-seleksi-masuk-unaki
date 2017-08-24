<div class="form-group">
  <label>Kelas</label>
  <select class="form-control" name="kelas_peserta" required>
    <option value="">Silahkan dipilih</option>
    <?php foreach ($daftar_kelas as $daftar): ?>
      <option value="<?= $daftar->id_kelas  ?>" <?php if ($daftar->id_kelas==$peserta->kelas_peserta) {echo "selected";} ?>><?= $daftar->nama_kelas  ?></option>
    <?php endforeach; ?>
  </select>
</div>

<div class="form-group">
  <label>Program studi</label>
  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="program_studi_peserta" required>
      <option value="">Silahkan memilih</option>
      <?php foreach ($program as $program): ?>
        <option value="<?= $program->id_program_studi  ?>" <?php if ($peserta->program_studi_peserta==$program->id_program_studi) {echo "selected";} ?>>
          <?= strtoupper($program->kode_program_studi).' - '.ucwords(strtolower($program->nama_program_studi)) ?>
        </option>
      <?php endforeach; ?>
  </select>
</div>
