<?php
/**
 *
 */
class Frontend extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper(['url', 'html']);
    $this->load->library(['session', 'layout']);
  }

  function alert($pesan, $url)
  {
    echo "<script>
          alert('".$pesan."');
          window.location.href='".$url."';
          </script>";
  }

  function is_logged_in()
  {
    if ($this->session->userdata('peserta')==null) {
      $this->alert('Anda belum login', base_url('login'));
    }
  }

}

// START BACKEND vvvvv

class Backend extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper(['url', 'html']);
    $this->load->library(['session', 'layout', 'sidebar']);

  }

  function alert($pesan, $url)
  {
    echo "<script>
          alert('".$pesan."');
          window.location.href='".$url."';
          </script>";
  }

}

class Admin extends Backend
{

  function __construct()
  {
    parent::__construct();
    $this->is_logged_in();
  }

  function is_logged_in()
  {
    if ($this->session->userdata('admin')==null) {
      $this->alert('Anda belum login sebagai admin', base_url('admin/login'));
    }
  }
}



?>
