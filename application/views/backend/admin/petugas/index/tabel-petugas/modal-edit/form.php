
<input type="hidden" class="form-control" placeholder="Ketikkan username ..." required name="id_admin" value="<?= $orang->id_admin  ?>">

<div class="form-group">
  <label>Username</label>
  <input type="text" class="form-control" placeholder="Ketikkan username ..." required name="username" value="<?= $orang->username  ?>">
</div>
<div class="form-group">
  <label>Password</label>
  <input type="password" class="form-control" placeholder="Ketikkan password ..." name="password">
</div>
<div class="form-group">
  <label>Nama</label>
  <input type="text" class="form-control" placeholder="Ketikkan nama ..." required name="nama" value="<?= $orang->nama ?>">
</div>
<div class="form-group">
  <label>E-Mail</label>
  <input type="email" class="form-control" placeholder="Ketikkan e-mail ..." required name="email" value="<?= $orang->email  ?>">
</div>
<div class="form-group">
  <label>Sebagai</label>
  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="role" required>
      <option value="">Silahkan memilih</option>
    <?php foreach ($role as $r): ?>
      <option value="<?= $r->id_role ?>" <?php if ($r->id_role == $orang->role) {echo "selected";} ?> ><?= ucwords(strtolower($r->nama_role)) ?></option>
    <?php endforeach; ?>
  </select>
</div>
