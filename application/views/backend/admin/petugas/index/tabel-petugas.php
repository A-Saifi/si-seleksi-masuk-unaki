<table id="dt1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>Username</th>
    <th>Nama</th>
    <th>E-Mail</th>
    <th>Sebagai</th>
    <th>Edit</th>
    <th>Hapus</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ($petugas as $orang): ?>
      <tr>
        <td><?= $orang->username  ?></td>
        <td><?= ucwords(strtolower($orang->nama))  ?></td>
        <td><?= $orang->email  ?></td>
        <td><?= ucwords($orang->nama_role)  ?></td>

        <?php $this->load->view('backend/admin/petugas/index/tabel-petugas/modal-edit', ['orang' => $orang]) ?>

        <td class="text-center">
          <button href="" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $orang->id_admin ?>">
            <i class="fa fa-pencil"></i> Edit
          </button>
        </td>
        <td class="text-center">
          <a href="<?= base_url('admin/petugas/hapus?id='.$orang->id_admin)  ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus <?= ucwords(strtolower($orang->nama))  ?> sebagai petugas?');">
            <i class="fa fa-trash"></i> Hapus
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
  <tfoot>
  <tr>
    <th>Username</th>
    <th>Nama</th>
    <th>E-Mail</th>
    <th>Sebagai</th>
    <th>Edit</th>
    <th>Hapus</th>
  </tr>
  </tfoot>
</table>
