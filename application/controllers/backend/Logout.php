<?php
/**
 *
 */
class Logout extends Backend
{
  function index()
  {
    $this->session->unset_userdata('admin');
    $this->session->sess_destroy();
    redirect(base_url('admin/login'));
  }
}

?>
