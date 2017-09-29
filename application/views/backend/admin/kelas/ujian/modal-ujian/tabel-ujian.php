<table id="dt1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Soal</th>
    <th>Tanggal</th>
    <th>Mulai</th>
    <th>Akhir</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($ujian as $ujian): ?>
      <form action="index.html" method="post">
        <tr>
          <td><?= $ujian->nama_ujian ?></td>
          <td><?= $ujian->nama_kategori_ujian ?></td>
          <td><?= $this->penghitung->soal($ujian->id_ujian).' Soal' ?></td>
          <td>
            <input type="date" name="" value="" class="form-control">
          </td>
          <td></td>
          <td></td>
          <td>
            <a href="<?= base_url('admin/kelas/simpan?kelas=').$kelas->id_kelas.'&ujian='.$ujian->id_ujian ?>" class="btn btn-success btn-xs btn-block">
              Pilih
            </a>
          </td>
        </tr>
      </form>
    <?php endforeach; ?>
  </tbody>

</table>
