<?php
/**
 *
 */
class Check_kelas
{

  function __construct()
  {
    $this->CI =& get_instance();
  }

  function can_delete($id_kelas)
  {
    $this->CI->load->model('Kelas_model');
    $peserta = $this->CI->Kelas_model->get_peserta($id_kelas);

    if ($peserta!=null) {
      return false;
    }else {
      return true;
    }
  }
}

?>
