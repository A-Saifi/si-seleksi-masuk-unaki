<?php
/**
 *
 */
class Ujian extends Admin
{
  function index()
  {
    $this->load->model('admin/Kategori_ujian_model');
    $kategori = $this->Kategori_ujian_model->get_all();

    $this->load->model('admin/Ujian_model');
    $ujian = $this->Ujian_model->get_all();

    $data = [
      'title' => 'Dashboard',
      'num_sidebar' => 6,
      'kategori' => $kategori,
      'ujian' => $ujian,
      'data_table' => 'yes'
    ];

    $this->layout->load_backend_admin('ujian/index', $data);
  }

  function tambah()
  {
    $data = [
      'nama_ujian' => $this->input->post('nama_ujian'),
      'kategori_ujian' => $this->input->post('kategori_ujian'),
      'deskripsi_ujian' => $this->input->post('deskripsi_ujian'),
    ];

    $this->load->model('admin/Ujian_model');
    $this->Alert($this->Ujian_model->insert($data), base_url('admin/ujian'));
  }

  function ubah()
  {
    if ($this->input->post('ubah')!=null) {
      $data = [
        'nama_ujian' => $this->input->post('nama_ujian'),
        'kategori_ujian' => $this->input->post('kategori_ujian'),
        'deskripsi_ujian' => $this->input->post('deskripsi_ujian'),
      ];

      $this->load->model('admin/Ujian_model');
      $this->alert($this->Ujian_model->update($this->input->post('id_ujian'), $data), base_url('admin/ujian'));
    }else {
      $this->alert("Tidak ada ujian yang dapat diubah", base_url('admin/ujian'));
    }
  }

  function hapus()
  {
    if ($this->input->get(md5('id'))!=null) {

      $this->load->model('admin/Ujian_model');
      $this->alert($this->Ujian_model->delete($this->input->get(md5('id'))), base_url('admin/ujian'));

    }else {
      $this->alert("Tidak ada ujian yang dapat dihapus", base_url('admin/ujian'));
    }
  }

}

?>
