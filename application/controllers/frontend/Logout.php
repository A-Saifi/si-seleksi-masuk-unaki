<?php
/**
 *
 */
class Logout extends Frontend
{
  function index()
  {
    $this->session->unset_userdata('peserta');
    $this->session->sess_destroy();
    redirect(base_url());
  }
}

?>
