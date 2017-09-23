<?php
/**
 *
 */
class Penghitung
{

  function __construct()
  {
    $this->CI =& get_instance();
  }

  function soal($id_ujian)
  {
    $this->CI->load->model('admin/Soal_ujian_model');
    $soal = $this->CI->Soal_ujian_model->get_by_ujian($id_ujian);

    return count($soal);
  }

}

?>
