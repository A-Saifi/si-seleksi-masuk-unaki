<table id="dt1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>No.</th>
    <th>Kode</th>
    <th>Pertanyaan</th>
    <th>Detail</th>
    <th></th>
    <th></th>
  </tr>
  </thead>
  <tbody>
  <?php $i=0; foreach ($soal as $soal): ?>
    <tr>
    <td class="text-center"><?= $i+=1; ?></td>
    <td><?= $soal->id_soal ?></td>
    <td><?= $this->text->pemendek($soal->pertanyaan_soal, 100) ?></td>

    <?php $this->load->view('backend/admin/soal/index/tabel-soal/modal-detail', ['soal' => $soal]) ?>

    <td>
      <button class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#detail_<?= $soal->id_soal ?>">
        Detail
      </button>
    </td>
    <td>
      <a href="<?= base_url('admin/soal/ubah').'?soal='.$soal->id_soal ?>" class="btn btn-warning btn-xs btn-block">
        <i class="fa fa-pencil"></i> Ubah
      </a>
    </td>
    <td>
      <a href="<?= base_url('admin/soal/hapus?id_soal=').$soal->id_soal  ?>" class="btn btn-danger btn-xs btn-block" onclick="return confirm('Yakin ingin menghapus soal pada no : <?= $i ?> ?');">
      <i class="fa fa-trash"></i> Hapus
      </a>
  </td>
  </tr>
  <?php endforeach; ?>
  </tbody>

</table>
