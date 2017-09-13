<?php
/**
 *
 */
class Soal extends Admin
{

  public function index()
  {
    $data = [
      'title' => 'Soal',
      'num_sidebar' => 8,
      'modal_crud' => 'yes',
    ];

    $this->layout->load_backend_admin('soal/index', $data);
  }

  function tambah()
  {
    if ($this->input->post('pertanyaan_soal')!=null) {
      if ($this->input->post('gambar_soal')!=null) {
        $soal = [
          'id_soal' => strtotime('now'),
          'pertanyaan_soal' => $this->input->post('pertanyaan_soal'),
          'gambar_soal' => $this->input->post('gambar_soal'),
        ];
      }else {
        $soal = [
          'id_soal' => strtotime('now'),
          'pertanyaan_soal' => $this->input->post('pertanyaan_soal'),
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

      //echo "<pre>".print_r($soal,1)."</pre>";
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
}

?>
