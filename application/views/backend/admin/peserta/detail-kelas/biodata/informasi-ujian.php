<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-paperclip"></i> Informasi Ujian</h3>
    <button class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#editujian">
      <i class="fa fa-pencil"></i>
    </button>
    <?php $this->load->view('backend/admin/peserta/detail-kelas/biodata/informasi-ujian/modal-edit', ['peserta' => $peserta]) ?>
  </div>
  <div class="box-body">
    <table class="table table-striped">
      <tr>
        <th>Kelas</th>
        <td><?= $peserta->nama_kelas ?></td>
      </tr>
      <tr>
        <th>Program Studi Dipilih</th>
        <td><?= $peserta->nama_program_studi ?></td>
      </tr>
    </table>
  </div>
</div>
