<table id="dt1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>Tahun</th>
    <th>Nama</th>
    <th>Kode</th>
    <th>Status</th>
    <th>Detail</th>
    <th>Edit</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ($kelas as $kel): ?>
      <?php  $this->load->view('backend/admin/kelas/index/tabel-kelas/modal-edit', ['kel' => $kel]) ?>
      <tr>
        <td><?= $kel->tahun_kelas  ?></td>
        <td><?= $kel->nama_kelas  ?></td>
        <td><?= $kel->kode_kelas  ?></td>
        <td><?= $kel->status_kelas  ?></td>
        <td><a href="<?= base_url('admin/kelas/detail?kelas='.$kel->id_kelas)  ?>" class="btn btn-primary btn-xs btn-block">Lihat Detail</a></td>
        <td class="text-center">
          <button type="button" name="button" class="btn btn-warning btn-xs btn-block" data-toggle="modal" data-target="#edit<?= $kel->id_kelas  ?>">
            <i class="fa fa-pencil"></i> Edit
          </button>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
  <tfoot>
  <tr>
    <th>Tahun</th>
    <th>Nama</th>
    <th>Kode</th>
    <th>Status</th>
    <th>Detail</th>
    <th>Edit</th>
  </tr>
  </tfoot>
</table>
