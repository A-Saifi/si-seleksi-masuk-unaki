<?php
/**
 *
 */
class Jawaban
{

  function __construct()
  {
    $this->CI =& get_instance();
  }

  function tampil($id_soal)
  {
    $this->CI->load->model('admin/Jawaban_model');
    $jawaban =$this->CI->Jawaban_model->get_by_soal($id_soal);

    return $jawaban;
  }
}

?>
