<table id="dt1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>Username</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Telepon</th>
    <th>Tempat, Tanggal Lahir</th>
    <th>Operasi</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ($peserta as $peserta): ?>
      <tr>
        <td><?= $peserta->username_peserta  ?></td>
        <td><?= $peserta->nama_peserta  ?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <button type="button" class="btn btn-primary btn-xs btn-block"><i class="fa fa-user"> Detail</i></button>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
  <!-- <tfoot>
  <tr>
    <th>Nama</th>
  </tr>
  </tfoot> -->
</table>
