<?php
/**
 *
 */
class Peserta_model extends CI_Model
{
  function get_all()
  {
    $this->db
      ->select('*')
      ->from('peserta');

    return $this->db->get()->result();
  }
  
}

?>
