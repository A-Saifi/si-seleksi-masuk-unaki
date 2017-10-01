<table id="dt1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>No.</th>
    <th>Kode</th>
    <th>Pertanyaan</th>
    <th>Detail</th>
    <?php if (empty($lihat_soal)): ?>
      <th></th>
    <?php endif; ?>

  </tr>
  </thead>
  <tbody>
  <?php $i=0; foreach ($soal as $soal): ?>
    <tr>
    <td class="text-center"><?= $i+=1; ?></td>
    <td><?= $soal->id_soal ?></td>
    <td><?= $this->text->pemendek($soal->pertanyaan_soal, $panjang_teks) ?></td>

    <?php $this->load->view('backend/admin/soal/index/tabel-soal/modal-detail', ['soal' => $soal]) ?>

    <td>
      <button class="btn btn-primary btn-xs btn-block" data-toggle="modal" data-target="#detail_<?= $soal->id_soal ?>">
        Detail
      </button>
    </td>
    <?php if (empty($lihat_soal)): ?>
      <td>
        <a href="<?= base_url('admin/ujian/urungkan?ujian=').$this->input->get('ujian').'&soal='.$soal->id_soal_ujian ?>" class="btn btn-danger btn-xs btn-block">
          Urungkan
        </a>
      </td>
    <?php endif; ?>
  </tr>
  <?php endforeach; ?>
  </tbody>

</table>
