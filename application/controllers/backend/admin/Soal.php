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
    ];

    $this->layout->load_backend_admin('soal/index', $data);
  }
}

?>
