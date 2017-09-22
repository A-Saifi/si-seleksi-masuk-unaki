<table id="dt1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>No.</th>
    <th>Kode</th>
    <th>Pertanyaan</th>
    <th>Detail</th>
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
      <a href="<?= base_url('admin/ujian/simpan?ujian=').$this->input->get('ujian').'&soal='.$soal->id_soal ?>" class="btn btn-success btn-xs btn-block">
        Pilih
      </a>
    </td>
  </tr>
  <?php endforeach; ?>
  </tbody>

</table>
