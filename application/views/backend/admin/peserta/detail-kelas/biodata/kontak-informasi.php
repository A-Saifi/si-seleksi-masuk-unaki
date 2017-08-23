<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-envelope"></i> Kontak Informasi</h3>
    <button class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#editkontak">
      <i class="fa fa-pencil"></i>
    </button>
    <?php $this->load->view('backend/admin/peserta/detail-kelas/biodata/kontak-informasi/modal-edit', ['peserta' => $peserta]) ?>
  </div>
  <div class="box-body">
    <table class="table table-striped">
      <tr>
        <th>Telepon</th>
        <td><?= $peserta->telepon_peserta ?></td>
      </tr>
      <tr>
        <th>E-Mail</th>
        <td><?= $peserta->email_peserta ?></td>
      </tr>
    </table>
  </div>
</div>
