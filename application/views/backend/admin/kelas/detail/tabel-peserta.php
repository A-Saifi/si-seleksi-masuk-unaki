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
        <td><?php if ($peserta->gender_peserta!=null) {
         switch ($peserta->gender_peserta) {
           case 'L':
             echo "Laki-laki";
             break;
           case 'P':
             echo "Perempuan";
             break;
         }
        } ?></td>
        <td><?= $peserta->agama_peserta  ?></td>
        <td><?= $peserta->telepon_peserta  ?></td>
        <td><?= $peserta->tempat_lahir_peserta.', '.date('d M Y', strtotime($peserta->tanggal_lahir_peserta))  ?></td>
        <td>
          <a href="<?= base_url('admin/peserta/detail/'.$peserta->username_peserta.'?kelas='.$kelas->id_kelas)  ?>" class="btn btn-primary btn-xs btn-block" data-toggle="tooltip" data-original-title="Biodata Peserta"><i class="fa fa-user"> Detail</i></a>
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
