<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-user"></i> Informasi Umum</h3>
    <button class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#editumum">
      <i class="fa fa-pencil"></i>
    </button>
    <?php $this->load->view('backend/admin/peserta/detail-kelas/biodata/informasi-umum/modal-edit', ['peserta' => $peserta]) ?>
  </div>
  <div class="box-body">
    <table class="table table-striped">
      <tr>
        <th>Nama Lengkap</th>
        <td><?= $peserta->nama_peserta ?></td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
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
      </tr>
      <tr>
        <th>Agama</th>
        <td><?= $peserta->agama_peserta ?></td>
      </tr>
      <tr>
        <th>Tempat Lahir</th>
        <td><?= $peserta->tempat_lahir_peserta ?></td>
      </tr>
      <tr>
        <th>Tanggal Lahir</th>
        <td><?= date('d M Y', strtotime($peserta->tanggal_lahir_peserta)) ?></td>
      </tr>
      <tr>
        <th>Alamat</th>
        <td><?= $peserta->alamat_peserta ?></td>
      </tr>
    </table>
  </div>
</div>
