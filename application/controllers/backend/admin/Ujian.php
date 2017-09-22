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
      'title' => 'Daftar Ujian',
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

  // Soal pada Ujian
  function soal()
  { $id_ujian = $this->input->get('ujian');
    if (!empty($id_ujian)) {
      $this->load->model('admin/Ujian_model');
      $ujian = $this->Ujian_model->get_by_id($id_ujian);

      $this->load->model('admin/Soal_ujian_model');
      $soal = $this->Soal_ujian_model->get_all();

      $pilihan = ['A','B','C','D'];

      $data = [
        'title' => 'Ujian: '.$ujian->nama_ujian,
        'num_sidebar' => 6,
        'ujian' => $ujian,
        'soal' => $soal,
        'pilihan' => $pilihan,
        'data_table' => 'yes'
      ];

      $this->load->library('backend/admin/jawaban');
      $this->layout->load_backend_admin('ujian/soal-ujian', $data);
    }else {
      $this->alert("Silahkan pilih ujian terlebih dahulu", base_url('admin/ujian'));
    }
  }

  // Pilih soal yang dimasukan kedalam ujian
  function pilih()
  {
    $id_ujian = $this->input->get('ujian');
    if (!empty($id_ujian)) {
      $this->load->model('admin/Ujian_model');
      $ujian = $this->Ujian_model->get_by_id($id_ujian);

      $this->load->model('admin/Soal_model');
      $soal = $this->Soal_model->get_soal_ujian();

      $pilihan = ['A','B','C','D'];

      $data = [
        'title' => 'Ujian: '.$ujian->nama_ujian,
        'num_sidebar' => 6,
        'ujian' => $ujian,
        'soal' => $soal,
        'pilihan' => $pilihan,
        'data_table' => 'yes'
      ];

      $this->load->library('backend/admin/jawaban');

      $this->layout->load_backend_admin('ujian/pilih-soal', $data);
    }else {
      $this->alert("Silahkan pilih ujian terlebih dahulu", base_url('admin/ujian'));
    }
  }

  // Simpan soal untuk ujian
  function simpan()
  {
    $id_ujian = $this->input->get('ujian');
    $id_soal = $this->input->get('soal');

    if (!empty($id_ujian) && !empty($id_soal)) {
      $data = [
        'ujian_soal_ujian' => $id_ujian,
        'soal_soal_ujian' => $id_soal
      ];

      $this->load->model('admin/Soal_ujian_model');
      $this->alert($this->Soal_ujian_model->insert($data), base_url('admin/ujian/pilih?ujian=').$id_ujian);
    }else {
      $this->alert("Silahkan pilih ujian terlebih dahulu", base_url('admin/ujian'));
    }
  }

  // hapus dari daftar soal pada ujian
  function urungkan()
  {
    $id_ujian = $this->input->get('ujian');
    $id_soal_ujian = $this->input->get('soal');

    if (!empty($id_soal_ujian && !empty($id_ujian))) {
      $this->load->model('admin/Soal_ujian_model');
      $this->alert($this->Soal_ujian_model->delete($id_soal_ujian), base_url('admin/ujian/soal?ujian=').$id_ujian);
    }else {
      $this->alert("Silahkan pilih ujian terlebih dahulu", base_url('admin/ujian'));
    }
  }

}

?>
