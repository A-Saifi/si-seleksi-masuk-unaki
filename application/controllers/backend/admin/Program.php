<?php
/**
 *
 */
class Program extends Admin
{

  function index()
  {
    $this->load->model('Program_studi_model');
    $status_row = $this->Program_studi_model->get_status_program_studi();
    $status =
          explode(",",
          str_replace("'", "",
          substr(
              $status_row->COLUMN_TYPE, 5, (
                  strlen(
                      $status_row->COLUMN_TYPE)-6
                      )
                  )
              )
          );
    $program = $this->Program_studi_model->get_all();

    $data = [
      'title' => 'Program Studi',
      'num_sidebar' => 3,
      'data_table' => 'yes',
      'modal_crud' => 'yes',
      'program_studi' => $program,
      'status' => $status,
    ];

    $this->layout->load_backend_admin('program/index', $data);
  }

  function tambah()
  {
    if ($this->input->post('nama_program_studi')!=null) {
      $data = [
        'kode_program_studi' => $this->input->post('kode_program_studi'),
        'nama_program_studi' => $this->input->post('nama_program_studi'),
        'status_program_studi' => $this->input->post('status_program_studi')
      ];

      $this->load->model('Program_studi_model');
      if ($this->Program_studi_model->insert($data)) {
        $this->alert("Data program studi berhasil ditambahkan", base_url('admin/program'));
      }else {
        $this->alert("Kode telah dipakai silahkan gunakan kode lain",base_url(
          'admin/program?kode='.$data['kode_program_studi'].
          '&nama='.$data['nama_program_studi'].
          '&status='.$data['status_program_studi']
        ));
      }
    }else {
      $this->alert("Tidak ada data program studi yang dapat ditambahkan", base_url('admin/program'));
    }
  }

  function ubah()
  {
    if ($this->input->post('id_program_studi')!=null) {
      $data = [
        'kode_program_studi' => $this->input->post('kode_program_studi'),
        'nama_program_studi' => $this->input->post('nama_program_studi'),
        'status_program_studi' => $this->input->post('status_program_studi')
      ];

      $this->load->model('Program_studi_model');
      if ($this->Program_studi_model->update($this->input->post('id_program_studi'), $data)) {
        $this->alert("Data program studi berhasil diubah", base_url('admin/program'));
      }else {
        $this->alert("Kode telah digunakan, silahkan gunakan kode lain atau kode sebelumnya", base_url('admin/program?edit='.$this->input->post('id_program_studi')));
      }
    }else {
      $this->alert("Tidak ada data program studi yang dapat diedit", base_url('admin/program'));
    }
  }
}

?>
