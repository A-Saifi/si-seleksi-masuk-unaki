<?php
/**
 *
 */
class Layout
{

  function __construct()
  {
    $this->CI =& get_instance();
  }

  public function load_frontend($view, $data=array())
  {
    $this->CI->load->view("_layout/frontend/adminlte/header", $data);

    $this->CI->load->view('frontend/'.$view, $data);

    $this->CI->load->view("_layout/frontend/adminlte/footer", $data);
  }

  public function load_backend_admin($view, $data=array())
  {
    $this->CI->load->view("_layout/backend/adminlte/header", $data);

    $this->CI->load->view("backend/admin/".$view, $data);

    $this->CI->load->view("_layout/backend/adminlte/footer", $data);
  }

}

?>
