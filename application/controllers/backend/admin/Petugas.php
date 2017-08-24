<?php
/**
 *
 */
class Petugas extends Admin
{

  function index()
  {

    $this->load->model('admin/Admin_model');
    $petugas = $this->Admin_model->get_all();

    $this->load->model('admin/Role_model');
    $role = $this->Role_model->show_role();

    $data = [
      'title' => 'Petugas Ujian',
      'num_sidebar' => 2,
      'petugas' => $petugas,
      'role' => $role,
      'data_table' => 'yes',
      'modal_crud' => 'yes',
    ];

    $this->layout->load_backend_admin('petugas/index', $data);

  }

  function tambah()
  {

    if ($this->input->post('tambah')!=null) {
      $data = [
        'username' => $this->input->post('username'),
        'password' => md5($this->input->post('password')),
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'role' => $this->input->post('role'),
      ];

      $this->load->model('admin/Admin_model');

      if ($this->Admin_model->insert($data)) {
        $this->alert('Data petugas berhasil ditambahkan', base_url('admin/petugas'));
      }else {
        $this->alert('Username sudah ada silahkan gunakan username lain',
                      base_url('admin/petugas?form=yes&username='.$data['username'].'&nama='.$data['nama'].'&email='.$data['email']));
      }

    }else {
      $this->alert('Silahkan masukan data petugas terlebih dahulu', base_url('admin/petugas?form=yes'));
    }

  }

  function hapus()
  {
    if ($this->input->get('id')!=null) {
      $this->load->model('admin/Admin_model');
      $this->alert($this->Admin_model->delete($this->input->get('id')), base_url('admin/petugas'));
    }else {
      $this->alert('Tidak ada data petugas yang dapat dihapus', base_url('admin/petugas'));
    }
  }

  function ubah()
  {
    if ($this->input->post('id_admin')!=null) {

      if ($this->input->post('password')!=null) {
        $data = [
          'username' => $this->input->post('username'),
          'password' => md5($this->input->post('password')),
          'nama' => $this->input->post('nama'),
          'email' => $this->input->post('email'),
          'role' => $this->input->post('role'),
        ];
      }else {
        $data = [
          'username' => $this->input->post('username'),
          'nama' => $this->input->post('nama'),
          'email' => $this->input->post('email'),
          'role' => $this->input->post('role'),
        ];
      }

      $this->load->model('admin/Admin_model');
      if ($this->Admin_model->update($this->input->post('id_admin'), $data)) {
        $this->alert('Data petugas berhasil diubah', base_url('admin/petugas'));
      }else {
        $this->alert('Username sudah dipakai, gunakan username sebelumnya atau username lain', base_url('admin/petugas?edit='.$this->input->post('id_admin')));
      }


    }else {
      $this->alert('Tidak ada data petugas yang dapat diubah', base_url('admin/petugas'));
    }
  }



}

?>
