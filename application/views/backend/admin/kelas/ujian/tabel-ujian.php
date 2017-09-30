<table class="table table-bordered">
  <tbody><tr>
    <th style="width: 10px">#</th>
    <th>Nama Ujian</th>
    <th>Kategori</th>
    <th>Jumlah Soal</th>
    <th></th>
  </tr>
  <?php foreach ($ujian as $ujian): ?>
    <tr>
      <td></td>
      <td><?= $ujian->nama_ujian ?></td>
      <td><?= $ujian->nama_kategori_ujian ?></td>
      <td><?= $this->penghitung->soal($ujian->id_ujian).' Soal' ?></td>
      <td><a href="<?= base_url('admin/kelas/simpan?kelas=').$kelas->id_kelas.'&ujian='.$ujian->id_ujian ?>" class="btn btn-success btn-xs btn-block">Pilih</a></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
