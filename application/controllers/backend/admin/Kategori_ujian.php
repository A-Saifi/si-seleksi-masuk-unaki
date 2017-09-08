<?php
/**
 *
 */
class Kategori_ujian extends Admin
{

  function index()
  {
    $this->load->model('admin/Kategori_ujian_model');
    $kategori = $this->Kategori_ujian_model->get_all();

    $data = [
      'title' => 'Kategori Ujian',
      'num_sidebar' => 7,
      'data_table' => 'yes',
      'kategori' => $kategori,
    ];

    $this->layout->load_backend_admin('kategori_ujian/index', $data);
  }

  function tambah()
  {
    if ($this->input->post('nama_kategori_ujian')!=null) {
      $data = [
        'nama_kategori_ujian' => $this->input->post('nama_kategori_ujian'),
      ];

      $this->load->model('admin/Kategori_ujian_model');
      if ($this->Kategori_ujian_model->insert($data)) {
        $this->alert("Berhasil disimpan", base_url('admin/kategori_ujian'));
      }
    }else {
      $this->alert("Tidak ada yang dapat ditambahkan", base_url('admin/kategori_ujian'));
    }
  }

  function ubah()
  {
    if ($this->input->post('id_kategori_ujian')!=null) {
      $data = [
        'nama_kategori_ujian' => $this->input->post('nama_kategori_ujian'),
      ];

      $this->load->model('admin/Kategori_ujian_model');
      if ($this->Kategori_ujian_model->update($this->input->post('id_kategori_ujian'), $data)) {
        $this->alert("Data berhasil diubah", base_url('admin/kategori_ujian'));
      }
    }else {
      $this->alert("Tidak ada yang dapat diubah", base_url('admin/kategori_ujian'));
    }
  }
}

?>
