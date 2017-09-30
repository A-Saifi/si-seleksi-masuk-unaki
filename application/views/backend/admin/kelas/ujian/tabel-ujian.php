<!-- Tabel daftar ujian yang dapat dipilih -->
<table id="dt3" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th style="width: 10px">No.</th>
    <th>Nama Ujian</th>
    <th>Kategori Ujian</th>
    <th>Jumlah Soal</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
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
  <!-- <tfoot>
  <tr>
    <th>Nama</th>
  </tr>
  </tfoot> -->
</table>
