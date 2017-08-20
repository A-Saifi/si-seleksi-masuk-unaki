<?php $counter=0; ?>
<table id="dt1" class="table table-bordered table-striped">
  <thead>
  <tr>
    <th>No.</th>
    <th>Nama</th>
    <th>Status</th>
    <th>Edit</th>
  </tr>
  </thead>
  <tbody>
    <?php foreach ($program_studi as $program): ?>
      <?php  $this->load->view('backend/admin/program/index/tabel-program/modal-edit', ['program' => $program]) ?>
      <tr>
        <td class="text-center"><?= $counter+=1  ?></td>
        <td><?= $program->nama_program_studi  ?></td>
        <td><?= $program->status_program_studi  ?></td>
        <td class="text-center">
          <button type="button" name="button" class="btn btn-warning btn-xs btn-block" data-toggle="modal" data-target="#edit<?= $program->id_program_studi  ?>">
            <i class="fa fa-pencil"></i> Edit
          </button>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
  <tfoot>
  <tr>
    <th></th>
    <th>Nama</th>
    <th>Status</th>
    <th>Edit</th>
  </tr>
  </tfoot>
</table>
