<table id="dt1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Soal</th>
    <th></th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach ($ujian as $ujian): ?>
      <?php  $this->load->view('backend/admin/ujian/index/tabel-ujian/modal-edit', ['ujian' => $ujian]) ?>
      <tr>
        <td class="text-center"><?= $i+=1 ?></td>
        <td><?= $ujian->nama_ujian ?></td>
        <td><?= $ujian->nama_kategori_ujian ?></td>
        <td>
          <a href="<?= base_url('admin/ujian/soal?kelas=').$ujian->id_ujian ?>" class="btn btn-primary btn-xs btn-block">Lihat Soal</a>
        </td>
        <td>
          <button class="btn btn-warning btn-xs btn-block" data-toggle="modal" data-target="#edit<?= $ujian->id_ujian ?>"><i class="fa fa-pencil"></i> Edit</button>
        </td>
        <td>
          <a href="<?= base_url('admin/ujian/hapus?'.md5('id').'='.$ujian->id_ujian)  ?>" class="btn btn-danger btn-xs btn-block" onclick="return confirm('Yakin ingin menghapus ujian ini ?')"><i class="fa fa-trash"></i> Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>
