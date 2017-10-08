<?php
/**
 *
 */
class Logout extends Peserta
{
  function index()
  {
    $this->session->unset_userdata('peserta');
    $this->session->sess_destroy();
    $this->alert("Anda berhasil LogOut", base_url());
  }
}

?>
