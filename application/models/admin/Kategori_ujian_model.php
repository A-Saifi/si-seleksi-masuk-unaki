<?php
/**
 *
 */
class Kategori_ujian_model extends CI_Model
{
  function get_all()
  {
    $this->db
      ->select('*')
      ->from('kategori_ujian');

    return $this->db->get()->result();
  }
}
  ?>
