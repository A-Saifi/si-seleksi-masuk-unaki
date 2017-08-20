<?php
/**
 *
 */
class Peserta extends Admin
{
  function index()
  {
    $this->load->model('Peserta_model');
    $peserta = $this->Peserta_model->get_all();

    $data = [
      'title' => 'Dashboard',
      'num_sidebar' => 5,
      'peserta' => $peserta,
    ];

    $this->layout->load_backend_admin('peserta/index', $data);

  }

}

?>
