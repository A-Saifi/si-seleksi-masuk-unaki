<!-- Tabel Ujian yang terdaftar pada kelas -->
<table id="dt2" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th style="width: 10px;">No.</th>
    <th>Nama Ujian</th>
    <th>Jumlah Soal</th>
    <th>Waktu Mulai</th>
    <th>Waktu Akhir</th>
    <th></th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($ujian_kelas as $ujian_kelas): ?>
      <tr>
        <td><?= $i+=1 ?></td>
        <td><?= $ujian_kelas->nama_ujian ?></td>
        <td><?= $this->penghitung->soal($ujian_kelas->id_ujian).' Soal' ?></td>
        <td><?= date("d M Y, H:i", $ujian_kelas->waktu_mulai_kelas_ujian) ?></td>
        <td><?= date("d M Y, H:i", $ujian_kelas->waktu_akhir_kelas_ujian) ?></td>
        <td><a href="<?= base_url('admin/ujian/soal?ujian=').$ujian_kelas->id_ujian ?>" class="btn btn-primary btn-xs btn-block">Lihat Soal</a></td>
        <td><a href="<?= base_url('admin/kelas/urungkan').'?'.md5('ujian_kelas').'='.$ujian_kelas->id_kelas_ujian ?>" class="btn btn-danger btn-xs btn-block" onclick="return confirm('Yakin ingin mengurungkan ujian ?');">Urungkan</a></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
  <!-- <tfoot>
  <tr>
    <th>Nama</th>
  </tr>
  </tfoot> -->
</table>
