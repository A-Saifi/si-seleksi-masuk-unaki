<?php $i=0; ?>
<table id="dt1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>No.</th>
    <th>Nama</th>
    <th></th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ($kategori as $kategori): ?>
      <?php $this->load->view('backend/admin/kategori_ujian/index/tabel/tabel-kategori/modal-edit', ['kategori' => $kategori]) ?>
      <tr>
        <td class="text-center" style="width: 10px"><?= $i+=1 ?></td>
        <td><?= $kategori->nama_kategori_ujian  ?></td>
        <td><button class="btn btn-warning btn-xs btn-block" data-toggle="modal" data-target="#edit<?= $kategori->id_kategori_ujian ?>"><i class="fa fa-pencil"></i> Edit</button></td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>
