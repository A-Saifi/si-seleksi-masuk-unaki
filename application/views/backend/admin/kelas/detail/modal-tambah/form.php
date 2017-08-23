<div class="form-group">
  <label>Username</label>
  <input type="text" class="form-control" placeholder="Ketikkan username peserta ..." required name="username_peserta" value="<?= $this->input->get('username_peserta') ?>">
</div>
<div class="form-group">
  <label>Password</label>
  <input type="text" class="form-control" placeholder="Ketikkan password peserta ..." required name="password_peserta">
</div>
<div class="form-group">
  <label>Nama</label>
  <input type="text" class="form-control" placeholder="Ketikkan nama peserta ..." required name="nama_peserta" value="<?= $this->input->get('nama_peserta') ?>">
</div>
<div class="form-group">
  <label>Kelas</label>
  <input type="text" class="form-control" value="<?= $kelas->nama_kelas ?>" disabled>
  <input type="hidden" class="form-control" value="<?= $kelas->id_kelas ?>" name="kelas_peserta">
</div>
<div class="form-group">
  <label>Program studi</label>
  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="program_studi_peserta" required>
      <option value="">Silahkan memilih</option>
      <?php foreach ($program as $program): ?>
        <option value="<?= $program->id_program_studi  ?>" <?php if ($this->input->get('program_studi_peserta')==$program->id_program_studi) {echo "selected";} ?>>
          <?= strtoupper($program->kode_program_studi).' - '.ucwords(strtolower($program->nama_program_studi)) ?>
        </option>
      <?php endforeach; ?>
  </select>
</div>
