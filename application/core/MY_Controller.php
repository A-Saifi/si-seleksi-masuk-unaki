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

    date_default_timezone_set("Asia/Bangkok");
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

/**
 *
 */
class Pengunjung extends Frontend
{

  function __construct()
  {
    parent::__construct();
  }
}


// START BACKEND vvvvv

class Backend extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->helper(['url', 'html']);
    $this->load->library(['session', 'layout', 'backend/sidebar', 'text']);

    date_default_timezone_set("Asia/Bangkok");

  }

  function alert($pesan, $url)
  {
    echo "<script>
          alert('".$pesan."');
          window.location.href='".$url."';
          </script>";
  }

  function is_logged_in($level_user)
  {
    if ($this->session->userdata($level_user)==null) {
      $this->alert('Anda belum login sebagai admin', base_url('admin/login'));
    }
  }

}

class Admin extends Backend
{

  function __construct()
  {
    parent::__construct();
    $this->is_logged_in('admin');
  }


}



?>
