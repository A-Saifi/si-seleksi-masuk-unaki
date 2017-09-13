<?php
/**
 *
 */
class Soal_model extends CI_Model
{
    function insert($data)
    {
      $this->db->insert('soal', $data);
      return true;
    }
}

?>
