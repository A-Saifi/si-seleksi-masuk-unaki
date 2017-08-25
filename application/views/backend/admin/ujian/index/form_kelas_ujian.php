<form action="<?= base_url('admin/ujian/tambah')  ?>" method="post">
  <div class="form-group">
    <label>Nama Ujian</label>
    <input type="text" name="nama_ujian" class="form-control" required>
  </div>

  <div class="bootstrap-timepicker">
    <div class="form-group">
      <label>Waktu Mulai Ujian</label>

      <div class="input-group">
        <input type="text" class="form-control timepicker" name="waktu_mulai_ujian" required>

        <div class="input-group-addon">
          <i class="fa fa-clock-o"></i>
        </div>
      </div>
      <!-- /.input group -->
    </div>
    <!-- /.form group -->
  </div>

  <div class="bootstrap-timepicker">
    <div class="form-group">
      <label>Waktu Akhir Ujian</label>

      <div class="input-group">
        <input type="text" class="form-control timepicker" name="waktu_akhir_ujian" required>

        <div class="input-group-addon">
          <i class="fa fa-clock-o"></i>
        </div>
      </div>
      <!-- /.input group -->
    </div>
    <!-- /.form group -->
  </div>

  <div class="form-group">
    <label>Tanggal Ujian</label>

    <div class="input-group date">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div>
      <input type="text" class="form-control" id="datepicker" name="tanggal_ujian" required>
    </div>
    <!-- /.input group -->
  </div>

  <div class="form-group">
    <label>Kategori Ujian</label>
    <select class="form-control" name="kategori_ujian" required>
      <option value="">Silahkan Pilih</option>
      <?php foreach ($kategori as $kat): ?>
        <option value="<?= $kat->id_kategori_ujian  ?>"><?= strtoupper($kat->nama_kategori_ujian)  ?></option>
      <?php endforeach; ?>
    </select>
  </div>

</form>
