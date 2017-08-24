<?php
/**
 *
 */
class Peserta extends Admin
{
  function index()
  {
    $this->load->model('admin/Peserta_model');
    $peserta = $this->Peserta_model->get_all();

    $data = [
      'title' => 'Dashboard',
      'num_sidebar' => 5,
      'peserta' => $peserta,
    ];

    $this->layout->load_backend_admin('peserta/index', $data);

  }

  function tambah()
  {
    if ($this->input->get('kelas')!=null) {
      $data = [
        'username_peserta' => $this->input->post('username_peserta'),
        'password_peserta' => $this->input->post('password_peserta'),
        'nama_peserta' => ucwords(strtolower($this->input->post('nama_peserta'))),
        'kelas_peserta' => $this->input->post('kelas_peserta'),
        'program_studi_peserta' => $this->input->post('program_studi_peserta'),
      ];

      $this->load->model('admin/Peserta_model');
      if ($this->Peserta_model->insert($data)) {
        $this->alert("Peserta berhasil ditambahkan", base_url('admin/kelas/detail?kelas='.$this->input->get('kelas')));
      }else {
        $this->alert("Usernmae telah digunakan, silahkan gunakan username lainnya", base_url(
          'admin/kelas/detail?kelas='.$this->input->get('kelas').
          '&form=yes'.
          '&username_peserta='.$data['username_peserta'].
          '&nama_peserta='.$data['nama_peserta'].
          '&program_studi_peserta='.$data['program_studi_peserta']
        ));
      }

    }else {
      $this->alert('Silahkan pilih kelas terlebih dahulu untuk menambahkan peserta', base_url('admin/kelas'));
    }
  }

  function detail($username_peserta)
  {
    $this->load->model('admin/Peserta_model');
    $peserta = $this->Peserta_model->get_peserta($username_peserta);

    $this->load->model('admin/Program_studi_model');
    $program = $this->Program_studi_model->get_active();

    $this->load->model('admin/Kelas_model');
    $daftar_kelas = $this->Kelas_model->get_active();

    if ($this->input->get('kelas')!=null) {

      $kelas = $this->Kelas_model->get_kelas($this->input->get('kelas'));

      $data = [
        'title' => 'Detail: '.$peserta->nama_peserta,
        'num_sidebar' => 4,
        'peserta' => $peserta,
        'kelas' => $kelas,
        'program' => $program,
        'modal_crud' => 'yes',
        'daftar_kelas' => $daftar_kelas,
      ];

      $this->layout->load_backend_admin('peserta/detail-kelas', $data);
    }else {
      $data = [
        'title' => 'Detail: ',
        'num_sidebar' => 5,
      ];

      $this->layout->load_backend_admin('peserta/detail', $data);
    }
  }

  function ubah()
  {
    if ($this->input->get('username')!=null && $this->input->get('kelas')!=null && $this->input->get('id')!=null) {
      $this->load->model('admin/Peserta_model');
      if ($this->input->get('kontak')!=null) {
        $data = [
          'telepon_peserta' => $this->input->post('telepon_peserta'),
          'email_peserta' => $this->input->post('email_peserta'),
        ];

        $this->alert($this->Peserta_model->update_data($this->input->get('id'),$data), base_url('admin/peserta/detail/'.$this->input->get('username').'?kelas='.$this->input->get('kelas')));
      }elseif ($this->input->get('informasi')!=null) {
        $data = [
          'nama_peserta' => $this->input->post('nama_peserta'),
          'gender_peserta' => $this->input->post('gender_peserta'),
          'agama_peserta' => $this->input->post('agama_peserta'),
          'tempat_lahir_peserta' => $this->input->post('tempat_lahir_peserta'),
          'tanggal_lahir_peserta' => $this->input->post('tanggal_lahir_peserta'),
          'alamat_peserta' => $this->input->post('alamat_peserta'),
        ];

        $this->alert($this->Peserta_model->update_data($this->input->get('id'),$data), base_url('admin/peserta/detail/'.$this->input->get('username').'?kelas='.$this->input->get('kelas')));
      }elseif ($this->input->get('login')!=null) {
        if ($this->input->post('password_peserta')!=null) {
          if ($this->input->post('password_peserta')==$this->input->post('password_peserta_ulangi')) {
            $data = [
              'username_peserta' => $this->input->post('username_peserta'),
              'password_peserta' => $this->input->post('password_peserta')
            ];

            if ($this->Peserta_model->update_login($this->input->get('id'),$data)) {
                $this->alert("Berhasil mengubah username dan password", base_url('admin/peserta/detail/'.$this->input->post('username_peserta').'?kelas='.$this->input->get('kelas')));
            }else {
                $this->alert("Username telah dipakai silahkan gunakan username lain", base_url('admin/peserta/detail/'.$this->input->get('username').'?kelas='.$this->input->get('kelas').'&edit=login'));
            }
          }else {
            $this->alert("Ulangi password tidak sama dengan password, silahkan isi kembali", base_url('admin/peserta/detail/'.$this->input->get('username').'?kelas='.$this->input->get('kelas').'&edit=login'));
          }
        }else {
          $data = [
            'username_peserta' => $this->input->post('username_peserta'),
          ];

          if ($this->Peserta_model->update_login($this->input->get('id'),$data)) {
              $this->alert("Berhasil mengubah username", base_url('admin/peserta/detail/'.$this->input->post('username_peserta').'?kelas='.$this->input->get('kelas')));
          }else {
              $this->alert("Username telah dipakai silahkan gunakan username lain", base_url('admin/peserta/detail/'.$this->input->get('username').'?kelas='.$this->input->get('kelas').'&edit=login'));
          }
        }
      }elseif ($this->input->get('ujian')!=null) {
        $data = [
          'kelas_peserta' => $this->input->post('kelas_peserta'),
          'program_studi_peserta' => $this->input->post('program_studi_peserta'),
        ];

        $this->alert($this->Peserta_model->update_data($this->input->get('id'),$data), base_url('admin/peserta/detail/'.$this->input->get('username').'?kelas='.$this->input->post('kelas_peserta')));
      }else {
        $this->alert("Tidak ada yang dapat diubah", base_url('admin/peserta'));
      }

    }else {
      $this->alert("Tidak ada yang dapat diubah", base_url('admin/peserta'));
    }
  }

}

?>
