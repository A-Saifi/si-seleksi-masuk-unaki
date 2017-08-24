<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-lock"></i> Informasi Login</h3>
    <button class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#editlogin">
      <i class="fa fa-pencil"></i>
    </button>
    <?php $this->load->view('backend/admin/peserta/detail-kelas/biodata/informasi-login/modal-edit', ['peserta' => $peserta]) ?>
  </div>
  <div class="box-body">
    <table class="table table-striped">
      <tr>
        <th>Username</th>
        <td><?= $peserta->username_peserta ?></td>
      </tr>
      <tr>
        <th>Password</th>
        <td><?= str_repeat("*", strlen($peserta->password_peserta)) ?></td>
      </tr>
    </table>
  </div>
</div>
