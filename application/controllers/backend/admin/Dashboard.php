<?php
/**
 *
 */
class Dashboard extends Admin
{

  function index()
  {
    $data = [
      'title' => 'Dashboard',
      'num_sidebar' => 1,
    ];

    $this->layout->load_backend_admin('dashboard/index', $data);
  }

}

?>
