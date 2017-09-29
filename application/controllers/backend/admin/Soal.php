<?php
/**
 *
 */
class Soal extends Admin
{

  public function index()
  {
    $this->load->model('admin/Soal_model');
    $soal = $this->Soal_model->get_all();

    $pilihan = ['A','B','C','D'];

    $data = [
      'title' => 'Soal',
      'num_sidebar' => 8,
      'modal_crud' => 'yes',
      'data_table' => 'yes',
      'soal' => $soal,
      'pilihan' => $pilihan,
      'upload_gambar' => 'yes',
    ];

    $this->load->library('backend/admin/jawaban');

    $this->layout->load_backend_admin('soal/index', $data);
  }

  function tambah()
  {
    if ($this->input->post('pertanyaan_soal')!=null) {
      if (empty($_FILES['gambar_soal']['name'])) {
        $soal = [
          'id_soal' => time(),
          'pertanyaan_soal' => $this->input->post('pertanyaan_soal'),
        ];
      }else {
        $gambar = $this->upload_gambar();
        $soal = [
          'id_soal' => time(),
          'pertanyaan_soal' => $this->input->post('pertanyaan_soal'),
          'gambar_soal' => $gambar['file_name'],
        ];
      }

      for ($i=1; $i <= 4; $i++) {
        if ($this->input->post('benar')==$i) {
            $status = 'true';
        }else {
            $status = 'false';
        }

        $jawaban['jawaban_'.$i] = [
          'soal_jawaban' => $soal['id_soal'],
          'pernyataan_jawaban' => $this->input->post('jawaban_'.$i),
          'status_jawaban' => $status,
        ];
      }

      $this->load->model('admin/Soal_model');
      if ($this->Soal_model->insert($soal)) {

        $this->load->model('admin/Jawaban_model');
        foreach ($jawaban as $jawab) {
          $this->Jawaban_model->insert($jawab);
        }

        $this->alert("Soal berhasil ditambahkan", base_url('admin/soal'));

      }

    }else {
      $this->alert("Tidak ada yang dapat ditambahkan, silahkan isi data terlebih dahulu", base_url('admin/soal?form=yes'));
    }
  }

  function ubah()
  {
    if ($this->input->get('soal')!=null) {
      $this->load->model('admin/Soal_model');
      if ($this->input->get('simpan')!=null) {

        if (empty($_FILES['gambar_soal']['name'])) {
          $soal = [
            'pertanyaan_soal' => $this->input->post('pertanyaan_soal'),
          ];
        }else {
          $gambar = $this->upload_gambar();
          $soal = [
            'pertanyaan_soal' => $this->input->post('pertanyaan_soal'),
            'gambar_soal' => $gambar['file_name'],
          ];
        }


        if ($this->Soal_model->update($this->input->post('id_soal'), $soal)) {
          $this->load->model('admin/Jawaban_model');
          for ($i=1; $i <= 4; $i++) {
            if ($this->input->post('benar')==$i) {
                $status = 'true';
            }else {
                $status = 'false';
            }

            $jawaban['jawaban_'.$i] = [
              'soal_jawaban' => $this->input->post('id_soal'),
              'pernyataan_jawaban' => $this->input->post('jawaban_'.$i),
              'status_jawaban' => $status,
            ];

            $this->Jawaban_model->update($this->input->post('id_jawaban_'.$i), $jawaban['jawaban_'.$i]);
          }


          $this->alert("Soal berhasil diubah", base_url('admin/soal'));
        }

      }else {
        $soal = $this->Soal_model->get_by_id($this->input->get('soal'));

            $data = [
              'title' => 'Soal : '.$soal->id_soal,
              'num_sidebar' => 8,
              'soal' => $soal,
              'upload_gambar' => 'yes',
            ];
        $this->load->library('backend/admin/jawaban');

        $this->layout->load_backend_admin('soal/ubah', $data);
      }
    } else {
      $this->alert("Silahkan pilih soal yang ingin diubah terlebih dahulu", base_url('admin/soal'));
    }

  }

  function hapus()
  {
    if ($this->input->get('id_soal')!=null) {
      $this->load->model('admin/Soal_model');
      $this->alert($this->Soal_model->delete($this->input->get('id_soal')),base_url('admin/soal'));
    }else {
      $this->alert("Tidak ada soal yang dapat dihapus", base_url('admin/soal'));
    }
  }

  function upload_gambar()
  {
    $config['upload_path'] = realpath(APPPATH.'..\\assets\\images\\soal\\');
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $new_name = time().'_soal_'.$_FILES["gambar_soal"]['name'];
    $config['file_name'] = $new_name;
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('gambar_soal')) {
        $error = $this->upload->display_errors();
        print_r($error);
        //break;
    } else {
        return $this->upload->data();
    }
  }

  function hapus_gambar()
  {
    if (!empty($this->input->get('id_soal'))) {
      $this->load->model('admin/Soal_model');
      if ($this->Soal_model->delete_picture($this->input->get('id_soal'))) {
          $this->alert("Gambar pada soal berhasil dihapus", base_url('admin/soal/ubah?soal=').$this->input->get('id_soal'));
      }
    }else {
      $this->alert("Tidak ada gambar yang dapat dihapus", base_url('admin/soal'));
    }
  }

}

?>
