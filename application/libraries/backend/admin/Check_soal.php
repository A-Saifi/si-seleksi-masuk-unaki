<?php
/**
 *
 */
class Check_soal
{

  function __construct()
  {
    $this->CI =& get_instance();
  }

  function terpilih($id_ujian, $id_soal)
  {
    $this->CI->load->model('admin/Soal_ujian_model');
    $soal = $this->CI->Soal_ujian_model->get_by_ujian_soal($id_ujian, $id_soal);

    if (!empty($soal)) {
      return true;
    }else {
      return false;
    }
  }
}

?>
